@extends('layout.layout')

@section('content')
    <div class="container">
        <h2>Go To Shopping</h2>
        <div class="col-md-8">
            <div class="block">
                {!! Form::open() !!}
                    @include('forms.todo')
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <h3>Todo Details</h3>
                <h4>Created: 10 May, 2017</h4>
                <h4>Due Date: 15 May, 2017 (Friday)</h4>
                <h4>Status: Incomplete</h4>
            </div>
        </div>
    </div>
@stop