<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', [FrontController::class, "index"]);

Route::get('/movie-detail/{id}', [FrontController::class, "detail"])->name("movieDetail");

Route::get('/login', [FrontController::class, "login"])->name("login");
Route::post('/login', [BackController::class, "postLogin"])->name("postLogin");
Route::get('/logout', [BackController::class, "logout"])->name("logout");

Route::middleware("auth")->name("backoffice->")->prefix("backoffice")->group(function() {
    Route::get('/category', [CategoryController::class, "index"])->name("category");
    Route::post('/category/create', [CategoryController::class, "store"])->name("category->add");
    Route::post('/category/update/{id}', [CategoryController::class, "update"])->name("category->update");
    Route::post('/category/delete/{id}', [CategoryController::class, "destroy"])->name("category->delete");
});