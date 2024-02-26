<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/ListProduct',[ProductController::class ,'ProductList'] );
Route::post('/Add',[ProductController::class,'ProductAdd']);
Route::get('/Delete/{id}',[ProductController::class,'ProductDelete']);
Route::get('/AddProduct',[ProductController::class ,'ProductAddV'] );
