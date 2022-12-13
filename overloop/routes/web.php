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

Route::get('/admin', function () {
    return view('admin.index',[
        'title' => 'Dashboard'
    ]);
});

Route::resource('admin/product', 'App\Http\Controllers\Admin\ProductController');
Route::resource('admin/category', 'App\Http\Controllers\Admin\CategoryController');
Route::resource('admin/stock', 'App\Http\Controllers\Admin\StockController');
Route::resource('admin/detail', 'App\Http\Controllers\Admin\DetailController');
Route::resource('/', 'App\Http\Controllers\CheckController');
Route::resource('admin/customer', 'App\Http\Controllers\Admin\CustomerController');

Route::get('/admin/sold', 'App\Http\Controllers\SoldController@index');
Route::get('/admin/sold/print_pdf', 'App\Http\Controllers\SoldController@print_pdf');