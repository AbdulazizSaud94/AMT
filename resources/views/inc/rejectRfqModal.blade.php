<!-- Modal -->
<div class="modal fade" id="reject-rfq-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reject RFQ Ref#{{$rfq->id}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open( ['id'=>'reject-rfq-form', 'action' => ['RfqsController@reject', $rfq->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('justification', 'Reject justifications')}}
            {{Form::textarea('justification', '', ['class' => 'form-control', 'placeholder' => 'Write rejection justifications', 'rows' => 2, 'cols' => 40])}}
        </div>

        <div class="form-group">
            {{Form::label('recommendation', 'Recommendations')}}
            {{Form::textarea('recommendation', '', ['class' => 'form-control', 'placeholder' => 'Write recommendations', 'rows' => 2, 'cols' => 40])}}
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" form="reject-rfq-form">Confirm</button>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
