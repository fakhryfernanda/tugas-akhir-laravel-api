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

    public function register(Request $request)
    {
        $payload = $request->all();

        $columns = [
            'nik',
            'email',
            'password'
        ];

        foreach($columns as $col) {
            if (!isset($payload[$col])) {
                $message = "{$col} tidak boleh kosong";
                return response()->json([
                    "status" => false,
                    "message" => $message,
                    "data" => null
                ]);
            }
        }


        $list_nik = (array) AkunPendaftar::all()->pluck('nik');
        $key = array_keys($list_nik)[0];
        if (in_array($payload['nik'], $list_nik[$key])) {
            return response()->json([
                "status" => false,
                "message" => "NIK sudah terdaftar",
                "data" => null
            ]);
        }

        $list_email = (array) AkunPendaftar::all()->pluck('email');
        $key = array_keys($list_email)[0];
        if (in_array($payload['email'], $list_email[$key])) {
            return response()->json([
                "status" => false,
                "message" => "Email sudah terdaftar",
                "data" => null
            ]);
        }

        $list_nomor_pendaftaran = (array) AkunPendaftar::all()->pluck('nomor_pendaftaran');
        $key = array_keys($list_nomor_pendaftaran)[0];
        while (true) {
            $nomor_pendaftaran = mt_rand(11111111,99999999);
            if (!in_array($nomor_pendaftaran, $list_nomor_pendaftaran[$key])) {
                break;
            }
        }

        $payload['password'] = bcrypt($payload['password']);
        $payload['nomor_pendaftaran'] = $nomor_pendaftaran;

        $akun_pendaftar = AkunPendaftar::create($payload);
        return response()->json([
            "status" => true,
            "message" => "Akun berhasil dibuat. Simpan baik-baik nomor pendaftaranmu.",
            "data" => $akun_pendaftar->nomor_pendaftaran
        ]);
    }
}
