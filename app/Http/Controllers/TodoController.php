<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;
use function Pest\Laravel\patch;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index', ['todos' => todo::with('user')->Orderby('priority','asc')->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validate = request()->validate([
            'title' => 'required',
            'priority' => 'required',
            'deadline' => 'required',
        ]);

        Todo::create(
            [
                'user_id' => auth()->id(),
                'title' => request('title'),
                'priority' => request('priority'),
                'deadline' => request('deadline')
            ]
        );

        return redirect('/todo')->with('success', 'Updated!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return view('todo.show', ['todo' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todo.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Todo $todo)
    {
        if(auth()->id()!== $todo->user_id){
            abort(403, 'Unauthorized action.');
        }

        $validate = request()->validate([
            'title' => 'required',
            'priority' => 'required',
            'deadline' => 'required',
        ]);

        $todo->update($validate);

        return redirect('/todo')->with('success', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        if(auth()->id()!== $todo->user_id){
            abort(403, 'Unauthorized action.');
        }

        $todo->delete();

        return redirect('/todo')->with('success', 'Todo deleted successfully.');
    }
}
