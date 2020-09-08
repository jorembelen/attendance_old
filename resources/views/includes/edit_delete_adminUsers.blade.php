
<div class="modal fade" id="edit{{ $adminUser->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-edit"></i> Update <strong>{{$adminUser->name}}</strong></h4>
  
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('user.update', $adminUser->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label class="col-form-label">Name</label>
            <input type="text" class="form-control form-txt-inverse" name="name" placeholder="Name" value="{{$adminUser->name}}" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Email</label>
            <input type="email" class="form-control form-txt-inverse" name="email" value="{{$adminUser->email}}" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Role</label>
                <select name="role" class="form-control" required>
                    <option value="{!! $adminUser->role !!}" selected> 
                        @if ( $adminUser->role == 0 )
                            User
                        @else
                            Admin
                        @endif
                    </option>
                <option value="0"> User</option>
                <option value="1"> Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
            <input type="password" class="form-control form-txt-inverse" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
            <input type="password" class="form-control form-txt-inverse" name="password_confirmation" placeholder="Confirm Password">
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

<!-- Delete -->

<div class="modal fade" id="delete{{ $adminUser->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-trash"></i> Delete <strong>{{$adminUser->name}}</strong></h4>
   
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('user.destroy', $adminUser->id) }}">
            @csrf
            {{ method_field('DELETE') }}
            <h5 type="button" class="" onclick="if (!window.__cfRLUnblockHandlers) return false; _gaq.push(['_trackEvent', 'example', 'try', 'alert-success-cancel']);">
                Are you sure you want to delete this record in the database?
            </h5>      
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary waves-effect waves-light ">Yes</button>
        <button type="button" class="btn btn-danger waves-effect " data-dismiss="modal">No</button>
</form>
    </div>
    </div>
    </div>
    </div>


      