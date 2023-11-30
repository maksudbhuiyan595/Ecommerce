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
    Route::get('brands/store','store')->name('brand.store');
    Route::get('brands/view/{brandId}','view')->name('brand.view');
    Route::get('brands/edit/{brandId}','edit')->name('brand.edit');
    Route::get('brands/update/{brandId}','update')->name('brand.update');
    Route::get('brands/delete/{brandId}','delete')->name('brand.delee');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('products/list','list')->name('product.list');
    Route::get('products/create','create')->name('product.create');
    Route::post('products/store','store')->name('product.store');
    Route::get('products/view/{productId}','view')->name('product.view');
    Route::get('products/edit/{productId}','edit')->name('product.edit');
    Route::put('products/update/{productId}','update')->name('product.update');
    Route::delete('products/delete/{productId}','delete')->name('product.delete');
});

Route::controller(RoleController::class)->group(function(){
    Route::get('roles/list','list')->name('role.list');
    Route::get('roles/create','create')->name('role.create');
    Route::post('roles/store','store')->name('role.store');
    Route::get('roles/view/{roleId}','view')->name('role.view');
    Route::get('roles/edit/{roleId}','edit')->name('role.edit');
    Route::put('roles/update/{roleId}','update')->name('role.update');
    Route::delete('roles/delete/{roleId}','delete')->name('role.delete');
    Route::get('/assign-from/{roleId}','assignForm')->name('assign.form');
    Route::get('/assign-role/{roleId}','assign')->name('assign.role');
});