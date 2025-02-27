<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassroomStudent;

class ClassroomstudentController extends Controller
{
   
    public function index()
    {
        return view('classroomstudents.index');  
    }

    public function create()
    {
        return view('classroomstudents.create');
    }

    public function update(Request $request, $id)
    {
        return view('classroomstudents.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('classroomstudents.delete');
    }
}