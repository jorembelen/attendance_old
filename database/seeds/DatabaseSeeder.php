<?php

use Illuminate\Database\Seeder;
use App\User;
use App\AppUser;
use App\Department;
use App\Position;
use App\CheckIn;
use App\CheckOut;
use App\Attendance;
use App\Employee;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jorem Belen',
            'email' => 'jorembelen@gmail.com',
            'role' => '1',
            'password' => bcrypt('admin@jorem'),
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'role' => '1',
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
        ]);

        AppUser::create([
            'name' => 'Admin User',
            'user_name' => 'admin',
            'access_code' => '1234',
        ]);

        Employee::create([
            'name' => 'Peter Parker',
            'department' => 'HR',
            'position' => 'HR Manager',
            'checkIn_time' => '07:40:00',
            'checkOut_time' => '17:20:00',
        ]);

        Employee::create([
            'name' => 'Allen Iverson',
            'department' => 'Admin',
            'position' => 'Clerk',
            'checkIn_time' => '07:40:00',
            'checkOut_time' => '17:20:00',
        ]);

        Department::create([
            'dep_name' => 'HR',
        ]);

        Department::create([
            'dep_name' => 'Admin',
        ]);

        Position::create([
            'pos_name' => 'Clerk',
        ]);

        Position::create([
            'pos_name' => 'HR Manager',
        ]);

        CheckIn::create([
            'rule_name' => 'Late Rule1',
            'checkIn_time' => '7:40:00',
        ]);

        CheckOut::create([
            'rule_name' => 'Early Check Out Rule1',
            'checkOut_time' => '17:20:00'
            
        ]);

        // Attendance::create([
        //     'emp_id' => '1',
        //     'time_in' => '7:20:00',
        //     // 'in_date' => 'Carbon\Carbon::createFromFormat("Y-m-d", "2020/09/01")',
        //     'time_out' => '17:25:00',
        //     // 'out_date' => '2020/09/01',
        //     'app_user' => 'admin',
        //     'status' => '1'
        // ]);

        // Attendance::create([
        //     'emp_id' => '1',
        //     'time_in' => '7:20:00',
        //     // 'in_date' => 'Carbon\Carbon::createFromFormat("Y-m-d", "2020/09/01")',
        //     'time_out' => '17:35:00',
        //     // 'out_date' => '2020/09/02',
        //     'app_user' => 'peter',
        //     'status' => '1'
        // ]);


    }

    }

