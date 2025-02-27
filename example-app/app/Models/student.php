<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname', 'lname', 'email', 'password', 'dob', 'phone', 'mobile', 'parent_id', 'status'
    ];

    public $timestamps = false; 
}

