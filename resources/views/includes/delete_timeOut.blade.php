
                                

    <!-- Delete -->

    <div class="modal fade" id="delete{{ $timeOut->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-trash"></i> Delete <strong>{{$timeOut->employees->name}}</strong></h4>
     
        </div>
        <div class="modal-body">
        
            <form class="form-horizontal" method="POST" action="{{ route('attendance.destroy', $timeOut->id) }}">
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