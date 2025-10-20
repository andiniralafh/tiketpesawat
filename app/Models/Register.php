<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // biar bisa dipakai Auth
use Illuminate\Notifications\Notifiable;

class Register extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'registers'; // ✅ pakai registers

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];
}
