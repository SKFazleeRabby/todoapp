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
                    continue;
                }
                $results[$key]->status = 'incomplete';
                continue;
            }
            $results[$key]->status = 'completed';
        }
        return $results;
    }

    public function view($slug){
        $results = $this->todo->where('slug','=',$slug)->get();
        foreach ($results as $key => $result){
            if(! $result->completed){
                if($result->dueDate <= $this->today){
                    $results[$key]->status = 'Due';
                    continue;
                }
                $results[$key]->status = 'Incomplete';
                continue;
            }
            $results[$key]->status = 'Completed';
        }
        return $results;
    }
}