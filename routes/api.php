<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\UserController;
use App\Http\Controllers\UserActivityController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'users' => UserController::class,
    'user_activities' => UserActivityController::class,
]);