
<div class="modal fade" id="addEmp" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-user-plus"></i> Add Employee</h4>
  
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('employees.store') }}">
            @csrf
            <div class="form-group">
                <label class="col-form-label">Name</label>
            <input type="text" class="form-control form-txt-inverse" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Department</label>
                <select name="department" class="form-control" required>
                    <option value="" selected>- Select -</option>
                    @foreach($departments as $department)
                    <option value="{{ $department->dep_name }}">{{ $department->dep_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Position</label>
                <select name="position" class="form-control" required>
                    <option value="" selected>- Select -</option>
                    @foreach($positions as $position)
                    <option value="{{ $position->pos_name }}">{{ $position->pos_name}}</option>
                    @endforeach
                </select>
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Location</label>
            <input type="text" class="form-control form-txt-inverse" name="address" placeholder="Location">
            </div>
            <div class="form-group">
                <label class="col-form-label">Mobile</label>
            <input type="text" class="form-control form-txt-inverse" name="contact" placeholder="Mobile">
            </div>
            <div class="form-group">
                <label class="col-form-label">Select Late Time In Rule</label>
                <select name="checkIn_time" class="form-control" required>
                <option value="" selected>- Select -</option>
                @foreach($checkIns as $checkIn)
                <option value="{{ $checkIn->checkIn_time }}">{{ $checkIn->rule_name}} - {{ date('h:i A', strtotime($checkIn->checkIn_time)) }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Select Early Time Out Rule</label>
                <select name="checkOut_time" class="form-control" required>
                    <option value="" selected>- Select -</option>
                    @foreach($checkOuts as $checkOut)
                    <option value="{{ $checkOut->checkOut_time }}">{{ $checkOut->rule_name}} - {{ date('h:i A', strtotime($checkOut->checkOut_time)) }}</option>
                    @endforeach
                </select>
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