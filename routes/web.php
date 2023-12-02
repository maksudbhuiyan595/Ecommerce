<?php


use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryCongroller;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\WebsiteController;
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

//for website
Route::get('/',[WebsiteController::class,'webhome'])->name('webhome');




//for admin panel
Route::get('admin/home',[HomeController::class,'home'])->name('home');

Route::controller(CategoryCongroller::class)->group(function(){
    Route::get('categories/list','list')->name('category.list');
    Route::get('categories/create','create')->name('category.create');
    Route::post('categories/store','store')->name('category.store');
    Route::get('categories/view/{categoryId}','view')->name('category.view');
    Route::get('categories/edit/{categoryId}','edit')->name('category.edit');
    Route::put('categories/update/{categoryId}','update')->name('category.update');
    Route::delete('categories/delete/{categoryId}','delete')->name('category.delete');
});

Route::controller(BrandController::class)->group(function(){
    Route::get('brands/list','list')->name('brand.list');
    Route::get('brands/create','create')->name('brand.create');
    Route::post('brands/store','store')->name('brand.store');
    Route::get('brands/view/{brandId}','view')->name('brand.view');
    Route::get('brands/edit/{brandId}','edit')->name('brand.edit');
  Route::put('brands/update/{brandId}','update')->name('brand.update');
    Route::delete('brands/delete/{brandId}','delete')->name('brand.delete');
});