<?php

use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('admin/home',[HomeController::class,'home'])->name('home');

Route::controller(BrandController::class)->group(function(){
    Route::get('brands/list','list')->name('brand.list');
    Route::get('brands/create','create')->name('brand.create');
    Route::get('brands/store','store')->name('brand.store');
    Route::get('brands/view/{brandId}','view')->name('brand.view');
    Route::get('brands/edit/{brandId}','edit')->name('brand.edit');
    Route::get('brands/update/{brandId}','update')->name('brand.update');
    Route::get('brands/delete/{brandId}','delete')->name('brand.delee');
});