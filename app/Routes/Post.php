<?php

namespace App\Routes;

use Illuminate\Support\Facades\Route;

/**
 *    Setup Routes for Post
 */
class Post
{
    public static function routes()
    {
        Route::group([
            'prefix' => '',
            'middleware' => [],
        ], function () {
            Route::resource('posts', '\App\Http\Controllers\PostController');
        });
    }
}
