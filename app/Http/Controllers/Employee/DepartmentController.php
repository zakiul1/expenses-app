<?php

namespace App\Http\Controllers\Employee;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
        //view Page and view Data
        public function index(){

            $departments = Department::paginate(6);

            return view('pages.expenses.department.department', ['departments' => $departments]);
        }

        //store data
        public function store(Request $request){
            $request->validate([
                'name' => 'required|string|max:155',
                // Add validation rules for other fields as needed
            ]);

            $department = Department::create([
                'name' => $request->input('name'),
                // Add other department fields here
            ]);
            return response()->json(['message' => 'Department created successfully!', 'department' => $department], 201);
        }

        
        public function show($id)
            {
 
                $department = Department::findOrFail($id);

                return response()->json($department);
            }

       public function update(Request $request, $id)

                {
                    //dd($id);
                    $department = Department::findOrFail($id);

                    $data = $request->validate([
                        'name' => 'required|string|max:255',
                        // Add more fields here as needed
                    ]);

                    $department->update($data);

                    return response()->json(['message' => 'Department Updated successfully!'], 201);
                } 



                public function destroy($id)
                    {
                        $department = Department::findOrFail($id);
                        $department->delete();

                        return response()->json(['message' => 'Department deleted successfully'],201);
                    }

}
