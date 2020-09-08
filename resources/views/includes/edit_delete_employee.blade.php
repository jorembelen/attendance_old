
<div class="modal fade" id="edit{{ $employee->uuid }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title"><i class="fa fa-edit"></i> Update <strong>{{$employee->name}}</strong></h4>
   
    </div>
    <div class="modal-body">
    
        <form class="form-horizontal" method="POST" action="{{ route('employees.update', $employee->uuid) }}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label class="col-form-label">Name</label>
            <input type="text" class="form-control form-txt-inverse" name="name" placeholder="Name" value="{{$employee->name}}" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Department</label>
                <select name="department" class="form-control" required>
                    <option value="{!! $employee->department !!}" selected> {!! $employee->department !!}</option>
                    @foreach($departments as $department)
                    <option value="{{ $department->dep_name }}"> {{ $department->dep_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Position</label>
                <select name="position" class="form-control" required>
                    <option value="{!! $employee->position !!}" selected> {!! $employee->position !!}</option>
                    @foreach($positions as $position)
                    <option value="{{ $position->pos_name }}"> {{ $position->pos_name}}</option>
                    @endforeach
                </select>
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Location</label>
            <input type="text" class="form-control form-txt-inverse" name="address" value="{{$employee->address}}" placeholder="Location">
            </div>
            <div class="form-group">
                <label class="col-form-label">Mobile</label>
            <input type="text" class="form-control form-txt-inverse" name="contact" value="{{$employee->contact}}" placeholder="Mobile">
            </div>
            <div class="form-group">
                <label class="col-form-label">Select Late Time In Rule</label>
                <select name="checkIn_time" class="form-control" required>
                    <option value="{!! $employee->checkIn_time !!}" selected> {!! date('h:i A', strtotime($employee->checkIn_time)) !!}</option>
                @foreach($checkIns as $checkIn)
                <option value="{{ $checkIn->checkIn_time }}"> {{ $checkIn->rule_name}} - {{ date('h:i A', strtotime($checkIn->checkIn_time)) }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-form-label">Select Early Time Out Rule</label>
                <select name="checkOut_time" class="form-control" required>
                    <option value="{!! $employee->checkOut_time !!}" selected> {!! date('h:i A', strtotime($employee->checkOut_time)) !!}</option>
                    @foreach($checkOuts as $checkOut)
                    <option value="{{ $checkOut->checkOut_time }}"> {{ $checkOut->rule_name}} - {{ date('h:i A', strtotime($checkOut->checkOut_time)) }}</option>
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

<!-- Delete -->

    <div class="modal fade" id="delete{{ $employee->uuid }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-trash"></i> Delete <strong>{{$employee->name}}</strong></h4>
   
        </div>
        <div class="modal-body">
        
            <form class="form-horizontal" method="POST" action="{{ route('employees.destroy', $employee->uuid) }}">
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