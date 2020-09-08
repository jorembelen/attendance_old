
<div class="modal fade" id="addAdminUser" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-user-plus"></i> Add Admin User</h4>
  
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="form-group">
                <label class="col-form-label">Name</label>
            <input type="text" class="form-control form-txt-inverse" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Email</label>
            <input type="email" class="form-control form-txt-inverse" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
            <input type="password" class="form-control form-txt-inverse" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
            <input type="password" class="form-control form-txt-inverse" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary waves-effect waves-light ">Submit</button>
        <button type="button" class="btn btn-danger waves-effect " data-dismiss="modal">Cancel</button>
</form>
    </div>
    </div>
    </div>
    </div>