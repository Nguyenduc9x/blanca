<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="addnewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="addnewModalLabel">Creat Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                  {!! Form::open(['url' => 'add']) !!}
                      <div class="mb-3">
                          {!! Form::label('name', 'name') !!}
                          {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'required']) !!}
                      </div>
                      <div class="mb-3">
                          {!! Form::label('description', 'description') !!}
                          {!! Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Input Description', 'required']) !!}
                      </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
              {!! Form::close() !!}
          </div>
      </div>
    </div>
  </div>

  