<?php

namespace Botble\Admission\Providers;

use EmailHandler;
use Illuminate\Routing\Events\RouteMatched;
use Botble\Base\Supports\Helper;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Admission\Repositories\Interfaces\AdmissionInterface;
use Botble\Admission\Models\Admission;
use Botble\Admission\Repositories\Caches\AdmissionCacheDecorator;
use Botble\Admission\Repositories\Eloquent\AdmissionRepository;
use Event;
use Illuminate\Support\ServiceProvider;

class AdmissionServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(AdmissionInterface::class, function () {
            return new AdmissionCacheDecorator(new AdmissionRepository(new Admission));
        });


        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/admissions')
            ->loadAndPublishConfigurations(['permissions', 'email'])
            ->loadRoutes(['web'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->loadMigrations()
            ->publishAssets();

        Event::listen(RouteMatched::class, function () {
            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-admission',
                'priority'    => 120,
                'parent_id'   => null,
                'name'        => 'plugins/admissions::admission.menu',
                'icon'        => 'far fa-envelope',
                'url'         => route('admissions.index'),
                'permissions' => ['admissions.index'],
            ]);

            //EmailHandler::addTemplateSettings(CONTACT_MODULE_SCREEN_NAME, config('plugins.contact.email', []));
        });

        $this->app->booted(function () {
            $this->app->register(HookServiceProvider::class);
        });
    }
}
