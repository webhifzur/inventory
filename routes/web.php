<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductCompanyController;
use App\Http\Controllers\ProductMeasureUnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductWarrantyController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\CartController;














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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::resource('productcategory' , ProductCategoryController::class);
    Route::resource('productcompany', ProductCompanyController::class);
    Route::resource('productmeasureunit', ProductMeasureUnitController::class);
    Route::resource('products', ProductController::class);
    Route::resource('productwarranty', ProductWarrantyController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('purchase', PurchaseController::class);
    Route::resource('sales', SaleController::class);
    Route::resource('cart', CartController::class);



   
});
