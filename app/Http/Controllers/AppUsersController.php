<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\AppUser;
use App\Attendance;
use App\Employee;
use App\Position;
use App\Department;
use App\User;
use Input;
use Validator;

class AppUsersController extends Controller
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

            
        $appUsers = AppUser::all();
        
        return view('admin.app_users')
        ->with('data', $data)
        ->with('appUsers', $appUsers);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'user_name' => 'required|unique:app_users',
            'access_code' => 'required|min:4'
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Sorry, there\'s a problem while creating appUser');
            return redirect('/appUser#!')->withErrors($validator);
        }

        $appUser = new AppUser;
        $appUser->name = $request->input('name');
        $appUser->user_name = $request->input('user_name');
        $appUser->access_code = $request->input('access_code');
        $appUser->save();

        Alert::success('Success', 'App User Has Been Created Successfully');
        return redirect('/appUser#!');

        
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'user_name' => 'required|unique:app_users,user_name,' .  $id . ',id',
            'access_code' => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Sorry, there\'s a problem while updating App User.');
            return redirect('/appUser#!')->withErrors($validator);
        }

        $appUser = AppUser::find($id);
        $appUser->name = $request->input('name');
        $appUser->user_name = $request->input('user_name');
        $appUser->access_code = $request->input('access_code');
        $appUser->save();

        Alert::success('Success', 'App User Has Been Updated Successfully.');

        return redirect('/appUser#!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appUser = AppUser::find($id);
        $appUser->delete();
        
        Alert::success('Success', 'App User Has Been Deleted Successfully');

        return redirect('/appUser#!');
    }
}
