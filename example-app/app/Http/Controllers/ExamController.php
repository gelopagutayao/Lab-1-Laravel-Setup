<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        return view('exams.index');  
    }

    public function create()
    {
        return view('exams.create');
    }

    public function update(Request $request, $id)
    {
        return view('exams.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('exams.delete');
    }
}
