<?php


Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\Media\Http\Controllers\API',
], function () {

    Route::group(['prefix' => 'media', 'as' => 'media.'], function () {


        Route::post('create/mediaFile', [
            'as'   => 'api.create.media.file',
            'uses' => 'MediaApiController@createMediaFile',
        ]);

    });
});
