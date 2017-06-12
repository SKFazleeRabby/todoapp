<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Managers\TodoHelper;
use App\Managers\TodoManager;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(TodoHelper $todo){
        $todo = $todo->viewAll();
        return view('todo.view')->with('todos',$todo);
    }
    
    public function store(TodoRequest $request, TodoManager $todo){
        $todo->create($request->all());
        return redirect()->route('todo.all');
    }

    public function view($slug, TodoHelper $todo){
        $todo = $todo->view($slug);
        return view('todo.single')->with('todo',$todo);
    }
    
    public function edit($slug, TodoHelper $todo){
        $todo = $todo->view($slug);
        return view('todo.edit', compact('todo'));
    }

    public function update($slug, TodoManager $todo, TodoRequest $request){
        $todo->update($slug, $request->all());
        return redirect()->route('todo.all');
    }

    public function delete($slug, TodoManager $todo){
        $todo->delete($slug);
        return redirect()->route('todo.all');
    }

    public function markedAsCompleted($slug, TodoHelper $todo){
        $todo->markedAsComplete($slug);
        return redirect()->route('todo.all');
    }

    public function deleteAllCompleted(TodoHelper $todo){
        $todo->deleteAllCompleted();
        return redirect()->route('todo.all');
    }
}
