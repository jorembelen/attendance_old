
                                
<div class="modal fade" id="addCheckOut" tabindex="-1" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-plus-square-o"></i> Add Rule</h4>
  
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('checkOuts.store') }}">
            @csrf
            <div class="form-group">
                <label class="col-form-label">Rule Name</label>
            <input type="text" class="form-control form-txt-inverse" name="rule_name" placeholder="Rule Name" required>
            </div>
            <div class="form-group">
                <label for="time_in" class="col-form-label">Early Time Out</label>
                    <div class="bootstrap-timepicker">
                        <input type="time" class="form-control timepicker" name="checkOut_time" required>
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