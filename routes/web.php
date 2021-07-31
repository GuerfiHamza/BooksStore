<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [App\Http\Controllers\Api\BooksController::class, 'index'])->name('books.index');
Route::get('/book/{book}', [App\Http\Controllers\Api\BooksController::class, 'show'])->name('books.show');
Route::get('/book', [App\Http\Controllers\Api\BooksController::class, 'search'])->name('books.search');
Route::get('/about', function () {
    return view('about');
})->name('about');