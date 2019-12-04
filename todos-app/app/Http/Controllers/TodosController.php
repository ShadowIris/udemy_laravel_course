<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller {
    /****
    * Todos Controller
    * Input:
    * Outputs: full list of todos.
    ***/
    public function index() {
      // todos.index goes into todos dir then looks for file 'index'.
      // Lists all Todos
      return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo) {
      // Shows one todo via a get request.
      return view('todos.show')->with('todo', $todo);
    }

    public function create() {
      // Creates one todo item
      return view('todos.create');
    }

    public function store() {
      // Stores one todo item from create form
      $this->validate(request(), [
        'name' => 'required|max: 100',
        'description' => 'required|string'
      ]);

      $data = request()->all();
      $todo = new Todo();
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->completed = false;
      // saves to DB
      $todo->save();
      session()->flash('success', 'New todo created');

      return redirect('/todos');
    }

    public function edit(Todo $todo) {
      // Edit one todo.
      return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo) {
      // Updates one todo item from edit form
      $this->validate(request(), [
        'name' => 'required|max: 100',
        'description' => 'required|string'
      ]);

      $data = request()->all();
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      // saves to DB
      $todo->save();
      session()->flash('success', 'Todo updated');
      return redirect('/todos');
    }

    public function destroy(Todo $todo) {
      $todo->delete();
      session()->flash('success', 'Todo deleted successfully');
      return redirect('/todos');
    }

    public function completeTodo(Todo $todo) {
      $todo->completed = true;
      $todo->save();
      session()->flash('success', 'Todo item Done');

      return redirect('/todos');
    }
}
