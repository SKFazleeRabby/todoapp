<?php

namespace App\Managers;

use App\Todo;

class TodoManager
{
    /**
     * @var Todo
     */
    private $todo;
    /**
     * @var Slug
     */
    private $slug;
    private $today;

    public function __construct(Todo $todo, Slug $slug)
    {
        $this->todo = $todo;
        $this->slug = $slug;
    }

    public function create($data){
        $this->todo->name = $data['name'];
        $this->todo->details = $data['details'];
        $this->todo->dueDate = date('Y-m-d', strtotime($data['dueDate']));
        $this->todo->slug = $this->slug->createSlug($data['name']);

        $this->todo->save();
    }

    public function update($slug, $data)
    {
        $updateTodo = $this->todo->where('slug','=',$slug)->first();
        $updateTodo->name = $data['name'];
        $updateTodo->details = $data['details'];
        $updateTodo->dueDate = date('Y-m-d', strtotime($data['dueDate']));

        $updateTodo->update();
    }

    public function delete($slug){
        $this->todo->where('slug','=',$slug)->delete();
        return;
    }
}