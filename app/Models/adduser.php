<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adduser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'nic', 'address', 'mobile', 'email', 'gender', 'uname', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

