<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        return view('grades.index');  
    }

    public function create()
    {
        return view('grades.create');
    }

    public function update(Request $request, $id)
    {
        return view('grades.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('grades.delete');
    }
}
