<?php
/**
 * Created by PhpStorm.
 * User: Fazlee Rabby
 * Date: 11-Jun-17
 * Time: 12:08 AM
 */

namespace App\Managers;


use App\Todo;

class TodoHelper
{
    private $today;
    /**
     * @var Todo
     */
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->today = date('Y-m-d');
        $this->todo = $todo;
    }

    public function viewAll(){
        $results = $this->todo->latest()->get();
        foreach ($results as $key => $result){
            if(! $result->completed){
                if($result->dueDate <= $this->today){
                    $results[$key]->status = 'due';
                    $results[$key]->dueDate = date('d M, Y', strtotime($result->dueDate));
                    continue;
                }
                $results[$key]->status = 'incomplete';
                $results[$key]->dueDate = date('d M, Y', strtotime($result->dueDate));
                continue;
            }
            $results[$key]->status = 'completed';
            $results[$key]->dueDate = date('d M, Y', strtotime($result->dueDate));
        }
        return $results;
    }

    public function view($slug)
    {
        $result = $this->todo->where('slug', '=', $slug)->first();
        if (!$result->completed) {
            if ($result->dueDate <= $this->today) {
                $result->status = 'Due';
                $result->dueDate = date('d M, Y', strtotime($result->dueDate));
                return $result;
            }
            $result->status = 'Incomplete';
            $result->dueDate = date('d M, Y', strtotime($result->dueDate));
            return $result;
        }
        $result->status = 'Completed';
        $result->dueDate = date('d M, Y', strtotime($result->dueDate));
        return $result;
    }

    public function markedAsComplete($slug){
        $todo = $this->todo->where('slug','=',$slug)->first();
        $todo->completed = 1;
        $todo->update();
        return;
    }

    public function deleteAllCompleted()
    {
        $this->todo->where('completed','=',1)->delete();
    }
}