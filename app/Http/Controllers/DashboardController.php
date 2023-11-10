<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\Expenses;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

   $currentMonth = Carbon::now()->month;
$currentYear = Carbon::now()->year;

$totalAmountCurrentMonth = Expenses::whereMonth('expense_date', $currentMonth)
    ->whereYear('expense_date', $currentYear)
    ->sum('amount');

        $totalEmployees = Employee::count();
        $userCount = User::count();
        $today = Carbon::now()->toDateString();

    $attendanceCount = Attendance::whereDate('created_at', $today)
    ->distinct()
    ->count('employee_id');
    //late Count
    $lateTime = Carbon::parse('09:30')->setDate( $currentYear, $currentMonth, $today);
    $lateAttendanceCount = Attendance::whereDate('created_at', $today)
        ->whereTime('check_in', '>', $lateTime)
        ->distinct()
        ->count('employee_id');
 //late Count
//dd($lateAttendanceCount);

        return view('dashboard', ['totalAmountCurrentMonth' => $totalAmountCurrentMonth,'totalEmployees'=> $totalEmployees,'attendanceCount'=> $attendanceCount
        ,'lateAttendanceCount'=> $lateAttendanceCount,'userCount'=>$userCount
    ]);
    }
}
