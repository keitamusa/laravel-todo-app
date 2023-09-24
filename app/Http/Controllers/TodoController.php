<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class TodoController extends Controller
{


    public function index() {
        $todos = Todo::all();

        return view('todos.index', ['todos' => $todos]);
    }


    public function store(Request $request, Todo $todo) {
        $todoForm = $request->validate([
            'description' => 'required'
        ]);

        Todo::create($todoForm);
        $todos = Todo::all();

        toast('Todo created successfully','success')->autoClose(2000);
        return redirect('/');

    }


    public function view() {
        return view('todos/view', $todos = Todo::all());
    }


    public function edit(Todo $todo) {
        return view('todos.edit', ['todos' => $todo]);
    }


    public function update(Todo $todo, Request $request) {
        $todoForm = $request->validate([
        'description' => 'required'
        ]);

        $todo->update($todoForm);
        toast('Todo updated successfully','success')->autoClose(2000);

        return redirect('/');
    }


    public function delete(Todo $todo){
        $todo->delete();

        toast('Todo deleted successfully','success')->autoClose(2000);

        return back();
    }
}
