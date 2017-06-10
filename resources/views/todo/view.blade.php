@extends('layout.layout')

@section('modal')
    @include('component.modal')
@stop

@if($errors)
    @section('errors')
        @include('partial.error')
    @stop
@endif

@section('content')
    <div class="container">
        <h2>MY TODOS</h2>
        @foreach($todos as $todo)
            <div class="todo-task">
                <h3 @if($todo->status === 'completed') class="todo-success" @elseif($todo->status === 'due') class = "todo-fail" @endif>
                    {{ $todo->name }}
                    @if($todo->status === 'completed')
                        <span class="status todo-success"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>
                    @elseif($todo->status === 'due')
                        <span class="status todo-fail"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>
                    @endif
                    <span class="date"> Due: {{ date('d M,Y', strtotime($todo->dueDate)) }}</span>
                    <span class="action pull-right">
                        <a href="{{ route('todo.view',['slug' => $todo->slug]) }}">View</a>
                        @if(! ($todo->status === 'completed'))
                            <a href="#">Edit</a>
                        @endif
                        <a href="#">Delete</a>
                        @if(! ($todo->status === 'completed'))
                            <a href="#">Mark as Completed</a>
                        @endif
                    </span>
                </h3>
            </div>
        @endforeach

        {{--<div class="todo-task">--}}
            {{--<h3 class="todo-success">--}}
                {{--Computer Architecture Assignment--}}
                {{--<span class="status todo-success"><i class="fa fa-check-circle-o" aria-hidden="true"></i></span>--}}
                {{--<span class="action pull-right">--}}
                    {{--<a href="#">View</a>--}}
                    {{--<a href="#">Delete</a>--}}
                {{--</span>--}}
            {{--</h3>--}}
        {{--</div>--}}

        {{--<div class="todo-task">--}}
            {{--<h3 class="todo-fail">--}}
                {{--Laravel App Development--}}
                {{--<span class="status todo-fail"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>--}}
                {{--<span class="date todo-fail"> Due : 12 May, 2017 </span>--}}
                {{--<span class="action pull-right">--}}
                    {{--<a href="#" data-toggle="modal" data-target="#editTodo">View</a>--}}
                    {{--<a href="#">Edit</a>--}}
                    {{--<a href="#">Delete</a>--}}
                    {{--<a href="#">Mark as Completed</a>--}}
                {{--</span>--}}
            {{--</h3>--}}
        {{--</div>--}}

        {{--<div class="todo-task">--}}
            {{--<h3>--}}
                {{--Go To Shopping--}}
                {{--<span class="date"> Due : 12 May, 2017 </span>--}}
                {{--<span class="action pull-right">--}}
                    {{--<a href="#" data-toggle="modal" data-target="#editTodo">View</a>--}}
                    {{--<a href="#">Edit</a>--}}
                    {{--<a href="#">Delete</a>--}}
                    {{--<a href="#">Mark as Completed</a>--}}
                {{--</span>--}}
            {{--</h3>--}}
        {{--</div>--}}
    </div>
@stop