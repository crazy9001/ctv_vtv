<?php

Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\LiveTemplate\Http\Controllers\API',
], function () {

    Route::group(['prefix' => 'settings'], function () {

        Route::group(['prefix' => 'high_light', 'permission' => 'settings.high_light'], function () {

            Route::get('home', [
                'as'   => 'settings.high_light.home',
                'uses' => 'LiveTemplateController@getHighLightHomeConfig',
            ]);

            Route::post('home', [
                'as'   => 'settings.high_light.home.edit',
                'uses' => 'LiveTemplateController@postHighLightHomeConfig',
            ]);


        });

    });

});
