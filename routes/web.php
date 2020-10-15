<?php

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

Route::view('/', 'administrador');

Route::view('products', 'products')->name('pro');

Route::view('posts', 'posts');

Route::view('inventory', 'inventory')->name('inventory');

Route::view('billing', 'inventory')->name('billing');


