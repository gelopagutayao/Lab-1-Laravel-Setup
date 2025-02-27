<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'date', 'status', 'remark'];

    public $timestamps = true;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
