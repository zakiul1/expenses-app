<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $attendance = Attendance::latest()->paginate(6);
        // dd($employee);

        return view('attendance.entry', ['employees' => $employees, 'attendance' => $attendance]);
    }
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'user_id' => 'required|integer',
            'employee_id' => 'required|integer',
            'check_in' => 'required|date',
            'comment' => 'nullable|string',
        ];

        // Custom validation error messages
        $messages = [
            'user_id.required' => 'User ID is required.',
            'employee_id.required' => 'Select Employee',
            'employee_id.integer' => 'Select Employee',
            'check_in.required' => 'Check-in time is required.',
            'check_in.date' => 'Check-in time must be a valid date and time.',
        ];

        // Validate the incoming request
        $request->validate($rules, $messages);
        // Check if the employee has already made an entry for the day
        $existingEntry = Attendance::where('employee_id', $request->input('employee_id'))
            ->whereDate('check_in', now()->toDateString()) // Filter by today's date
            ->first();

        if ($existingEntry) {
            // If an entry already exists, show a message and do not create a new entry
            //return back()->with('message', 'An entry for this employee already exists for today.');
            return response()->json(['message' => 'An entry for this employee already exists for today.'], 421);
        }

        // Create a new attendance record
        Attendance::create([
            'user_id' => $request->input('user_id'),
            'employee_id' => $request->input('employee_id'),
            'check_in' => $request->input('check_in'),
            'comment' => $request->input('comment'),
        ]);
        return response()->json(['message' => 'Department created successfully!'], 201);
    }



    public function previewUpdateData($id)
    {
        $attendance = Attendance::findOrFail($id);
        return response()->json($attendance);
    }
    public function update(Request $request, $id)
    {
        // Validation rules and messages (as you provided)
        $rules = [
            'user_id' => 'required|integer',
            'employee_id' => 'required|integer',
            'check_in' => 'required|date',
            'comment' => 'nullable|string',
        ];

        $messages = [
            'user_id.required' => 'User ID is required.',
            'employee_id.required' => 'Employee ID is required.',
            'check_in.required' => 'Check-in time is required.',
            'check_in.date' => 'Check-in time must be a valid date and time.',
        ];

        // Validate the incoming request
        $request->validate($rules, $messages);

        // Find the attendance record by its ID
        $attendance = Attendance::findOrFail($id);

        // Update the record with the validated data
        $attendance->update([
            'user_id' => $request->input('user_id'),
            'employee_id' => $request->input('employee_id'),
            'check_in' => $request->input('check_in'),
            'comment' => $request->input('comment'),
        ]);

        // Optionally, you can redirect back with a success message or perform any other actions you require.

        return response()->json(['message' => 'Attendance record updated successfully.'], 201);
    }


    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
        return response()->json(['message' => 'Department deleted successfully'], 201);
    }


}
