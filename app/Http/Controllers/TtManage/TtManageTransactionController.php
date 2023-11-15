<?php

namespace App\Http\Controllers\TtManage;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Invoice;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TtManageTransactionController extends Controller
{


    /*    public function passData($id)
       {
           $invoiceDetails = Invoice::findOrFail($id);
           $transactions = Transaction::where('invoice_id', $id)->get();
           $payValueToFactory = $transactions->where('type_of_transaction', 2)->sum('value');

           return $payValueToFactory;
       } */

    public function getInvoiceDetails($id)
    {
        $banks = Bank::all();
        $invoiceDetails = Invoice::findOrFail($id);
        $companyId = $invoiceDetails->company->id;
        // dd( $companyId);
        $transactions = Transaction::where('invoice_id', $id)->paginate(6);

        $receiveValueFromBuyer = $transactions->where('type_of_transaction', 1)->sum('value');
        $payValueToFactory = $transactions->where('type_of_transaction', 2)->sum('value');
        $currentTotalBalance = $receiveValueFromBuyer - $payValueToFactory;
        // dd($receiveValueFromBuyer);
        $totalInvoiceValue = $invoiceDetails->invoice_value;
        $totalInvoiceId = $invoiceDetails->id;
        $totalFactoryValue = $invoiceDetails->factory_value;



        return view(
            'tt-manage.invoice.invoiceDetails',
            [
                'invoiceDetails' => $invoiceDetails,
                'totalInvoiceValue' => $totalInvoiceValue,
                'totalFactoryValue' => $totalFactoryValue,
                'transactions' => $transactions,
                'totalInvoiceId' => $totalInvoiceId,
                'receiveValueFromBuyer' => $receiveValueFromBuyer,
                'payValueToFactory' => $payValueToFactory,
                'currentTotalBalance' => $currentTotalBalance,
                'companyId' => $companyId,
                'banks' => $banks,
            ]
        );
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'type_of_transaction' => 'required|integer|in:1,2',
            'value' => 'required|numeric',
            'invoice_id' => 'required|exists:invoices,id',
            'user_id' => 'required|exists:users,id',
            'transaction_date' => 'required|date',
            'company_id' => 'required',
            'bank_id' => 'required',
        ]);

        // Create a new transaction using the validated data
        Transaction::create($validatedData);

        // You can do any additional actions here if needed

        // Return a response, you can customize this based on your needs
        return response()->json(['message' => 'Transaction created successfully'], 201);
    }



    public function getTransactionData($id)
    {
        $transaction = Transaction::findOrFail($id);
        return response()->json($transaction);
    }



    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'type_of_transaction' => 'required|integer|in:1,2',
            'value' => 'required|numeric',
            'invoice_id' => 'required|exists:invoices,id',
            'user_id' => 'required|exists:users,id',
            'transaction_date' => 'nullable|date',
            'bank_id' => 'required',
        ]);

        // dd($request->all());
        // Find the transaction by ID
        $transaction = Transaction::findOrFail($id);

        // Update the transaction using the validated data
        $transaction->update($validatedData);

        // You can do any additional actions here if needed

        // Return a response, you can customize this based on your needs
        return response()->json(['message' => 'Transaction updated successfully', 'transaction' => $transaction], 201);
    }


    public function destroy($id)
    {
        $data = Transaction::findOrFail($id);
        $data->delete();
        return response()->json(['message' => 'Transaction Deleted SuccessFully'], 201);
    }

}
