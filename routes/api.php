<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!


TO CREATE A RESOURCE IN LARAVEL, FOLLOW THE FOLLOWING STEPS
1.create a database and migrations.
2. create a model to connect to the database
3.create a controller to get information from the database
4. return that information.
*/

Route::get('/posts');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
