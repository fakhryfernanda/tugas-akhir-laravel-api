<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AkunPendaftar extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        // fungsi dijalankan ketika membuat model
        static::creating(function ($user) {
            // hashing password
            $hash = Hash::make($user->password);
            $user->password = $hash;
            // $user->password = bcrypt($user->password);
        });

        self::updating(function ($user) {
            // memeriksa apakah password berubah
            if ($user->isDirty(["password"])) {
                $hash = Hash::make($user->password);
                $user->password = $hash;
            }
        });
    }
}
