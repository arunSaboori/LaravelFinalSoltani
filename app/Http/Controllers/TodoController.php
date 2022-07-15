<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
            'title' => $request->title,
            'description' => $request->description,
            'grouping' => $request->grouping,
        ], $request->validate([
            'title' => 'required',
            'description' => 'required',
            'grouping' => 'required',
        ]));
        return redirect()->route('todo.index');
    }

    public function create()
    {
        return view('Todo.create');
    }



    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index');
    }

    public function update(Request $request, $todo)
    {

        $todos = Todo::find($todo);
        $todos->title = $request->input('title');
        $todos->description = $request->input('description');
        $todos->grouping = $request->input('grouping');
         $todos->update();
        return redirect()->route('todo.index')->with('status', 'Student Updated Successfully');
    }


          public function edit(Todo $todo)
   {

       return view('todo.edit', compact('todo'));
}


public function getitem(){

$item = Todo::query()->get()->all();
return view('todo.item',compact('item'));

}


public function search(Request $request){

    $search = $request->input('search');

    $posts = Todo::query()
                ->where('title', 'LIKE', "%{$search}%")
                ->get();

                return view('todo.search', compact('posts'));

}


}
