@extends('layout.layout')

@section('content')
    <div class="container">
        <h2>{{ $todo->name }}</h2>
        <div class="col-md-8">
            <div class="block">
                {!! Form::model($todo, array('method' => 'PATCH', 'route' => array('todo.update',$todo->slug))) !!}
                @include('forms.todo', ['submit' => 'Update Todo'])
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <h3>Todo Details</h3>
                <h4>Created: 10 May, 2017</h4>
                <h4>Due Date: {{ $todo->dueDate }}</h4>
                <h4>Status: {{ $todo->status }}</h4>
            </div>
        </div>
    </div>
@stop