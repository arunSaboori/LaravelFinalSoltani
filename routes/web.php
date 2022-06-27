<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Http\Request;
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





// Route::get('/todo', function () {$key = Todo::query()->get()->all();
// return view('Todo.index',compact('key'));})->name('todo.index');
Route::get('/todo',[TodoController::class,'index'])->name('todo.index');

// Route::get('/todo/create',function(){
//     return view('Todo.create');
// });

Route::get('/todo/create',[TodoController::class,'create']);


// Route::post('/todo/store',function(Request $request){
//     Todo::query()->insert([
//         'name'=>$request->name,
//         'title'=>$request->title
//     ]); 
//              return redirect()->route('todo.index');
// })->name('todo.store');
Route::post('/todo/store',[TodoController::class,'store'])->name('todo.store');
   




Route::get('/todo/{todo}/edit',function(Todo $todo){
    return view ('todo.edit',compact('todo',compact('todo')));                                       
    });


Route::post('/todo/update',function(Request $request){
    Todo::query()->where('id',$request->id)->update([
                'name'=>$request->name,
                 'title'=>$request->title
             ]); 
                      return redirect()->route('todo.index');
         })->name('todo.update');
                                           
 

