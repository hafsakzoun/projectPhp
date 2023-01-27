<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dashboard',function(){
    return view('admin.index');
});
Route::get('/',function()
{
    return view('layouts.main');
});
Route::get('/home', function () {
    return view('layouts.main');
});
Route::get('/dashboard','Admin\FrontendController@index');
Route::get('/categories','Admin\CategoryController@index');
Route::get('/add-category','Admin\CategoryController@add');
Route::post('insert-category','Admin\CategoryController@insert');
/* added by yasmina*/
Route::get('/storagesys&units','Admin\CategoryController@storagesysunits');
Route::get('/sofas&armchairs','Admin\CategoryController@sofasarmchairs');
Route::get('/tables&chairs','Admin\CategoryController@tableschairs');
/*added by iman D*/
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');