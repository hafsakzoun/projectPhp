<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\wishlistController;
use App\Http\Controllers\Admin\CategoryController;


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
/* added by yasmina*/
Route::get('/storagesys&units','Admin\CategoryController@storagesysunits');
Route::get('/sofas&armchairs','Admin\CategoryController@sofasarmchairs');
Route::get('/tables&chairs','Admin\CategoryController@tableschairs');
Route::get('wishlist',[WishlistController::class,'index']);
Route::get('products',[ProductController::class,'productList']);

/*added by iman D*/
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/home',[StaticController::class , 'home']);
Route::get('/user',[StaticController::class , 'user']);
Route::get('/login',[StaticController::class , 'login']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->role_as == '1'){
            return view('admin.index');
        }elseif(Auth::user()->role_as == '0'){
            return view('user');
        }

        Route::get('/dashboard','Admin/FrontendController@index');
        Route::get('categories','Admin/CategoryController@index');
        Route::get('add-category','Admin/CategoryController@add');
        Route::post('insert-category','Admin/CategoryController@insert');
        Route::get('edit-prod/{id}', [CategoryController::class ,'edit']);
        Route::delete('delete-category/{id}', [CategoryController::class, 'destroy'])->name('delete-category');
    });
/* added by hafsa */
    



});
/*added by ferdaous
Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard','Admin/ProductController@index');
    Route::get('product','admin/ProductController@index');
    Route::get('add-product','admin/ProductController@add');
    Route::get('insert-product','admin\ProductController@insert');
    Route::get('edit-product/{id}',[ProductController::class,'edit']);
    Route::get('edit-product/{id}',[ProductController::class,'edit']);
    Route::get('update-product/{id}',[ProductController::class,'update']);
    Route::get('destroy-product/{id}',[ProductController::class,'destroy']);
    //Route::get('product',ProductControler::class,'index');
    Route::get('add-product',Productcontroler::class,'add');
    Route::get('delete-product',Productcontroler::class,'delete');

});*/