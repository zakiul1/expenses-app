<?php

namespace App\Http\Controllers\TtManage;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        $buyers = Buyer::latest()->paginate(5);
        return view("tt-manage.buyer.buyer", ['buyers' => $buyers]);
    }
       /*  public function store(Request $request){

        } */

        public function getBayerData($id){
            $buyer = Buyer::findOrFail($id);
        return response()->json($buyer);
        }
        public function store(Request $request)
        {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'nullable|string|max:255',
                'country' => 'nullable|string|max:255',
                'email' => 'nullable|email|unique:buyers|max:255',
                'phone_number' => 'nullable|string|max:20',
                'company_name' => 'nullable|string|max:255',
                'additional_info' => 'nullable|string',
            ]);

            // Create a new buyer using the validated data
             Buyer::create($validatedData);

            // You can add any additional logic here, such as redirecting or returning a response

            return response()->json(['message' => 'Buyer created successfully'], 201);
        }
        public function update(Request $request, $id)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'nullable|string|max:255',
        'country' => 'nullable|string|max:255',
        'email' => 'nullable|email|max:255|unique:buyers,email,' . $id,
        'phone_number' => 'nullable|string|max:20',
        'company_name' => 'nullable|string|max:255',
        'additional_info' => 'nullable|string',
    ]);

    // Find the buyer by ID
    $buyer = Buyer::findOrFail($id);

    // Update the buyer with the validated data
    $buyer->update($validatedData);

    // You can add any additional logic here, such as redirecting or returning a response

    return response()->json(['message' => 'Buyer updated successfully'], 201);
}
public function destroy($id)
{
    // Find the buyer by ID
    $buyer = Buyer::findOrFail($id);

    // Delete the buyer
    $buyer->delete();

    // You can add any additional logic here, such as redirecting or returning a response

    return response()->json(['message' => 'Buyer deleted successfully'], 201);
}

}
