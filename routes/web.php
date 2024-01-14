<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('products', [
    ProductsController::class,
    'index'
])->name('products');

Route::get('products/{productName}/{id}', [
    ProductsController::class,
    'detail'
])->where([
    'detail' => '[a-zA-Z0-9]+',
    'id' => '[0-9]+'
]);
