<?php

Route::group(['namespace' => 'Botble\Admission\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'admissions', 'as' => 'admissions.'], function () {

            Route::resource('', 'AdmissionController')->except(['create', 'store'])->parameters(['' => 'admissions']);

            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'AdmissionController@deletes',
                'permission' => 'admissions.destroy',
            ]);
        });
    });

    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
        Route::post('admission/send', [
            'as'   => 'public.send.admission',
            'uses' => 'PublicController@postSendAdmission',
        ]);
    });
});
