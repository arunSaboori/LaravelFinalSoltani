<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){

        $todos = Todo::query()->get()->all();
            return view('Todo.index',compact('todos'));
    }      
    
    
    
    public function store(Request $request){
        Todo::query()->insert([
            'name'=>$request->name,
            'title'=>$request->title
        ]); 
     return redirect()->route('todo.index');
    
    }




    public function create(){

    return view('Todo.create');

    }





    public function delete(Request $request){
 
        $request->delete();
        return redirect()->route('todo.index')
        ->with('success','Company has been deleted successfully');
        

    }
}
