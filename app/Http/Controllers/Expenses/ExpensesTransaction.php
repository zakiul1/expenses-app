<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Expenses;
use App\Models\ExpensesCategory;
use Illuminate\Http\Request;

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
            $qData =  $query->whereBetween('expense_date', [$fromDate, $toDate]);
            $message = ($qData->count() === 0) ? false : true;
        } else {
            $message = true;
        }

        $transactions = $query->paginate(6);

        return view('pages.expenses.transaction.transaction', [
            'transactions' => $transactions,
            'employees' => $employees,
            'categories' => $categories,
            'message' =>  $message,
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
            'documents_path.*' => 'nullable|file|mimes:pdf,doc,docx,txt,xls,xlsx|max:10240',
        ]);
        //$date = $request->employees_id
        //dd(intval($request->input('employee_id')));

        if ($request->hasFile('images_path')) {
            $imagePaths = [];
            foreach ($request->file('images_path') as $image) {
                $imageName = $image->getClientOriginalName();
                // $image->storeAs('images', $imageName); // Store images in the 'images' directory
                $image->move(public_path('images'), $imageName);
                $imagePaths[] =  $imageName;
            }
            // dd(json_encode($imagePaths));
        }
        if ($request->hasFile('documents_path')) {
            $documentPaths = [];
            foreach ($request->file('documents_path') as $document) {
                $documentName = $document->getClientOriginalName();
                $document->move(public_path('document'), $documentName); // Store documents in the 'documents' directory
                $documentPaths[] =  $documentName;
            }
            // Save $documentPaths to the database or associate them with your data.
        }
        //dd(intval($request->input('category_id')));


        Expenses::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'employee_id' => intval($request->input('employee_id')),
            'amount' =>  $request->input('amount'),
            'category_id' => intval($request->input('category_id')),
            'expense_date' => date($request->input('expense_date')),
            'images_path' => json_encode(isset($imagePaths) ? implode(',', $imagePaths) : null),
            'documents_path' => json_encode(isset($documentPaths) ? implode(',', $documentPaths) : null),

        ]);

        return response()->json(['message' => 'Department created successfully!'], 201);
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
            $imageFullPath = public_path("images/$imagePath");
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
            $documentFullPath = public_path("document/$documentPath");
            if (file_exists($documentFullPath)) {
                $zip->addFile($documentFullPath, $documentPath);
            }
        }

        $zip->close();

        // Return the zip file for download
        return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }


    public function detailsViewTransaction($id)
{
    // Retrieve data from the database using the $id
    $detail = Expenses::find($id);
    $employees = Employee::all();
    $categories = ExpensesCategory::all();
    $employee = $detail->employee;
    $category = $detail->category;

    return view('pages.expenses.transaction.detailsTransaction', [
        'detail' => $detail,
        'employee' => $employee,
        'category' => $category,
        'employees' => $employees,
        'categories' => $categories,
    ]);
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

    $imgArrays=  explode(',',  $imgPath);
    $imgArrays = array_map(function($item) {
        return trim($item, '"');
    }, $imgArrays);
    //dd($imgArrays);
    //dd($getFullImgPath);


    return view('pages.expenses.transaction.updateTransaction', [
        'detail' => $detail,
        'employee' => $employee,
        'category' => $category,
        'employees' => $employees,
        'categories' => $categories,
        'images' =>  $imgArrays,
    ]);
}

}
