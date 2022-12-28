

<div class="modal fade" id="edit{{$item->id}}"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::model($data, [ 'method' => 'patch','route' => ['item.update', $item->id] ]) !!}
                <div class="mb-3">
                    {!! Form::label('name', 'Name') !!}image.png
                    {!! Form::text('name', $item->name, ['class' => 'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', $item->email, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
              {{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {!! Form::model($data, [ 'method' => 'delete','route' => ['item.delete', $item->id] ]) !!}
          <h4 class="text-center">Are you sure you want to delete Member?</h4>
          <h5 class="text-center">Name: {{$item->name}} {{$item->email}}</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
          {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
          {!! Form::close() !!}
      </div>
      </div>
    </div>
</div>

