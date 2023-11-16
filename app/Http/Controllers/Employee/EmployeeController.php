<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Barryvdh\DomPDF\Facade\Pdf;


class EmployeeController extends Controller
{
    public function index()
    {
        $departments = Department::all(); // Retrieve all departments
        $employees = Employee::with('department')->orderBy('created_at', 'desc')->paginate(6); // Retrieve all departments

        return view('pages.expenses.employee.employee', ['departments' => $departments, 'employees' => $employees]);
    }

    public function store(Request $request)
    {


        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:155',
            'last_name' => 'required|string|max:155',
            'email' => 'required|email|unique:employees',
            'join_date' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'phone' => 'required|string|max:155',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            /*  'documents_path.*' => 'nullable|file|mimes:pdf,doc,docx,txt,xls,xlsx|max:10240', */


            'department_id' => 'required|integer',
        ]);

        // Handle file uploads
        $imageName = '';
        if ($request->image_path) {
            $imageName = time() . '.' . $request->image_path->getClientOriginalName();
            $request->image_path->move(public_path('employee/images'), $imageName);
        }

        //dd($request->hasFile('document_path'));
        if ($request->hasFile('documents_path')) {

            foreach ($request->file('documents_path') as $document) {
                // dd($document);
                $originalName = $document->getClientOriginalName();
                $extension = $document->getClientOriginalExtension();
                $documentName = pathinfo(
                    $originalName,
                    PATHINFO_FILENAME
                ); // Get the filename without extension

                // Generate a unique filename using a timestamp and random string
                $uniqueName = $documentName . '_' . time() . '_' . uniqid() . '.' . $extension;

                // Check if a file with the same name exists, if it does, regenerate the name
                while (file_exists(public_path('employee/documents/' . $uniqueName))) {
                    $uniqueName = $documentName . '_' . time() . '_' . uniqid() . '.' . $extension;
                }

                $document->move(public_path('employee/documents/'), $uniqueName);
                $documentPaths[] = $uniqueName;
            }
        }


        // dd($documentPaths);

        // Create a new Employee model and save it to the database
        Employee::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'join_date' => $request->input('join_date'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'image_path' => $imageName,
            'document_path' => json_encode(isset($documentPaths) ? implode(',', $documentPaths) : null),
            'department_id' => $request->input('department_id'),
        ]);

        // Redirect or return a response as needed
        return response()->json(['message' => 'Department created successfully!'], 201);
    }



    public function showEmployeeDetails($id)
    {
        $employee = Employee::findOrFail($id);


        return view('pages.expenses.employee.detailsEmployee', ['employee' => $employee]);
    }

    public function showEmployeeUpdateForm($id)
    {
        $employee = Employee::findOrFail($id);
        $departments = Department::all();
        $department = $employee->department->id;
        $doc = json_decode($employee->document_path, true);
        $doc = explode(',', $doc);
        //dd($doc);
        //dd($departments);
        return view('pages.expenses.employee.updateFormEmployee', ['employee' => $employee, 'departments' => $departments, 'department' => $department, 'doc' => $doc]);
    }

    public function updateEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);

        //dd($request->all());
        // Validate the incoming data
        $validator = FacadesValidator::make($request->all(), [
            'first_name' => 'required|string|max:155',
            'last_name' => 'required|string|max:155',
            'email' => 'required|email',
            'join_date' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'phone' => 'required|string|max:155',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            /*   'documents_path.*' => 'nullable|file|mimes:pdf,doc,docx,txt,xls,xlsx|max:10240', */
            'department_id' => 'required|integer',
        ]);

        /*   Error Validation Check */
        if ($validator->fails()) {
            $errors = $validator->errors();
            //  dd($errors);
            return redirect('employee/details/update/' . $id)
                ->withErrors($errors)
                ->withInput();
        }

        /*   Error Validation Check */



        /*   Documet Upload Function   */


        $documentPaths = [];
        $checkDocumentPaths = [];
        if ($request->hasFile('documents_path')) {

            foreach ($request->file('documents_path') as $document) {
                //  dd($document);
                $originalName = $document->getClientOriginalName();
                $extension = $document->getClientOriginalExtension();
                $documentName = pathinfo(
                    $originalName,
                    PATHINFO_FILENAME
                ); // Get the filename without extension

                // Generate a unique filename using a timestamp and random string
                $uniqueName = $documentName . '_' . time() . '_' . uniqid() . '.' . $extension;

                // Check if a file with the same name exists, if it does, regenerate the name
                while (file_exists(public_path('employee/documents/' . $uniqueName))) {
                    $uniqueName = $documentName . '_' . time() . '_' . uniqid() . '.' . $extension;
                }

                $document->move(public_path('employee/documents/'), $uniqueName);
                $documentPaths[] = $uniqueName;
                $checkDocumentPaths[] = $uniqueName;
            }

        }


        //dd($employee->document_path);
        if (is_array($documentPaths) && count($documentPaths) <= 0) {

            $documentPaths = $employee->document_path;
            // dd($documentPaths);
            $documentPaths = explode(',', $documentPaths);
            $documentPaths = array_map(function ($item) {
                return trim($item, '"');
            }, $documentPaths);
            //dd($documentPaths);
        }

        // dd($documentPaths);

        if ($employee) {
            // Store the previous image and document paths
            $previousImagePaths = $employee->image_path;
            $previousDocumentPaths = $employee->document_path;

            if ($request->hasFile('image')) {
                // Delete the previous image file
                if ($previousImagePaths) {
                    $imageFullPath = public_path('employee/images/' . $previousImagePaths);
                    if (file_exists($imageFullPath)) {
                        unlink($imageFullPath);
                    }
                }

                // Store the new image
                $imageName = time() . '.' . $request->image->getClientOriginalName();
                $request->image->move(public_path('employee/images/'), $imageName);
            } else {
                $imageName = $previousImagePaths;
            }
            // dd($documentPaths);
            //dd(count($documentPaths) <= 0);

            if (is_array($documentPaths) && count($documentPaths) < 0) {
                $documentPaths = $employee->document_path;
                dd($documentPaths);
                $documentPaths = explode(',', $documentPaths);
                $documentPaths = array_map(function ($item) {
                    return trim($item, '"');
                }, $documentPaths);
            }


            // dd($checkDocumentPaths);
            //dd($documentPaths);

            //check empty or not
            if ($previousDocumentPaths != "" && is_array($documentPaths) && count($documentPaths) > 0) {
                $previousDocumentPaths = json_decode($previousDocumentPaths); // Your code to execute when the string is empty
                $previousDocumentPaths = explode(',', $previousDocumentPaths);
                function arraysMatch($documentPaths, $previousDocumentPaths)
                {
                    return array_values($documentPaths) === array_values($previousDocumentPaths);
                }

                $result = arraysMatch($documentPaths, $previousDocumentPaths);
                //dd($previousDocumentPaths);
                if (!empty($checkDocumentPaths) && $result == false) {
                    foreach ($previousDocumentPaths as $documentPath) {
                        $documentFullPath = public_path('employee/documents/' . $documentPath);


                        // dd($result);
                        if (file_exists($documentFullPath)) {

                            unlink($documentFullPath);

                        }
                    }
                }

            }

            // Update the employee record

            $employee->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'join_date' => $request->input('join_date'),

                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'image_path' => $imageName,
                'document_path' => json_encode(isset($documentPaths) ? implode(',', $documentPaths) : null),
                'department_id' => $request->input('department_id'),
            ]);

            return redirect('employee/list');
        }

        return redirect()->back();
    }






    public function deleteEmploy($id)
    {
        // Find the employee by ID
        $employee = Employee::findOrFail($id);

        // Delete associated image and document files
        if (!empty($employee->image_path)) {
            File::delete(public_path('images/' . $employee->image_path));
        }
        if (!empty($employee->document_path)) {
            File::delete(public_path('document/' . $employee->document_path));
        }

        // Delete the employee record
        $employee->delete();

        return response()->json(['message' => 'Employee and associated files deleted successfully'], 201);
    }


    public function downloadDocuments($id)
    {
        $expense = Employee::findOrFail($id);
        $documentStringPaths = json_decode($expense->document_path, true);
        $documentPaths = explode(',', $documentStringPaths);

        // Create a zip file to store the documents
        $zip = new \ZipArchive();
        $zipFileName = "expense_documents_$id.zip";
        $zipFilePath = storage_path("app/public/$zipFileName");
        $zip->open($zipFilePath, \ZipArchive::CREATE);

        // Add each document to the zip file
        foreach ($documentPaths as $documentPath) {
            $documentFullPath = public_path("employee/documents/$documentPath");
            if (file_exists($documentFullPath)) {
                $zip->addFile($documentFullPath, $documentPath);
            }
        }

        $zip->close();

        // Return the zip file for download
        return response()->download($zipFilePath)->deleteFileAfterSend(true);

    }


    public function downloadInfoDetails($id)
    {
        $data = Employee::findOrFail($id);
    
        $pdf = Pdf::loadView('pdf.createEmployeeDetails', ['data' => $data]);
        $pdf->setPaper('A4', 'portrait');
    
        $filename = 'document.pdf';
    
      return  $pdf->download($filename);
      //return back()->withInput();
    }

}
