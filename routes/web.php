<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadController;
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
 
Route::get('/', function () {
    return view('welcome');
});
Route::get('about',[AboutController::class,"index"]);
Route::get("contact",[ContactController::class,"index"]);
Route::get("register",[RegisterController::class,"register"]);
Route::post("register/save",[RegisterController::class,"saveRegister"]);
Route::post("register/save",[RegisterController::class,"saveRegister"])->name("register.save");

Route::get("product",[ProductController::class,"product"])->name("product");
Route::Post("createProduct",[ProductController::class,"createProduct"])->name("save.product");
Route::get("upload",[UploadController::class,"index"])->name("upload");
Route::post("upload/save",[UploadController::class,"saveUpload"])->name("upload.save");
