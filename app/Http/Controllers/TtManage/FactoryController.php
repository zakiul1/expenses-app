<?php

namespace App\Http\Controllers\TtManage;

use App\Http\Controllers\Controller;
use App\Models\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    public function index()
    {
        $factories = Factory::latest()->paginate(5);
        return view("tt-manage.factory.factory", ['factories' => $factories]);
    }
    public function getFactoryData($id){
        $factory = Factory::findOrFail($id);
        return response()->json($factory);

    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'nullable|email|unique:factories|max:255',
            'additional_info' => 'nullable|string',
        ]);

        // Create a new factory using the validated data
       Factory::create($validatedData);

        // You can add any additional logic here, such as redirecting or returning a response

        return response()->json(['message' => 'Factory created successfully'], 201);
    }
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:factories,email,' . $id,
            'additional_info' => 'nullable|string',
        ]);

        // Find the factory by ID
        $factory = Factory::findOrFail($id);

        // Update the factory with the validated data
        $factory->update($validatedData);

        // You can add any additional logic here, such as redirecting or returning a response

        return response()->json(['message' => 'Factory updated successfully'], 201);
    }
    public function destroy($id)
    {
        // Find the factory by ID
        $factory = Factory::findOrFail($id);

        // Delete the factory
        $factory->delete();

        // You can add any additional logic here, such as redirecting or returning a response

        return response()->json(['message' => 'Factory deleted successfully'], 201);
    }
}
