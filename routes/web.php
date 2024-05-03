<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PC;

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

Route::get('/', [PC::class,'home'])->name('home');
Route::get('/create', [PC::class,'create'])->name('create');
Route::get('/edit/{id}', [PC::class,'edit'])->name('edit');
Route::post('/update', [PC::class,'update'])->name('update');
Route::get('/show', [PC::class,'show'])->name('view');
Route::get('/delete/{id}', [PC::class,'delete']);
Route::post('/store', [PC::class,'store'])->name('store');
