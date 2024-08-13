<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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

Route::get('/companies', [CompanyController::class, 'index'])->name('companiesindex');
Route::get("/company/delete/{id}",[CompanyController::class,'delete_company'])->name("companydelete");
Route::post('/company/create',[CompanyController::class,"create_company"])->name("companycreate");

Route::get('/products', [ProductController::class, 'index'])->name('productsindex');
Route::get("/product/delete/{id}",[ProductController::class,'delete_product'])->name("productdelete");
Route::post('/product/create',[ProductController::class,"create_product"])->name("productcreate");