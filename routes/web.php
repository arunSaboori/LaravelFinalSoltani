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


//for test crud Enter Url localhost:8000/todo   
//
//get all query and return the view todo.index
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');

//return the view todo.create
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');

//insert va validation and redircht todo.index
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');

//return view todo.edit
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
//update
Route::put('update-student/{id}', [TodoController::class, 'update']);
// deleting the id 
Route::get('/todo/delete/{id}', [TodoController::class, 'destroy'])->name('todo.delete');
