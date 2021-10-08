<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//routes for task//

Route::get('admin/dashboard',[HomeController::class,'admindashboard'])->name('admin.dashboard')->middleware('is_admin');

Route::get('categories',[CategoryController::class,'index'])->name('category.index')->middleware('is_admin');
Route::get('create_category',[CategoryController::class,'create'])->name('category.create')->middleware('is_admin');
Route::get('add_category',[CategoryController::class,'add_category'])->name('category.add_category')->middleware('is_admin');

Route::get('create_product/{id}',[ProductController::class,'create'])->name('product.create')->middleware('is_admin');
Route::get('add_product',[ProductController::class,'add_product'])->name('product.add_product')->middleware('is_admin');