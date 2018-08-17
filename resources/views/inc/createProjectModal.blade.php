<div class="modal fade" id="create-project-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open( ['id'=>'create-project-form']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Project name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter project name'])}}
                </div>

                <div class="form-group">
                    {{Form::label('location', 'Project location')}}
                    {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Enter project Location here'])}}
                </div>

                <div class="form-group">
                    {{Form::label('type', 'Project type')}}
                    {{Form::text('type', '', ['class' => 'form-control', 'placeholder' => 'Enter project type'])}}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" form="create-project-form">Create</button>
            </div>
        </div>
    </div>
</div>