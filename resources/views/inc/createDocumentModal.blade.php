<div class="modal fade" id="create-document-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open( ['id'=>'create-document-form']) !!}
                <div class="form-group">
                  {{Form::label('title', 'document Title')}}
                  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter document title'])}}
                </div>

                <div class="form-group">
                  {{Form::label('description', 'Description')}}
                  {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Write document description', 'rows' => 3, 'cols' => 40])}}
                </div>

                <div class="form-group">
                    {{Form::file('file')}}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" form="create-document-form">Add</button>
            </div>
        </div>
    </div>
</div>
