<?php

namespace App\Http\Controllers\TtManage;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        $banks = Bank::latest()->paginate(6);
        return view("tt-manage.bank.bank", ['banks' => $banks]);
    }
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'account_no' => 'nullable|string|max:50',
            'swift_code' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:banks,email|max:255',
            'phone_no' => 'nullable|string|max:20',
            'bank_type' => 'required|integer',
        ];

        // Custom validation error messages
        $messages = [

            'name.required' => 'Bank Name  is required',
            'bank_type.required' => 'Select  Bank Type ',
            'bank_type.integer' => 'Select  Bank Type ',

        ];

        $validatedData = $request->validate($rules, $messages);

        Bank::create($validatedData);

        return response()->json(['message' => 'Bank details saved successfully'], 201);

    }

    public function getBankData($id)
    {
        $bank = Bank::findOrFail($id);
        return response()->json($bank);
    }
    public function update(Request $request, $id)
    {
        // Find the bank record by ID
        $bank = Bank::findOrFail($id);

        // Validation rules and custom messages
        $rules = [
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'account_no' => 'nullable|string|max:50',
            'swift_code' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:banks,email,' . $id,
            // Exclude the current record from unique check
            'phone_no' => 'nullable|string|max:20',
            'bank_type' => 'required|integer',
        ];

        $messages = [
            'name.required' => 'Bank Name is required',
            'bank_type.required' => 'Select Bank Type',
            'bank_type.integer' => 'Select Bank Type',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules, $messages);

        // Update the bank record with the validated data
        $bank->update($validatedData);

        // Optionally, you can return a response or redirect to a specific page
        return response()->json(['message' => 'Bank details updated successfully'], 201);
    }


    public function destroy($id)
    {
        $bank = Bank::findOrFail($id);
        $bank->delete();

        return response()->json(['message' => 'Bank Deleted Successfully'], 201);
    }

}
