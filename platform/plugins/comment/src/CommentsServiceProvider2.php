<?php

namespace Botble\Comment;

use Illuminate\Routing\Events\RouteMatched;
use ReCaptcha\ReCaptcha;
use Illuminate\Support\Facades\Gate;
use Event;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Botble\Comment\Events\CommentWasPosted;
use Botble\Comment\Listeners\HandleCommentWasPosted;

class CommentsServiceProvider2 extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerServices($this->app);
        $this->mergeConfigFrom(__DIR__.'/../config/comments.php', 'comments');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (! $this->app->configurationIsCached()) {
            $this->overrideConfig();
        }

        if (! $this->app->routesAreCached()) {
            require __DIR__.'/Http/routes.php';
        }

        if ($this->app->runningInConsole()) {
            $this->definePublishing();

            if (method_exists($this, 'loadMigrationsFrom')) {
                $this->loadMigrationsFrom(__DIR__.'/../migrations');
            }
        }

        $this->defineResources();

        $this->registerPolicy();

        $this->registerListeners();

        $this->registerValidators();

        $this->configureCommentModel();

        $this->loadMenuDashboard();

    }

    /**
     * @return void
     */
    protected function registerServices($app)
    {
        $app->singleton('comments.formatter', function ($app) {
            return new Formatter(Config::get('comments'), $app['cache.store']);
        });

        $app->singleton('comments.moderator', function ($app) {
            return new Moderator(Config::get('comments'), $app['comments.formatter']);
        });

        $app->singleton('comments.repository', function ($app) {
            return new CommentRepository(Config::get('comments'), $app['comments.moderator']);
        });

        $app->singleton('comments.settings', function ($app) {
            $conn = $app['db']->connection();
            $table = Config::get('comments.table_names.settings');
            return new Settings($conn, $app['cache.store'], $table);
        });

        $app->alias('comments.settings', Contracts\Settings::class);
        $app->alias('comments.formatter', Contracts\Formatter::class);
        $app->alias('comments.moderator', Contracts\Moderator::class);
        $app->alias('comments.repository', Contracts\CommentRepository::class);
    }

    /**
     * Override config values from the database.
     *
     * @return void
     */
    protected function overrideConfig()
    {
        $config = Config::get('comments');
        $settings = $this->app['comments.settings'];
        $except = ['settings', 'models', 'table_names'];
        $tableName = $config['table_names']['settings'];

        if (! $config['settings'] || ! Schema::hasTable($tableName)) {
            return;
        }

        foreach ($config as $key => $value) {
            if (in_array($key, $except)) {
                continue;
            }

            $settingValue = $settings->get($key);

            if (is_null($settingValue)) {
                $settings->set($key, $value);
            } else {
                Config::set('comments.'.$key, $settingValue);
            }
        }

        if (! trait_exists('Illuminate\Broadcasting\InteractsWithSockets')) {
            Config::set(['comments.broadcast' => false]);
        }
    }

    /**
     * @return void
     */
    protected function registerPolicy()
    {
        Gate::policy(Config::get('comments.models.comment'), CommentPolicy::class);
    }

    /**
     * @return void
     */
    protected function registerListeners()
    {
        Event::listen(CommentWasPosted::class, HandleCommentWasPosted::class);
    }

    /**
     * @return void
     */
    protected function defineResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'plugins/comment');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'plugins/comment');
    }

    /**
     * @return void
     */
    protected function definePublishing()
    {
        $this->publishes([
            __DIR__.'/../migrations' => database_path('migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../config/comments.php' => config_path('comments.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/comments'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/comments'),
        ], 'public');
    }

    /**
     * @return void
     */
    protected function configureCommentModel()
    {
        $model = Config::get('auth.model');
        $model = Config::get('auth.providers.users.model', $model);
        $model = Config::get('comments.models.user', $model);

        $modelKey = (new $model)->getKey();

        Comment::setUserModel($model, $modelKey);
    }

    /**
     * @return void
     */
    protected function registerValidators()
    {
        Validator::extend('comment_captcha', function ($attribute, $value) {
            $recaptcha = new ReCaptcha(Config::get('services.recaptcha.secret'));
            return $recaptcha->verify($value, request()->ip())->isSuccess();
        });
    }

    protected function loadMenuDashboard()
    {
        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Comment::class]);
            }

            dashboard_menu()->registerItem([
                'id' => 'cms-plugins-comment',
                'priority' => 5,
                'parent_id' => null,
                'name' => 'plugins/comment::comment.menu_name',
                'icon' => 'fa fa-list',
                'url' => route('comments.dashboard'),
                'permissions' => ['comments.dashboard'],
            ])
                ->registerItem([
                    'id' => 'cms-plugins-comment-comments',
                    'priority' => 5,
                    'parent_id' => 'cms-plugins-comment',
                    'name' => 'plugins/comment::comment.menu_name',
                    'icon' => null,
                    'url' => route('comments.dashboard'),
                    'permissions' => ['comments.dashboard'],
                ])
                ->registerItem([
                    'id' => 'cms-plugins-comment-settings',
                    'priority' => 5,
                    'parent_id' => 'cms-plugins-comment',
                    'name' => 'plugins/comment::settings.menu_name',
                    'icon' => null,
                    'url' => route('comments.settings'),
                    'permissions' => ['comments.settings'],
                ]);
        });
    }

}
