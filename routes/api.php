<?php

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('cors')->prefix('v1')->group(function () {

    Route::get('/breaking', "PostsController@breaking");
    Route::get('/articole', "PostsController@allPosts");
    Route::middleware('cors')->get('/articole/{slug}', "PostsController@single");

    Route::get('/guides', "GuideController@index");
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
