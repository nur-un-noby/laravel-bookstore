<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [bookController::class ,'index'] )->name('books.index');
Route::get('books/{id}/show', [bookController::class ,'show'] )->name('books.show');

Route::get('books/create',[bookController::class,'create'])->name('books.create');
Route::post('/books',[bookController::class,'store'])->name('books.store');

Route::get('books/{id}/edit',[bookController::class,'edit'])->name('books.edit');
Route::post('books/update',[bookController::class,'update'])->name('books.update');