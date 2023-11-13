<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
{
    // Retrieve all companies from the database
    $companies = Company::latest()->paginate();

    // Return a view with the list of companies
    return view('tt-manage.company.company', ['companies' => $companies]);
}

    public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email|unique:companies,email',
        'phone_number' => 'nullable|string|unique:companies,phone_number',
    ]);

    // Create a new Company instance and fill it with the request data
    $company = new Company([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone_number' => $request->input('phone_number'),
    ]);

    // Save the company to the database
    $company->save();

    // Return a JSON response with a success message
    return response()->json(['message' => 'Company created successfully'], 201);
}
public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email|unique:companies,email,' . $id,
        'phone_number' => 'nullable|string|unique:companies,phone_number,' . $id,
    ]);

    // Find the company by its ID
    $company = Company::findOrFail($id);

    // Update the company with the new data
    $company->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone_number' => $request->input('phone_number'),
    ]);

    // Return a JSON response or redirect to a relevant page with a success message
    return response()->json(['message' => 'Company updated successfully'], 201);
}

public function getCompanyData($id)
{
    // Find the company by its ID
    $company = Company::findOrFail($id);

    // Return a view with the company data for editing
    return response()->json( $company);
}

public function destroy($id)
{
    // Find the company by its ID
    $company = Company::findOrFail($id);

    // Delete the company
    $company->delete();

    // Return a JSON response or redirect to a relevant page with a success message
    return response()->json(['message' => 'Company deleted successfully'], 201);
}

}
