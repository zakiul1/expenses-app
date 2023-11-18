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

    public function calculateAttendanceData($employeeId)
    {
        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now(); // Use today's date instead of end of month

        $totalDays = $startDate->diffInDays($endDate) + 1; // Adding 1 to include today

        $sundays = $startDate->diffInDaysFiltered(function (Carbon $date) {
            return $date->dayOfWeek === Carbon::SUNDAY;
        }, $endDate); // Adding 1 to include today, as it's also Sunday

        $attendanceDays = Attendance::where('employee_id', $employeeId)
            ->whereBetween('check_in', [$startDate, $endDate])
            ->whereNotNull('check_in')
            ->count();

        $attendanceDays += $sundays; // Include all Sundays in the attendance count
        // dd($sundays);

        $averageAttendance = ($attendanceDays / $totalDays) * 100;
        $averageAttendance = intval($averageAttendance);


        $lateCheckIns = Attendance::where('employee_id', $employeeId)
            ->whereBetween('check_in', [$startDate, $endDate])
            ->whereTime('check_in', '>', '09:20:00')
            ->count();

        $timelyEntries = Attendance::where('employee_id', $employeeId)
            ->whereBetween('check_in', [$startDate, $endDate])
            ->whereTime('check_in', '<=', '09:20:00')
            ->count();

        $averageTimelyEntry = ($timelyEntries / $totalDays) * 100;
        $averageTimelyEntry = intval($averageTimelyEntry);


        return [
            'attendanceDays' => $attendanceDays,
            'averageAttendance' => $averageAttendance,
            'lateCheckIns' => $lateCheckIns,
            'averageTimelyEntry' => $averageTimelyEntry,
        ];
    }
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
        $lateTime = Carbon::parse('09:30')->setDate($currentYear, $currentMonth, $today);
        $lateAttendanceCount = Attendance::whereDate('created_at', $today)
            ->whereTime('check_in', '>', $lateTime)
            ->distinct()
            ->count('employee_id');
        //late Count



        /* Employee Attendance */


        $employees = Employee::all();

        foreach ($employees as $employee) {
            $attendanceData = $this->calculateAttendanceData($employee->id);
            $employee->attendanceDays = $attendanceData['attendanceDays'];
            $employee->averageAttendance = $attendanceData['averageAttendance'];
            $employee->lateCheckIns = $attendanceData['lateCheckIns'];
            $employee->averageTimelyEntry = $attendanceData['averageTimelyEntry'];
            //dd($employee->averageTimelyEntry);
        }
        /* Employee Attendance */

        return view('dashboard', [
            'totalAmountCurrentMonth' => $totalAmountCurrentMonth,
            'totalEmployees' => $totalEmployees,
            'attendanceCount' => $attendanceCount
            ,
            'lateAttendanceCount' => $lateAttendanceCount,
            'userCount' => $userCount,
            'employees' => $employees,
        ]);
    }
}
