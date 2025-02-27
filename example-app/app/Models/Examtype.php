<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examtype extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public $timestamps = true;

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}