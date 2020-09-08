<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Attendance;
use App\Position;
use App\Department;
use App\User;
use App\AppUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
        {
                $greetings = "";
                // date_default_timezone_set('Asia/Kuwait');
            /* This sets the $time variable to the current hour in the 24 hour clock format */
            $time = date("H");

            /* Set the $timezone variable to become the current timezone */
            $timezone = date("e");

            /* If the time is less than 1200 hours, show good morning */
            if ($time < "12") {
                $greetings = "Good Morning!";
            } else

            /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
            if ($time >= "12" && $time < "17") {
                $greetings = "Good Afternoon!";
            } else

            /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
            if ($time >= "17" && $time < "19") {
                $greetings = "Good Evening!";
            } else

            /* Finally, show good night if the time is greater than or equal to 1900 hours */
            if ($time >= "19") {
                $greetings = "Good night";
        }

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

                        return view('admin.dashboard')
                        ->with('data', $data)
                        ->with('greetings', $greetings);
            }

    public function error()
    {
        return view('404page');
    }
}
