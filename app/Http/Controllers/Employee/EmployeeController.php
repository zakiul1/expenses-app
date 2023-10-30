<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $departments = Department::all(); // Retrieve all departments
        $employees = Employee::with('department')->paginate(6); // Retrieve all departments

        return view('pages.expenses.employee.employee', ['departments' => $departments, 'employees' => $employees]);
    }

    public function store(Request $request)
    {

        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:155',
            'last_name' => 'required|string|max:155',
            'email' => 'required|email|unique:employees',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:155',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
            'document' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Adjust file types and size as needed
            'department_id' => 'required|integer',
        ]);
        // Handle file uploads
        $imageName = '';
        $docName = '';
        if ($request->image) {
            $imageName = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $imageName);
        }
        if ($request->document) {
            $docName = time() . '.' . $request->document->getClientOriginalName();
            $request->document->move(public_path('document'), $docName);
        }


        // Create a new Employee model and save it to the database
        Employee::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'date_of_birth' => $request->input('date_of_birth'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'image_path' => $imageName,
            'document_path' => $docName,
            'department_id' => $request->input('department_id'),
        ]);

        // Redirect or return a response as needed
        return response()->json(['message' => 'Department created successfully!'], 201);
    }
}
