<div class="modal fade" id="createTodo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Create a New Todo</h4>
            </div>
            <div class="modal-body">
                {!! Form::open() !!}
                    @include('forms.todo')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>