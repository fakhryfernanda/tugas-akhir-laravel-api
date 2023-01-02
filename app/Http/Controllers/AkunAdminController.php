<?php

namespace App\Http\Controllers;

use App\Models\AkunAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AkunAdmin as Authenticatable;

class AkunAdminController extends Controller
{
    public function login(Request $request)
    {
        // Mengambil user sesuai dengan nomor pendaftaran yang diberikan
        $user = AkunAdmin::query()
            ->where('username', $request->input('username'))
            ->first();

        // Cek apakah ada user yang memenuhi kriteria di atas
        if (!$user) {
            return response()->json([
                "status" => false,
                "message" => "username tidak ditemukan",
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
        $token = $user->createToken("auth_token_admin");

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
}
