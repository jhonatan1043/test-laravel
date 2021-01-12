<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\saleController;
use App\Http\Controllers\productCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// CRUD CATEGORIES ----------------------------------------------------------------
Route::get('/category/list',[categoryController::class ,"list"]);
Route::get('/category/getCategory',[categoryController::class ,"getCategory"]);
Route::post('/category/save',[categoryController::class ,"store"]);
Route::put('/category/update',[categoryController::class ,"update"] );
Route::delete('/category/delete',[categoryController::class ,"delete"]);
// CRUD PRODUCTS ----------------------------------------------------------------
Route::get('/product/list',[productController::class ,"list"]);
Route::get('/product/getProduct', [productController::class ,"getProduct"]);
Route::post('/product/save', [productController::class ,"store"]);
Route::put('/product/update', [productController::class ,"update"]);
Route::delete('/product/delete', [productController::class ,"delete"]);
// CRUD LOCATIONS ----------------------------------------------------------------
Route::get('/location/list',[locationController::class ,"list"]);
Route::get('/location/getLocation',[locationController::class ,"getLocation"]);
Route::post('/location/save',[locationController::class ,"store"]);
Route::put('/location/update',[locationController::class ,"update"]);
Route::delete('/location/delete',[locationController::class ,"delete"]);
// CRUD SALE ----------------------------------------------------------------------
Route::get('/sale/list',[saleController::class, "list"]);
Route::post('/sale/save',[saleController::class, "store"]);
Route::put('/sale/update', [saleController::class, "update"]);
Route::delete('/sale/delete',[saleController::class, "delete"]);
// PRODUCT CATEGORY ----------------------------------------------------------------
Route::post('/product/category/save',[productCategoryController::class,"store"]);
Route::get('/product/category/get',[productCategoryController::class,"getProductCategory"]);

