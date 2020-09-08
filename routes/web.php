<?php

use Illuminate\Support\Facades\Route;
use App\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', 'AttendanceController@attendance');


Auth::routes();

Route::middleware(['admin'])->group(function() {
    
    Route::resource('/user', 'AdminUsersController');
    Route::resource('/appUser', 'AppUsersController');
    
    Route::get('/settings', 'SettingController@index')->name('settings.index');
    Route::post('/settings', 'SettingController@store')->name('settings.store');

});

Route::middleware(['auth'])->group(function(){


    Route::resource('/departments', 'DepartmentController');
    Route::resource('/positions', 'PositionController');
    Route::resource('/checkIns', 'CheckInController');
    Route::resource('/checkOuts', 'CheckOutController');
    Route::resource('/employees', 'EmployeesController');

    Route::get('/home', 'HomeController@index')->name('home');


    Route::get('/timeIn', 'AttendanceController@time_in');
    Route::get('/timeOut', 'AttendanceController@time_out');
    Route::get('/onTime', 'AttendanceController@onTime');
    Route::get('/late', 'AttendanceController@late');
    Route::get('/attendance_today', 'AttendanceController@attendanceToday');
    
    Route::resource('/attendance', 'AttendanceController');



});