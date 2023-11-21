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


        // cccccccccccc
        $check_in = Attendance::where('employee_id', $employeeId)
            ->whereNotNull('check_in') // Make sure check_in is not null
            ->value('check_in');

        $checkInDateTime = Carbon::parse($check_in);
        $expectedStartTime = Carbon::parse('09:25')->setDate($checkInDateTime->year, $checkInDateTime->month, $checkInDateTime->day);
        $officeSetTime = Carbon::parse('09:00')->setDate($checkInDateTime->year, $checkInDateTime->month, $checkInDateTime->day);
        $timeDifference = $checkInDateTime->diff($officeSetTime);

        $emploeeTimelyEntry = $checkInDateTime->format('H:i') <= $expectedStartTime->format('H:i');
        $checkIndate = date('Y-m-d', strtotime($check_in));
        $today = date('Y-m-d');
        $checkIndate = $today === $checkIndate;

        //dd($checkIndate);

        //ccccccccccc

        return [
            'attendanceDays' => $attendanceDays,
            'averageAttendance' => $averageAttendance,
            'lateCheckIns' => $lateCheckIns,
            'averageTimelyEntry' => $averageTimelyEntry,
            'emploeeTimelyEntry' => $emploeeTimelyEntry,
            'timeDifference' => $timeDifference,
            'checkIndate' => $checkIndate,

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


        // dd( $lateTime);
        /* Employee Attendance */

        /* Calculation For TImely Check_IN OR NOT */

        /*  $checkInDateTime = \Carbon\Carbon::parse($item->check_in);
         $expectedStartTime = \Carbon\Carbon::parse('09:20')->setDate($checkInDateTime->year, $checkInDateTime->month, $checkInDateTime->day);
         $officeSetTime = \Carbon\Carbon::parse('09:00')->setDate($checkInDateTime->year, $checkInDateTime->month, $checkInDateTime->day);
         $timeDifference = $checkInDateTime->diff($officeSetTime); */
        /* Calculation For TImely Check_IN OR NOT */


        $employees = Employee::all();

        foreach ($employees as $employee) {
            $attendanceData = $this->calculateAttendanceData($employee->id);
            $employee->attendanceDays = $attendanceData['attendanceDays'];
            $employee->averageAttendance = $attendanceData['averageAttendance'];
            $employee->lateCheckIns = $attendanceData['lateCheckIns'];
            $employee->averageTimelyEntry = $attendanceData['averageTimelyEntry'];
            $employee->emploeeTimelyEntry = $attendanceData['emploeeTimelyEntry'];
            $employee->timeDifference = $attendanceData['timeDifference'];
            $employee->checkIndate = $attendanceData['checkIndate'];
            // dd($employee->lateCheckIns);
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
