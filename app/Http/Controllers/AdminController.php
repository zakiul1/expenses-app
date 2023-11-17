<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(6);
        return view('user.user', ['users' => $users]);
    }

    public function getIndividualData($id)
    {

        $indUser = User::findOrFail($id);
        return response()->json($indUser);
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:155',
            'email' => 'required|string|email|max:155|unique:users',
            'password' => 'required|string|min:8',
            'role_id' => 'required|integer',
            'user_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);



        $imageName = '';
        if ($request->user_profile) {
            $imageName = time() . '.' . $request->user_profile->getClientOriginalName();
            $request->user_profile->move(public_path('user/images'), $imageName);
        }
        //dd($request->input('role_id'));
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_profile_image' => $imageName,
            'role_id' => $request->input('role_id'),
        ]);

        // Redirect or return a response as needed
        return response()->json(['message' => 'Department created successfully!'], 201);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:155',
            'role_id' => 'required|integer',
            'user_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);

        $imageName = ''; // Initialize the image name

        if ($request->hasFile('user_profile')) {
            // New profile image is provided in the request
            $oldImagePath = $user->user_profile_image;


            // Store the new image
            $imageName = time() . '.' . $request->user_profile->getClientOriginalName();
            $request->user_profile->move(public_path('user/images'), $imageName);

            // Update the user's profile image in the database
            /* auth()->user()->update(['user_profile_image' => $imageName]); */

            // Delete the previous image if it exists and is not the default image
            if ($oldImagePath && $oldImagePath !== 'default.jpg') {
                $oldImagePath = public_path('user/images/') . $oldImagePath;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $user->user_profile_image = $imageName;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Check if a new password is provided and update it
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }


        // Update the user's role
        $user->role_id = $request->input('role_id');

        // Save the changes to the database
        $user->save();

        return response()->json(['message' => 'Department Updated successfully!'], 201);
    }


    public function delete($id)
    {
        $user = User::findOrFail($id);

        // Get the user's profile image path
        $profileImagePath = public_path('user/images/') . $user->user_profile_image;

        // Check if the user has a profile image and if it exists on the server
        if (!empty($user->user_profile_image) && file_exists($profileImagePath)) {
            // Delete the user's profile image
            unlink($profileImagePath);
        }

        // Delete the user
        $user->delete();

        return response()->json(['message' => 'User and associated image deleted successfully'], 201);
    }
}
