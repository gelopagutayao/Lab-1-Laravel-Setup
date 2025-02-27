<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    



public function index()
{
    return view('students.index');  
}

public function create()
{
    return view('students.create');
}

public function update(Request $request, $id)
{
    return view('students.edit');
}

public function delete(Request $request, $id)
{
    return view('students.delete');
}
}
