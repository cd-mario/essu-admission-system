<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    
    public function store(Request $request)
    {
        $input = $request->all();

        User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);


        return response()->json(['status' => true,
                                    'message' => "Registration successful"
                                    
        ]);
    }
    public function getRegisterData()
    {
        try {
            // Fetch all registration data
            $registerData = User::all(); // Replace Register with your model

            // Return the data as JSON
            return response()->json([
                'success' => true,
                'data' => $registerData,
            ], 200);
        } catch (\Exception $e) {
            // Handle errors and return a failure response
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch data.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


}
