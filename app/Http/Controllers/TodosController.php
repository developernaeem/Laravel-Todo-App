<?php

namespace App\Http\Controllers;
use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller {

    public function index() {
        // fetch all todos form database...
        // display them in the todos.index page....

        /* Step 1 */
        // $todos = Todo::all();
        // return view('todos.index')->with('todos', $todos);

        /* Step 2 */
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $id) {
		return view('todos.show')->with('todo', $id);
    }

    public function create() {
        return view('todos.create');
    }

    public function store() {
        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['todoName'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        session()->flash('success', 'Todo created successfully');
        return redirect('/todos');
    }

    public function edit(Todo $id) {
        return view('todos.edit')->with('todo', $id);
    }

    public function update(Todo $id) {
        $data = request()->all();

        $id->name = $data['todoName'];
        $id->description = $data['description'];
        $id->save();
        session()->flash('success', 'Todo Updated successfully');
        return redirect('/todos');
    }

    public function destroy(Todo $id) {
        $id->delete();
        session()->flash('success', 'Todo deleted successfully');
        return redirect('/todos');
    }

    public function complete(Todo $id) {
        $id->completed = true;
        $id->save();
        session()->flash('success', 'Todo completed successfully');
        return redirect('/todos');
    }
}
