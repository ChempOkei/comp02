<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (User::where('email', $request->email)->first()){
            return redirect('/course-admin/courses');
        } else{
            
        }
    }
}
