@extends('layout.layout')

@section('modal')
    @include('component.modal')
@stop

@section('content')
    <div class="container">
        <h2>MY TODOS</h2>
        <div class="todo-task">
            <h3>
                Go To Shopping
                <span class="date"> Due : 12 May, 2017 </span>
                <span class="action pull-right">
                    <a href="#">View</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                    <a href="#">Mark as Completed</a>
                </span>
            </h3>
        </div>

        <div class="todo-task">
            <h3 class="todo-success">
                Computer Architecture Assignment
                <span class="status todo-success"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                <span class="action pull-right">
                    <a href="#">View</a>
                    <a href="#">Delete</a>
                </span>
            </h3>
        </div>

        <div class="todo-task">
            <h3 class="todo-fail">
                Laravel App Development
                <span class="status todo-fail"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>
                <span class="date todo-fail"> Due : 12 May, 2017 </span>
                <span class="action pull-right">
                    <a href="#" data-toggle="modal" data-target="#editTodo">View</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                    <a href="#">Mark as Completed</a>
                </span>
            </h3>
        </div>

        <div class="todo-task">
            <h3>
                Go To Shopping
                <span class="date"> Due : 12 May, 2017 </span>
                <span class="action pull-right">
                    <a href="#" data-toggle="modal" data-target="#editTodo">View</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                    <a href="#">Mark as Completed</a>
                </span>
            </h3>
        </div>
    </div>
@stop