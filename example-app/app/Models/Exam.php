<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'exam_type_id', 'classroom_id', 'date'];

    public $timestamps = true;

    public function examType()
    {
        return $this->belongsTo(ExamType::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
