<?php

namespace App\Http\Controllers;

use App\CheckIn;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Attendance;
use App\Employee;
use App\Position;
use App\Department;
use App\User;
use App\AppUser;

class CheckInController extends Controller
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

        $checkIns = CheckIn::all();
        
        return view('admin.checkIn')
        ->with('data', $data)
        ->with('checkIns', $checkIns);
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
        $this->validate($request, [
            'rule_name' => 'required',
            'checkIn_time' => 'required'
        ]);

        $checkIn = new checkIn;
        $checkIn->rule_name = $request->input('rule_name');
        $checkIn->checkIn_time = $request->input('checkIn_time');
        $checkIn->save();
        
        Alert::success('Success', 'CheckIn Rule Has Been Created Successfully');

        return redirect('/checkIns');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function show(CheckIn $checkIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckIn $checkIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $checkIn = CheckIn::find($id);
        $checkIn->rule_name = $request->input('rule_name');
        $checkIn->checkIn_time = $request->input('checkIn_time');
        $checkIn->save();
        
        Alert::success('Success', 'CheckIn Rule Has Been Updated Successfully');

        return redirect('/checkIns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkIn = CheckIn::find($id);
        $checkIn->delete();
        
        Alert::success('Success', 'CheckIn Rule Has Been Deleted Successfully');

        return redirect('/checkIns');
    }
}
