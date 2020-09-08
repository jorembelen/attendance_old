<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Attendance;
use App\Employee;
use App\Department;
use App\User;
use App\AppUser;
use App\Setting;

class SettingController extends Controller
{
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

        return view('settings.edit')
        ->with('data', $data);
    }

    public function store(Request $request)
    {
        $datas = $request->except('_token');

        foreach ($datas as $key => $value) {
            $setting = Setting::firstOrCreate(['key' => $key]);
            $setting->value = $value;
            $setting->save();
        }

        return redirect()->route('settings.index');
    }
}
