<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\CheckOut;
use App\Attendance;
use App\Employee;
use App\Position;
use App\Department;
use App\User;
use App\AppUser;

class CheckOutController extends Controller
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
        
        $checkOuts = CheckOut::all();
        
        return view('admin.checkOut')
         ->with('data', $data)
        ->with('checkOuts', $checkOuts);
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
            'checkOut_time' => 'required'
        ]);

        $checkOut = new CheckOut;
        $checkOut->rule_name = $request->input('rule_name');
        $checkOut->checkOut_time = $request->input('checkOut_time');
        $checkOut->save();
        
        Alert::success('Success', 'CheckOut Rule Has Been Created Successfully');

        return redirect('/checkOuts');
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
        $checkOut = CheckOut::find($id);
        $checkOut->rule_name = $request->input('rule_name');
        $checkOut->checkOut_time = $request->input('checkOut_time');
        $checkOut->save();
        
        Alert::success('Success', 'CheckOut Rule Has Been Updated Successfully');

        return redirect('/checkOuts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkOut = CheckOut::find($id);
        $checkOut->delete();
        
        Alert::success('Success', 'CheckOut Rule Has Been Deleted Successfully');

        return redirect('/checkOuts');
    }
}
