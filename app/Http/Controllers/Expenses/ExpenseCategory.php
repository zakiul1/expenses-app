<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use App\Models\ExpensesCategory;
use Illuminate\Http\Request;

class ExpenseCategory extends Controller
{
    public function index()
    {
        $categories = ExpensesCategory::paginate(6);
        return view('pages.expenses.category.category', ['categories' => $categories]);
    }
    //store data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:155',
            // Add validation rules for other fields as needed
        ]);

        ExpensesCategory::create([
            'name' => $request->input('name'),
            // Add other department fields here
        ]);
        return response()->json(['message' => 'Department created successfully!'], 201);
    }

    public function show($id)
    {

        $category = ExpensesCategory::findOrFail($id);

        return response()->json($category);
    }
    //Update Func
    public function update(Request $request, $id)

    {

        $category = ExpensesCategory::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            // Add more fields here as needed
        ]);

        $category->update($data);

        return response()->json(['message' => 'Category Updated successfully!'], 201);
    }


    public function destroy($id)
    {
        $category = ExpensesCategory::findOrFail($id);
        $category->delete();

        return response()->json(['message' => 'Category deleted successfully'], 201);
    }
}
