<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\ProductController::class, 'carousel']);
Route::get('/about',[\App\Http\Controllers\ProductController::class, 'carousel']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/card', [\App\Http\Controllers\BasketController::class, 'index'])->name('cardd');//Корзина/личный кабинет


Route::view('/findMe', 'findMe')->name('find');
Route::get('/catalog', [\App\Http\Controllers\ProductController::class, 'show'])->name('catalog');//вывод всех товаров в каталоге
Route::get('/card/{id}', [\App\Http\Controllers\ProductController::class, 'more'])->name('card');//вывод информации о конкретном товаре
//SOLID читать почаще и вникать(принципы разработки)
Route::get('/card', [\App\Http\Controllers\BasketController::class, 'index'])->name('cartPage');//для кнопки в корзину
Route::get('/card/add/{id}', [\App\Http\Controllers\BasketController::class, 'create'])->name('cartAdd');


// Route::get('/cart/add', [\App\Http\Controllers\BasketController::class, 'index'])->name('cartAdd');
