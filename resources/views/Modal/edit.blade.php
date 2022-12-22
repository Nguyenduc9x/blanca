<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('user-edit')}}" method="post">
                    @csrf
                    <input type="hidden" class="form-control" value={{$item->id}}>
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" name="name" >
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" name="email" >
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" id="btn-sub" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <strong><p style="font-size: 15px">Xóa tìa khoản này</p></strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Xóa</button>
        </div>
      </div>
    </div>
</div>