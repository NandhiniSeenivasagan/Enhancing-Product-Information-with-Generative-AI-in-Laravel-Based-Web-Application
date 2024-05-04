<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\ProductitemController;
use App\Http\Controllers\ProductController;
Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('productitems', ProductitemController::class);
    $router->resource('create-api-logs', CreateApiLogsController::class);
    $router->resource('apilogs', ApilogsController::class);
    $router->resource('generated_titles', generated_titlesControllter::class);
    Route::get('/product', [ApilogsController::class, 'selectProductItem'])->name('productitems.select'); 
    
    
});
