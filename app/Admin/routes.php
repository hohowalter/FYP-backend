<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('table/users', UserController::class);
    $router->resource('table/useractivity', UserActivityController::class);
    $router->resource('table/trafficactivity', TrafficActivityController::class);
    $router->resource('table/link', LinkController::class);
    $router->resource('table/recommendation', RecommendationController::class);

});
