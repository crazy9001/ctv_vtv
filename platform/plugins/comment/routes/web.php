<?php

Route::group(['namespace' => 'Botble\Comment\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('core.base.general.admin_dir'), 'middleware' => 'auth'], function () {

        // Admin routes
        Route::post('comments/logout', 'AdminController@logout');
        Route::get('comments/list', 'AdminController@dashboard')->name('comments.dashboard');
        Route::get('comments/settings', 'AdminController@settings')->name('comments.settings');
        Route::post('comments/settings', 'AdminController@updateSettings');
        Route::delete('comments/settings', 'AdminController@resetSettings');

    });

});
