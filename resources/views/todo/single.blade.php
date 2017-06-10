@extends('layout.layout')

@section('content')
    <div class="container">
        @foreach($todos as $todo)
            <div class="col-md-8">
                <div class="block single">
                    <h3>{{ $todo->name }}</h3>
                    <p>{{ $todo->details }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <h3>Todo Details</h3>
                    <h4>Created: {{ date('d M, Y', strtotime($todo->created_at)) }}</h4>
                    <h4>Due Date: {{ date('d M, Y (D)', strtotime($todo->dueDate))}}</h4>
                    <h4>Status: {{ $todo->status }}</h4>
                </div>
                <div class="block">
                    <h3>Actions</h3>
                    @if(! ($todo->status === 'Completed'))
                        <h4><a href="#" class="btn btn-success">Mark As Completed</a></h4>
                        <h4><a href="#" class="btn btn-primary">Edit Todo</a></h4>
                    @endif
                    <h4><a href="#" class="btn btn-danger">Delete Todo</a></h4>
                </div>
            </div>
        @endforeach
    </div>
@stop