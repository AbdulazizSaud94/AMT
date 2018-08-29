<div class="modal fade" id="create-client-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open( ['id'=>'create-client-form']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Client Name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter client name'])}}
                </div>

                <div class="form-group">
                    {{Form::label('address', 'Client Address')}}
                    {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Enter client address here'])}}
                </div>

                <div class="form-group">
                    {{Form::label('telephone', 'Client Telephone')}}
                    {{Form::text('telephone', '', ['class' => 'form-control', 'placeholder' => 'Enter client telephone'])}}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" form="create-client-form">Create</button>
            </div>
        </div>
    </div>
</div>