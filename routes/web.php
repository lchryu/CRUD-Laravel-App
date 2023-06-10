<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;
// Route::get('products', [
//     ProductController::class,
//     'index'
// ]);

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostsController::class, 'index']);
Route::resource('/foods', FoodsController::class);
/*Route::get('products', [
    ProductsController::class,
    'index'
])->name('products');*/



Route::get('/portfolio', function () {
   return "This is Portfolio (cần fix)";
});
Route::get('/contact', function () {
    return "Lương Chung Hội<br>62THNB<br>0978259158 (Cần fix)";
});
// how to validate id only integer ??
Route::get('products/{productName}/{id}', [
    ProductsController::class,
    'detail'
])->where([
    'productName' => '[a-zA-Z0-9]+',
    'id'          => '[0-9]+'
]);
