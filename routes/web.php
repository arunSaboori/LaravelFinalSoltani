<?php

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('welcome');
});



Route::get('/todo',[TodoController::class,'index'])->name('todo.index');
Route::get('/todo/create',[TodoController::class,'create']);
Route::post('/todo/store',[TodoController::class,'store'])->name('todo.store');
Route::get('/todo/{todo}/edit',[TodoController::class,'edit']);
Route::post('/todo/update',[TodoController::class,'update'])->name('todo.update');
                                           
 



