<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->authenticate();

        return response()->json([
            'token' => $request->user()->createToken('auth_token')->plainTextToken,
        ], status: 200);
    }

    public function username()
    {
        return 'username';
    }
}
