<?php

use App\Http\Controllers\API\ProductCategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('products', [ProductController::class, 'all']);
Route::get('categories', [ProductCategoryController::class, 'all']);


Route::get('register', [UserController::class, 'register']);
Route::get('login', [UserController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {


    Route::get('user', [UserController::class, 'fetch']);
    Route::put('user', [UserController::class, 'update']);
    Route::post('logout', [UserController::class, 'logout']);
});
