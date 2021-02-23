<?php

namespace Botble\LiveTemplate\Providers;

use Botble\LiveTemplate\Models\LiveTemplate;
use Illuminate\Support\ServiceProvider;
use Botble\LiveTemplate\Repositories\Caches\LiveTemplateCacheDecorator;
use Botble\LiveTemplate\Repositories\Eloquent\LiveTemplateRepository;
use Botble\LiveTemplate\Repositories\Interfaces\LiveTemplateInterface;
use Botble\Base\Supports\Helper;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class LiveTemplateServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(LiveTemplateInterface::class, function () {
            return new LiveTemplateCacheDecorator(new LiveTemplateRepository(new LiveTemplate));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/live-template')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->publishAssets()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([LiveTemplate::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-live-template',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/live-template::live-template.name',
                'icon'        => 'fas fa-podcast',
                'url'         => route('live-template.index'),
                'permissions' => ['live-template.index'],
            ]);
        });
    }
}
