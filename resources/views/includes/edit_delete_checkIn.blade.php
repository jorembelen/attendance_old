
                                
<div class="modal fade" id="edit{{$checkIn->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-edit"></i> Update <strong>{{$checkIn->rule_name}}</strong></h4>
   
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('checkIns.update', $checkIn->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label class="col-form-label">Rule Name</label>
            <input type="text" class="form-control form-txt-inverse" name="rule_name" placeholder="Rule Name" value="{{$checkIn->rule_name}}" required>
            </div>
            <div class="form-group">
                <label for="time_in" class="col-form-label">Late Time In</label>
                    <div class="bootstrap-timepicker">
                        <input type="time" class="form-control timepicker" name="checkIn_time" value="{{$checkIn->checkIn_time}}" required>
                    </div>
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

    <div class="modal fade" id="delete{{ $checkIn->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-trash"></i> Delete <strong>{{$checkIn->rule_name}}</strong></h4>
       
        </div>
        <div class="modal-body">
        
            <form class="form-horizontal" method="POST" action="{{ route('checkIns.destroy', $checkIn->id) }}">
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