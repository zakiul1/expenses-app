<?php

namespace App\Http\Controllers\TtManage;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Buyer;
use App\Models\Factory;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::orderBy("created_at","desc")->paginate(10);

        $banks = Bank::where('bank_type', 1)->get();
        $factories = Factory::all();
        $buyers = Buyer::all();


        return view("tt-manage.invoice.invoice",["invoices"=> $invoices ,"banks"=> $banks,"factories"=> $factories,"buyers"=> $buyers]);
    }
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'invoice_no' => 'required|string|max:255',
        'invoice_value' => 'required|numeric|min:0',
        'buyer_id' => 'required|exists:buyers,id',
        'factory_id' => 'required|exists:factories,id',
        'bank_id' => 'required|exists:banks,id',
        'user_id' => 'required|exists:users,id',
        'factory_value' => 'nullable|numeric|min:0',
    ]);

    // Create a new invoice using the validated data
    //dd($validatedData);
    Invoice::create($validatedData);

    // You can add any additional logic here, such as redirecting or returning a response

    return response()->json(['message' => 'Invoice created successfully'], 201);
}

public function update(Request $request, $id)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'invoice_no' => 'required|string|max:255',
        'invoice_value' => 'required|numeric|min:0',
        'buyer_id' => 'required|exists:buyers,id',
        'factory_id' => 'required|exists:factories,id',
        'bank_id' => 'required|exists:banks,id',
        'factory_value' => 'nullable|numeric|min:0',
    ]);

    // Find the invoice by ID
    $invoice = Invoice::findOrFail($id);

    // Update the invoice with the validated data
    $invoice->update($validatedData);

    // You can add any additional logic here, such as redirecting or returning a response

    return response()->json(['message' => 'Invoice updated successfully'], 201);
}


}
