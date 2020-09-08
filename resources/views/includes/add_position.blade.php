
                                
<div class="modal fade" id="addPos" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-plus-square-o"></i> Add Position</h4>
  
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('positions.store') }}">
            @csrf
            <div class="form-group">
                <label class="col-form-label">Position Name</label>
            <input type="text" class="form-control form-txt-inverse" name="pos_name" placeholder="Position Name" required>
            </div>
                </select>

    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary waves-effect waves-light ">Submit</button>
        <button type="button" class="btn btn-danger waves-effect " data-dismiss="modal">Cancel</button>
</form>
    </div>
    </div>
    </div>
    </div>