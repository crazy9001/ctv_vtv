<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\VtvCollege\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'VtvCollegeController@getHello');
//        Route::get('introduce', 'VtvCollegeController@getIntroduce')
//            ->name('public.introduce');
    });
});

Theme::routes();

Route::group(['namespace' => 'Theme\VtvCollege\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'VtvCollegeController@getIndex')
            ->name('public.index');

        Route::get('sitemap.xml', 'VtvCollegeController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'VtvCollegeController@getView')
            ->name('public.single');

    });
});
