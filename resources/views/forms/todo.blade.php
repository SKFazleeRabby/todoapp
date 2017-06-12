<div class="form-group">
    {!! Form::text('name',null, ['class' => 'form-control input-lg', 'placeholder' => 'Todo Title']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('details', null, ['class' => 'form-control input-lg', 'rows' => '10', 'placeholder' => 'Description']) !!}
</div>
<div class="form-group">
    {!! Form::text('dueDate', null , ['class' => 'form-control input-lg', 'id' => 'dueDate']) !!}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $submit }}</button>
</div>