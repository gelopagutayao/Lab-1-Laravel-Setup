<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;  // Make sure to include this if you're using factories

    // If you need to define the table name or primary key, do so here
    // protected $table = 'students';
    // protected $primaryKey = 'id';
}
