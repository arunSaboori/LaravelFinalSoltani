<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {

        $todos = Todo::query()->get()->all();
        return view('Todo.index', compact('todos'));
    }





    public function store(Request $request)
    {
        Todo::query()->insert([
            'name' => $request->name,
            'title' => $request->title
        ], $request->validate([
            'name' => 'required',
            'title' => 'required',
        ]));
        return redirect()->route('todo.index');
    }



    public function update(Request $request)
    {
        Todo::query()->where('id', $request->id)->update([
            'name' => $request->name,
            'title' => $request->title
        ]);
        return redirect()->route('todo.index');
    }



    public function create()
    {
        return view('Todo.create');
    }



    
    public function edit(Todo $todo)
    {

        return view('todo.edit', compact('todo'));
    }





    public function destroy($id)
    {
    $todo =Todo::find($id);
    $todo->delete();
    return redirect()->route('todo.index');
    

    }
}
