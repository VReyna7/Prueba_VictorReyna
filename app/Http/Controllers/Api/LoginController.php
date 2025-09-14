<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    //
    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email','password')))
        {
            $user = $request->user();

            $user->tokens()->where('name', 'API-CLIENT')->delete();

            $token = $user->createToken('API-CLIENT')->plainTextToken;

            return response()->json([
                'token' => $token,
                'message' => 'Success',
            ]);
        }
        return response()->json(['meesage'=>'Unauthorized'],401);
    }
}
