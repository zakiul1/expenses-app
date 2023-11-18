<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Expenses;
use App\Models\ExpensesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class ExpensesTransaction extends Controller
{
    public function index(Request $request)
    {
        $employees = Employee::all();
        $categories = ExpensesCategory::all();

        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');

        $query = Expenses::with('employee', 'category');

        if ($fromDate && $toDate) {
            // Convert input dates to 'Y-m-d' format recognized by the database
            $formattedFromDate = \Carbon\Carbon::createFromFormat('m/d/Y', $fromDate)->format('Y-m-d');
            $formattedToDate = \Carbon\Carbon::createFromFormat('m/d/Y', $toDate)->format('Y-m-d');

            // Query the database using the formatted dates
            $qData = $query->whereBetween('expense_date', [$formattedFromDate, $formattedToDate]);
            $totalAmount = $qData->sum('amount');
            $message = ($qData->count() === 0) ? false : true;
        } else {
            $message = true;
            $totalAmount = "";
        }


        $transactions = $query->orderBy('created_at', 'desc')->paginate(6);

        //dd($transactions->employee->first_name);
        return view('pages.expenses.transaction.transaction', [
            'transactions' => $transactions,
            'employees' => $employees,
            'categories' => $categories,
            'message' => $message,
            'totalAmount' => $totalAmount,
        ]);
    }



    //store data
    public function store(Request $request)
    {

        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|min:2|max:155',
            'description' => 'nullable|string',
            'employee_id' => 'required',
            'amount' => 'required|numeric|min:0.01|max:10000000',
            'category_id' => 'required',
            'expense_date' => 'required|date',
            'images_path.*' => 'nullable|image|max:2048',
            /* 'documents_path.*' => 'nullable|file|mimes:pdf,doc,docx,txt,xls,xlsx|max:10240', */
        ]);
        $imagePaths = [];
        if ($request->hasFile('images_path')) {

            foreach ($request->file('images_path') as $image) {
                $originalName = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $imageName = pathinfo($originalName, PATHINFO_FILENAME); // Get the filename without extension

                // Generate a unique filename using a timestamp and random string
                $uniqueName = $imageName . '_' . time() . '_' . uniqid() . '.' . $extension;

                // Check if a file with the same name exists, if it does, regenerate the name
                while (file_exists(public_path('expenses/transaction/images/' . $uniqueName))) {
                    $uniqueName = $imageName . '_' . time() . '_' . uniqid() . '.' . $extension;
                }

                $image->move(public_path('expenses/transaction/images'), $uniqueName);
                $imagePaths[] = $uniqueName;
            }
        }

        $documentPaths = [];
        if ($request->hasFile('documents_path')) {

            foreach ($request->file('documents_path') as $document) {
                $originalName = $document->getClientOriginalName();
                $extension = $document->getClientOriginalExtension();
                $documentName = pathinfo(
                    $originalName,
                    PATHINFO_FILENAME
                ); // Get the filename without extension

                // Generate a unique filename using a timestamp and random string
                $uniqueName = $documentName . '_' . time() . '_' . uniqid() . '.' . $extension;

                // Check if a file with the same name exists, if it does, regenerate the name
                while (file_exists(public_path('expenses/transaction/document/' . $uniqueName))) {
                    $uniqueName = $documentName . '_' . time() . '_' . uniqid() . '.' . $extension;
                }

                $document->move(public_path('expenses/transaction/document'), $uniqueName);
                $documentPaths[] = $uniqueName;
            }
        }



        Expenses::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'employee_id' => intval($request->input('employee_id')),
            'amount' => $request->input('amount'),
            'category_id' => intval($request->input('category_id')),
            'expense_date' => date($request->input('expense_date')),
            'images_path' => json_encode(isset($imagePaths) ? implode(',', $imagePaths) : null),
            'documents_path' => json_encode(isset($documentPaths) ? implode(',', $documentPaths) : null),

        ]);

        return response()->json(['message' => 'Department created successfully!'], 201);
    }


    public function detailsViewTransaction($id)
    {
        // Retrieve data from the database using the $id
        $detail = Expenses::find($id);
        $employees = Employee::all();
        $categories = ExpensesCategory::all();
        $employee = $detail->employee;
        $category = $detail->category;

        return view('pages.expenses.transaction.detailsTransaction', ['detail' => $detail, 'employee' => $employee, 'category' => $category, 'employees' => $employees, 'categories' => $categories]);
    }


    public function downloadImages($id)
    {
        $expense = Expenses::findOrFail($id);
        $imagesString = json_decode($expense->images_path, true);
        $imagePaths = explode(',', $imagesString);

        // Create a zip file to store the images
        $zip = new \ZipArchive();
        $zipFileName = "expense_images_$id.zip";
        $zipFilePath = storage_path("app/public/$zipFileName");
        $zip->open($zipFilePath, \ZipArchive::CREATE);

        // Add each image to the zip file
        foreach ($imagePaths as $imagePath) {
            $imageFullPath = public_path("expenses/transaction/images/$imagePath");
            if (file_exists($imageFullPath)) {
                $zip->addFile($imageFullPath, $imagePath);
            }
        }

        $zip->close();

        // Return the zip file for download
        return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }

    public function downloadDocuments($id)
    {
        $expense = Expenses::findOrFail($id);
        $documentStringPaths = json_decode($expense->documents_path, true);
        $documentPaths = explode(',', $documentStringPaths);

        // Create a zip file to store the documents
        $zip = new \ZipArchive();
        $zipFileName = "expense_documents_$id.zip";
        $zipFilePath = storage_path("app/public/$zipFileName");
        $zip->open($zipFilePath, \ZipArchive::CREATE);

        // Add each document to the zip file
        foreach ($documentPaths as $documentPath) {
            $documentFullPath = public_path("expenses/transaction/document/$documentPath");
            if (file_exists($documentFullPath)) {
                $zip->addFile($documentFullPath, $documentPath);
            }
        }

        $zip->close();

        // Return the zip file for download
        return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }
    public function updateViewTransaction($id)
    {
        // Retrieve the same data again or consider refactoring this logic into a shared method
        $detail = Expenses::find($id);
        $employees = Employee::all();
        $categories = ExpensesCategory::all();
        $employee = $detail->employee;
        $category = $detail->category;

        $imgPath = $detail->images_path;
        $docPath = $detail->documents_path;

        $imgArrays = explode(',', $imgPath);
        $imgArrays = array_map(function ($item) {
            return trim($item, '"');
        }, $imgArrays);
        $docArrays = explode(',', $docPath);
        $docArrays = array_map(function ($item) {
            return trim($item, '"');
        }, $docArrays);
        //dd($imgArrays);
        //dd($getFullImgPath);


        return view('pages.expenses.transaction.updateTransaction', [
            'detail' => $detail,
            'employee' => $employee,
            'category' => $category,
            'employees' => $employees,
            'categories' => $categories,
            'images' => $imgArrays,
            'documents' => $docArrays,
        ]);
    }
    public function updateDataTransaction(Request $request, $id)
    {


        $expense = Expenses::find($id); // Replace $expenseId with the ID of the expense you want to update

        // Validate the incoming data
        $validator = FacadesValidator::make($request->all(), [
            'name' => 'required|string|min:2|max:155',
            'description' => 'nullable|string',
            'employee_id' => 'required',
            'amount' => 'required|numeric|min:0.01|max:10000000',
            'category_id' => 'required',
            'expense_date' => 'required|date',
            'images_path.*' => 'nullable|image|max:2048',
            /*  'documents_path.*' => 'nullable|file|mimes:pdf,doc,docx,txt,xls,xlsx|max:10240', */
        ]);
        if ($validator->fails()) {
            // Validation failed, you can get the errors
            $errors = $validator->errors();
            return redirect('expenses/transaction/details/update' . "/" . $id)->withErrors($errors) // Pass the validation errors to the view
                ->withInput();


            //dd($errors);
        }

        $imagePaths = [];
        $checkImgPaths = [];
        $checkDocPaths = [];
        $documentPaths = [];
        //dd($request->all());
        if ($request->hasFile('images_path')) {

            foreach ($request->file('images_path') as $image) {
                $originalName = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $imageName = pathinfo($originalName, PATHINFO_FILENAME); // Get the filename without extension

                // Generate a unique filename using a timestamp and random string
                $uniqueName = $imageName . '_' . time() . '_' . uniqid() . '.' . $extension;

                // Check if a file with the same name exists, if it does, regenerate the name
                while (file_exists(public_path('expenses/transaction/images/' . $uniqueName))) {
                    $uniqueName = $imageName . '_' . time() . '_' . uniqid() . '.' . $extension;
                }

                $image->move(public_path('expenses/transaction/images'), $uniqueName);
                $imagePaths[] = $uniqueName;
                $checkImgPaths[] = $uniqueName;
            }
            //dd($imagePaths);
        }

        //dd($_FILES);
        if ($request->hasFile('documents_path')) {

            foreach ($request->file('documents_path') as $document) {
                $originalName = $document->getClientOriginalName();
                $extension = $document->getClientOriginalExtension();
                $documentName = pathinfo(
                    $originalName,
                    PATHINFO_FILENAME
                ); // Get the filename without extension

                // Generate a unique filename using a timestamp and random string
                $uniqueName = $documentName . '_' . time() . '_' . uniqid() . '.' . $extension;

                // Check if a file with the same name exists, if it does, regenerate the name
                while (file_exists(public_path('expenses/transaction/document/' . $uniqueName))) {
                    $uniqueName = $documentName . '_' . time() . '_' . uniqid() . '.' . $extension;
                }

                $document->move(public_path('expenses/transaction/document'), $uniqueName);
                $documentPaths[] = $uniqueName;
                $checkDocPaths[] = $uniqueName;
            }
        }


        //dd(!empty($checkImgPaths));
        if (is_array($imagePaths) && count($imagePaths) <= 0) {
            $imagePaths = $expense->images_path;
            $imagePaths = explode(',', $imagePaths);
            $imagePaths = array_map(function ($item) {
                return trim($item, '"');
            }, $imagePaths);
            // dd($imagePaths);
        }

        if (is_array($documentPaths) && count($documentPaths) <= 0) {
            $documentPaths = $expense->documents_path;
            $documentPaths = explode(',', $documentPaths);
            $documentPaths = array_map(function ($item) {
                return trim($item, '"');
            }, $documentPaths);
        }


        //delete previous images
        //dd($imagePaths);
        if (is_array($imagePaths) && count($imagePaths) > 0 && !empty($checkImgPaths)) {

            $oldImages = json_decode($expense->images_path, true);
            $oldImages = explode(',', $oldImages);

            function arraysMatch($oldImages, $checkImgPaths)
            {
                return array_values($oldImages) === array_values($checkImgPaths);
            }

            $result = arraysMatch($oldImages, $checkImgPaths);
           
            if ($result == false) {

                // Delete old images
                foreach ($oldImages as $oldImage) {
                   
                   if(!empty($oldImage)){
                    $imagePath = public_path('expenses/transaction/images/' . $oldImage);
                    // dd( $imagePath);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                   }
                } # code...
            }
        }
        //delete previous Documents

        if (is_array($documentPaths) && count($documentPaths) > 0 && !empty($checkDocPaths)) {
            $oldDocuments = json_decode($expense->documents_path, true);
            $oldDocuments = explode(',', $oldDocuments);

            function arraysMatch($oldDocuments, $checkDocPaths)
            {
                //dd($oldDocuments);
                return array_values($oldDocuments) === array_values($checkDocPaths);
            }

            $result = arraysMatch($oldDocuments, $checkDocPaths);
            //dd($result);
            // Delete old documents
            if ($result == false) {
                foreach ($oldDocuments as $oldDocument) {
                    if (!empty($oldImage)) {
                        $documentPath = public_path('expenses/transaction/document/' . $oldDocument);
                    if (file_exists($documentPath)) {
                        unlink($documentPath);
                    } 
                    }
                   
                }
            }
        }
        //dd($imagePaths);




        $expense->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'employee_id' => intval($request->input('employee_id')),
            'amount' => $request->input('amount'),
            'category_id' => intval($request->input('category_id')),
            'expense_date' => date('Y-m-d', strtotime($request->input('expense_date'))),
            'images_path' => json_encode(isset($imagePaths) ? implode(',', $imagePaths) : null),
            'documents_path' => json_encode(isset($documentPaths) ? implode(',', $documentPaths) : null),
        ]);

        // Any other actions you want to perform after the update


        return redirect()->route('expenses.transaction');

    }

    public function deleteTransaction($id)
    {
        // Find the employee by ID
        $tnx = Expenses::findOrFail($id);
        // dd($tnx->images_path);
        // Delete associated image and document files
        $images = json_decode($tnx->images_path);
        $doc = json_decode($tnx->documents_path);

        if (!empty($images)) {
            $imagePaths = explode(',', $images);

            foreach ($imagePaths as $path) {
                $fullPath = public_path('expenses/transaction/images/' . $path);
                //dd($fullPath);
                if (File::exists($fullPath)) {
                    File::delete($fullPath);
                }
            }
        }


        if (!empty($doc)) {
            $documentPaths = explode(',', $doc);

            foreach ($documentPaths as $path) {
                $fullDocumentPath = public_path('expenses/transaction/document/' . $path);
                if (File::exists($fullDocumentPath)) {
                    File::delete($fullDocumentPath);
                }
            }
        }

        // dd("hi");
        // Delete the employee record
        $tnx->delete();

        return response()->json(['message' => 'Employee and associated files deleted successfully'], 201);
    }
}
