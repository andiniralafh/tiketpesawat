<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'register'; // nama tabel di database

    protected $fillable = [
        'nama',
        'email',
        'password',
    ];
}
