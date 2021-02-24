<?php

Route::group(['namespace' => 'Botble\LiveTemplate\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix()], function () {

        Route::group(['prefix' => 'live-templates'], function () {

            Route::get('/', [
                'as'         => 'live-template.index',
                'uses'       => 'LiveTemplateController@index',
                'permission' => 'live-template.index',
            ]);

            Route::group(['prefix' => 'posts'], function () {
                Route::get('published', [
                    'as' => 'get.posts.published',
                    'uses' => 'LiveTemplateController@getPostsPublished',
                    'middleware' => 'preventDemo',
                    'permission' => 'live-template.index',
                ]);
                Route::group(['prefix' => 'high_light'], function () {
                    Route::get('home', [
                        'as' => 'get.posts.high_light.home',
                        'uses' => 'LiveTemplateController@getHighLightHomeConfig',
                        'middleware' => 'preventDemo',
                        'permission' => 'live-template.index',
                    ]);
                    Route::post('settings/home', [
                        'as' => 'settings.posts.high_light.home',
                        'uses' => 'LiveTemplateController@postHighLightHomeConfig',
                        'middleware' => 'preventDemo',
                        'permission' => 'live-template.index',
                    ]);
                });
            });

        });
    });

});
