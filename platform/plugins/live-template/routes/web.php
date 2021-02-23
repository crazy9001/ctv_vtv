<?php

Route::group(['namespace' => 'Botble\LiveTemplate\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'live-templates', 'as' => 'live-template.'], function () {
            Route::resource('', 'LiveTemplateController')->parameters(['' => 'live-template']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'LiveTemplateController@deletes',
                'permission' => 'live-template.destroy',
            ]);
        });
    });

});
