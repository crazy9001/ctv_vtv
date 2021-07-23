<?php

Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\LiveTemplate\Http\Controllers\API',
], function () {

    Route::group(['prefix' => 'settings'], function () {

        Route::group(['prefix' => 'categories'], function () {

            Route::get('/', [
                'as'   => 'settings.categories',
                'uses'       => 'LiveTemplateController@getCategories',
            ]);

        });

        Route::group(['prefix' => 'high_light', 'permission' => 'settings.high_light'], function () {

            Route::get('home', [
                'as'   => 'settings.high_light.home',
                'uses' => 'LiveTemplateController@getHighLightHomeConfig',
            ]);

            Route::post('home', [
                'as'   => 'settings.high_light.home.edit',
                'uses' => 'LiveTemplateController@postHighLightHomeConfig',
            ]);


            Route::get('category', [
                'as'   => 'settings.high_light.category',
                'uses' => 'LiveTemplateController@getHighLightCategoryConfig',
            ]);

            Route::post('category', [
                'as'   => 'settings.high_light.category.edit',
                'uses' => 'LiveTemplateController@postHighLightCategoryConfig',
            ]);


        });

    });

});
