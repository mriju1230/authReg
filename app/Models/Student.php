<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Student extends User
{    
    protected $fillable = [
        'student_id', 'name', 'email', 'phone', 'password', 'address', 'photo'
    ];
}
