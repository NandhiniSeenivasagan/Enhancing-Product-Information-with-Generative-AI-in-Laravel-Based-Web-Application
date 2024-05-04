<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use app\Admin\Controllers\ProductitemController;

use App\Http\Controllers\ContactController; 
use App\Http\Controllers\HelpController; 
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LogDesController;
//use App\Http\Controllers\WooController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('product/{id}/ai-edit/history', [LogController::class, 'selectProductItem'])->name('productitems.select'); 
Route::get('product/{id}/ai-edit/historyd', [LogDesController::class, 'selectProductItem'])->name('productitems.selectd'); 
Route::get('/product/{id}', [ProductController::class, 'selectProductItem'])->name('productitems.select'); 
Route::get('/product/{id}/optimize-title-ai', [ProductController::class, 'optimizeTitleAI'])->name('optimize-title');
Route::post('product/{id}/ai-edit', [UpdateController::class, 'updateProduct'])->name('product.ai-edit');
Route::get('/Contact', '\App\Http\Controllers\ContactController@index');
Route::get('/Help', '\App\Http\Controllers\HelpController@index');
Route::get('/About', '\App\Http\Controllers\AboutController@index');
Route::put('/admin/products/{id}', 'ProductitemController@update');
//
Route::post('/woocommerce/products/create', [WooCommerceController::class, 'createProduct']);