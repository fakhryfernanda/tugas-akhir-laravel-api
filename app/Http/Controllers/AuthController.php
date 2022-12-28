<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AkunPendaftar as Authenticatable;
use App\Models\AkunPendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Mengambil user sesuai dengan nomor pendaftaran yang diberikan
        $user = AkunPendaftar::query()
            ->where('nomor_pendaftaran', $request->input('nomor_pendaftaran'))
            ->first();
            
        // return $request->input('password');
        // return $user->password;

        // Cek apakah ada user yang memenuhi kriteria di atas
        if (!$user) {
            return response()->json([
                "status" => false,
                "message" => "nomor pendaftaran tidak ditemukan",
                "data" => null
            ]);
        }

        // Cek password
        if (!Hash::check($request->input("password"), $user->password)) {
            return response()->json([
                "status" => false,
                "message" => "password salah",
                "data" => null
            ]);
        }

        // Buat token untuk user
        $token = $user->createToken("auth_token");

        return response()->json([
            "status" => true,
            "message" => "",
            "data" => [
                "auth" => [
                    "token" => $token->plainTextToken,
                    "token_type" => 'Bearer'
                ],
                "user" => $user
            ]
        ]);
    }

    public function getUser(Request $request)
    {
        $user = $request->user();
        return response()->json([
            "status" => true,
            "message" => "",
            "data" => $user
        ]);
    }
}
