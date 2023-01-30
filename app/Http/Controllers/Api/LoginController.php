<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            $token = Auth::user()->createToken('myapptoken');
            return response()->json($token, 200);
        };

        return response()->json(['message' => 'Pogrešo ime ili lozinka'], 401);
    }

    public function logout(){
        Auth::guard('web')->logout();
        Auth::user()->tokens()->delete();
    }
}