<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamResult;

class ExamResultController extends Controller
{
    public function index()
    {
        return view('examresults.index');  
    }

    public function create()
    {
        return view('examresults.create');
    }

    public function update(Request $request, $id)
    {
        return view('examresults.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('examresults.delete');
    }
}