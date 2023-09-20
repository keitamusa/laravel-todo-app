<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class TodoController extends Controller
{


    public function index() {
        $todos = Todo::all();
        return view('components.layout', compact('todos'));
    }

    public function store(Request $request, Todo $todo) {
        $todoForm = $request->validate([
            'description' => 'required'
        ]);
        Todo::create($todoForm);
        $todos = Todo::all();
        // example:
        toast('Todo created successfully','success')->autoClose(3000);
        return redirect('/');

    }


    public function view() {
        $todos = Todo::all();
        return view('view-todos', compact('todos'));
    }


    public function edit(Todo $todo) {
        return view('edit-todo', ['todos' => $todo]);
    }


    public function update(Todo $todo, Request $request) {
        $todoForm = $request->validate([
        'description' => 'required'
        ]);
        $todo->update($todoForm);
        toast('Todo updated successfully','success')->autoClose(3000);
        return redirect('/');
    }

    public function delete(Todo $todo){
        $todo->delete();
        toast('Todo deleted successfully','success')->autoClose(3000);
        return back();
    }
}
