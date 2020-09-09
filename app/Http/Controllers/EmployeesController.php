<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Department;
use App\Employee;
use App\Position;
use App\CheckIn;
use App\CheckOut;
use App\Attendance;
use App\User;
use App\AppUser;
use Validator;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalEmp =  count(Employee::all());
        $totalPos =  count(Position::all());
        $totalDep =  count(Department::all());
        $totalAdm =  count(User::all());
        $totalApp =  count(AppUser::all());
        $AllAttendance = count(Attendance::whereIn_date(date("Y-m-d"))->get());
        $ontimeEmp = count(Attendance::whereIn_date(date("Y-m-d"))->wherein_status('1')->get());
        $latetimeEmp = count(Attendance::whereIn_date(date("Y-m-d"))->wherein_status('0')->get());

        if($AllAttendance > 0){
            $percentageOntime = str_split(($ontimeEmp/ $AllAttendance)*100, 4)[0];
            }else {
                $percentageOntime = 0 ;
            }

            $data = [$totalEmp, $ontimeEmp, $latetimeEmp, $percentageOntime, $AllAttendance, $totalPos, $totalDep, $totalAdm, $totalApp];
        
        $departments = Department::all();
        $employees = Employee::all();
        $positions = Position::all();
        $checkIns = CheckIn::all();
        $checkOuts = CheckOut::all();


        return view('admin.employees')
        ->with('data', $data)
        ->with('employees', $employees)
        ->with('positions', $positions)
        ->with('departments', $departments)
        ->with('checkIns', $checkIns)
        ->with('checkOuts', $checkOuts);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mobileUsers()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'department' => 'required|exists:departments,dep_name',
            'position' => 'required|exists:positions,pos_name',
            'checkIn_time' => 'required|exists:check_ins,checkIn_time',
            'checkOut_time' => 'required|exists:check_outs,checkOut_time',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Sorry, there\'s a problem while adding Employee.');
            return redirect('/employees#!')->withErrors($validator);
        }

        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->address = $request->input('address');
        $employee->contact = $request->input('contact');
        $employee->department = $request->input('department');
        $employee->position = $request->input('position');
        $employee->checkIn_time = $request->input('checkIn_time');
        $employee->checkOut_time = $request->input('checkOut_time');
        $employee->save();

        Alert::success('Success', 'Employee Has Been Created Successfully');

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'department' => 'required|exists:departments,dep_name',
            'position' => 'required|exists:positions,pos_name',
            'checkIn_time' => 'required|exists:check_ins,checkIn_time',
            'checkOut_time' => 'required|exists:check_outs,checkOut_time',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Sorry, there\'s a problem while updating Employee.');
            return redirect('/employees#!')->withErrors($validator);
        }

        $employee->update($request->all());

        Alert::success('Success', 'Employee Has Been Updated Successfully');

        return redirect('/employees');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        
        $employee->delete();

        Alert::success('Success', 'Employee Has Been Deleted Successfully');

        return redirect('/employees');
    }
}
