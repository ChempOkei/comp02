<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $reg = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = [
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ];

        User::create($user)->createToken('token-name')->plainTextToken;

        return response()->json([
            'success' => true
        ], 201);
    }

    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $token = User::where('email', $request['email'])->first()->createToken('token-name')->plainTextToken;

        return response()->json([
            'token' => $token
        ], 201);
    }
}
