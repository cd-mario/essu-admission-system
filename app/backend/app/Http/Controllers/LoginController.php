<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function check(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required' => 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials))
        {
            return response()->json(['status' => true,
                                    'message' => "Login successful"
        ]);
        }
        
        return response()->json(['status' => false,
                                'message' => "Login failed"
        ]);

    }


    public function checkEmail(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json([
                'status' => true,
                'message' => "Login successful",
                'data' => [
                    'email' => $user->email,
                    'name' => $user->name ?? $user->email, // Fallback to email if no name
                ],
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Login failed",
        ]);
    }
}
