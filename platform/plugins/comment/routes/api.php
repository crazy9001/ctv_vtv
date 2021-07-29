<?php

Route::group([
    'middleware' => 'api',
    'prefix'     => 'api/v1',
    'namespace'  => 'Botble\Comment\Http\Controllers',
], function () {

    // Comments routes
    Route::resource('comments', 'CommentController');
    Route::patch('comments/{id}', 'CommentController@update');
    Route::post('comments/preview', 'CommentController@preview');
    Route::put('comments/{id}/report', 'CommentController@report');
    Route::post('comments/bulk-update', 'CommentController@bulkUpdate');

    // Comment votes routes
    Route::post('comments/{id}/upvote', 'VoteController@upvote');
    Route::post('comments/{id}/downvote', 'VoteController@downvote');
    Route::delete('comments/{id}/remove-vote', 'VoteController@remove');

});
