<?php

Route::group(['namespace' => 'Botble\LiveTemplate\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'live-templates'], function () {

            Route::get('/', [
                'as'         => 'live-template.index',
                'uses'       => 'LiveTemplateController@index',
                'permission' => 'live-template.index',
            ]);

            Route::group(['prefix' => 'high_light'], function () {
                Route::get('home', [
                    'as' => 'get.high_light.home',
                    'uses' => 'LiveTemplateController@getHighLightHomeConfig',
                    'middleware' => 'preventDemo',
                    'permission' => 'live-template.index',
                ]);

                Route::post('settings/home', [
                    'as' => 'settings.high_light.home',
                    'uses' => 'LiveTemplateController@postHighLightHomeConfig',
                    'middleware' => 'preventDemo',
                    'permission' => 'live-template.index',
                ]);
            });

        });
    });

});
