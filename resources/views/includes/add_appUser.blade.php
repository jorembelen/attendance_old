
<div class="modal fade" id="addAppUser" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-user-plus"></i> Add App User</h4>
 
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('appUser.store') }}">
            @csrf
            <div class="form-group">
                <label class="col-form-label">Name</label>
            <input type="text" class="form-control form-txt-inverse" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">UserName</label>
            <input type="text" class="form-control form-txt-inverse" name="user_name" placeholder="UserName" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">AccessCode</label>
            <input type="password" class="form-control form-txt-inverse" name="access_code" placeholder="AccessCode" required>
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