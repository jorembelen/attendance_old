<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use App\Attendance;
use App\Employee;
use App\Position;
use App\Department;
use App\AppUser;
use Validator;

class AdminUsersController extends Controller
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
            
        $adminUsers = User::where('email', '!=', 'jorembelen@gmail.com')->get();
        
        
        return view('admin.admin_users')
        ->with('data', $data)
        ->with('adminUsers', $adminUsers);
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
            'email' => 'required|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Sorry, there\'s a problem while creating User.');
            return redirect('/user#!')->withErrors($validator);
        }

        $adminUser = new User;
        $adminUser->name = $request->input('name');
        $adminUser->email = $request->input('email');
        $adminUser->password = bcrypt($request->input('password'));
        $adminUser->save();

        Alert::success('Success', 'Admin User Has Been Created Successfully');

        return redirect('/user#!');
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
            'email' => 'required|unique:users,email,' .  $id . ',id',
            'password' => 'confirmed',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Sorry, there\'s a problem while updating User.');
            return redirect('/user#!')->withErrors($validator);
        }

        $user = User::findOrFail($id);
        
        if(trim($request->password) == '') {

            $input = $request->except('password');
        }else{

        $input = $request->all();
                 
        $input['password'] = bcrypt($request->password);
    }
        $user->update($input);

        Alert::success('Success', 'User Has Been Updated Successfully!');

        return redirect('/user#!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminUser = User::find($id);

        if(auth()->user()->id == $id) {

            Alert::error('Error', 'Sorry, you cannot delete your own account!.');
            return redirect()->back();

        } else {

            $adminUser->delete();

            Alert::success('Success', 'User Has Been Deleted Successfully');
        }

        return redirect('/user#!');
    }
}
