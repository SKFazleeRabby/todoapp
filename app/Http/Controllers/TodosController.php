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
    }

    public function view($slug, TodoHelper $todo){
        $todo = $todo->view($slug);
        return view('todo.single')->with('todos',$todo);
    }
}
