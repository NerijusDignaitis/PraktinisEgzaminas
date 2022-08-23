<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'index']);
Route::get('/add-book', [BookController::class, 'addBook']);


//Route::get('/',[BookController::class,'index']);
//Route::get('/add-event',[BookController::class,'addBook']);
//Route::post('/store',[BookController::class,'store']);
//Route::get('/books/{book}',[BookController::class,'showBooks']);
//Route::get('/books/delete/{book}',[BookController::class,'deleteBook']);
//Route::get('/books/update/{book}',[BookController::class,'updateBook']);
