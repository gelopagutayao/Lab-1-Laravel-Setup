<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    use HasFactory;

    protected $table = 'parents'; // Ensure this matches your database table
    protected $fillable = [
        'email', 'password', 'fname', 'lname', 'dob', 'phone', 'mobile', 'status',
    ];
}
