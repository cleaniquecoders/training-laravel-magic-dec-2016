<?php

namespace App\Routes\API\V1;

use Illuminate\Support\Facades\Route;

/**
 *    Setup Routes for Post
 */
class Post
{
    public static function routes()
    {
        Route::group([
            'prefix' => 'V1',
            'middleware' => [],
        ], function () {
            Route::resource('posts', '\App\Http\Controllers\API\V1\PostController');
        });
    }
}
