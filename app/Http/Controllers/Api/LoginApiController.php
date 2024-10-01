<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('ASDPbaubau')->plainTextToken; // Buat token

            return response()->json([
                'status' => true,
                'message' => 'Login Berhasil',
                'email' => $request->email,
                'token' => $token
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'Login Gagal'
        ], 401);
    }

    public function logout(Request $request)
    {
        if (!$request->user()) {
            return response()->json(['message' => 'Token tidak valid atau tidak ada.'], 401);
        }

        $request->user()->tokens()->delete(); // Hapus semua token pengguna
        return response()->json(['message' => 'Logout Berhasil']);
    }
}
