<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Attendance;
use App\User;
use App\Employee;
use App\Position;
use App\Department;
use App\AppUser;

class AttendanceController extends Controller
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

        $timeIns = Attendance::with('employees')->get();

        // dd($timeIns);

        return view('includes.attendance')
        ->with('data', $data)
        ->with('timeIns', $timeIns);
    }


    public function time_in()
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

        $timeIns = Attendance::with('employees')->get();

        // dd($timeIns);

        return view('admin.timeIn')
        ->with('data', $data)
        ->with('timeIns', $timeIns);
    }

    public function time_out()
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

        $timeOuts = Attendance::with('employees')
        ->where('out_status', 1)
        ->orWhere('out_status', 0)
        ->get();

        return view('admin.timeOut')
        ->with('data', $data)
        ->with('timeOuts', $timeOuts);
    }

    public function onTime() 
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

        $timeIns = Attendance::with('employees')
        ->wherein_status('1')
        ->wherein_date(date("Y-m-d"))
        ->get();

        return view('admin.onTime')
        ->with('data', $data)
        ->with('timeIns', $timeIns);
    }

    public function late() 
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

        $timeIns = Attendance::with('employees')
        ->wherein_status('0')
        ->wherein_date(date("Y-m-d"))
        ->get();

        return view('admin.late')
        ->with('data', $data)
        ->with('timeIns', $timeIns);
    }


    public function attendanceToday() 
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

        $timeIns = Attendance::with('employees')
        ->wherein_date(date("Y-m-d"))
        ->get();

        return view('admin.attendance_today')
        ->with('data', $data)
        ->with('timeIns', $timeIns);
    }

    public function attendance() 
    {

        $timeIns = Attendance::with('employees')
        ->wherein_date(date("Y-m-d"))
        ->get();


        return view('admin.attendance_app')
        ->with('timeIns', $timeIns);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timeIns = Attendance::findOrFail($id);

        $timeIns->delete();

        Alert::success('Success', 'Attendance Has Been Deleted Successfully');

        return back();
    }
}
