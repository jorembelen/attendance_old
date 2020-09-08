
<div class="modal fade" id="edit{{ $appUser->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-edit"></i> Update <strong>{{$appUser->name}}</strong></h4>
   
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('appUser.update', $appUser->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label class="col-form-label">Name</label>
            <input type="text" class="form-control form-txt-inverse" name="name" placeholder="Name" value="{{$appUser->name}}" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">UserName</label>
            <input type="text" class="form-control form-txt-inverse" name="user_name" value="{{$appUser->user_name}}" placeholder="UserName">
            </div>
            <div class="form-group">
                <label class="col-form-label">Access Code</label>
            <input type="text" class="form-control form-txt-inverse" name="access_code" value="{{$appUser->access_code}}" placeholder="Access Code">
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

<div class="modal fade" id="delete{{ $appUser->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-trash"></i> Delete <strong>{{$appUser->name}}</strong></h4>
 
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('appUser.destroy', $appUser->id) }}">
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

      