<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
{
    return view('teachers.index');  
}

public function create()
{
    return view('teachers.create');
}

public function update(Request $request, $id)
{
    return view('teachers.edit');
}

public function delete(Request $request, $id)
{
    return view('teachers.delete');
}
}
