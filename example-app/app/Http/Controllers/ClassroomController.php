<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
  
    public function index()
    {
        return view('classrooms.index');  
    }

    public function create()
    {
        return view('classrooms.create');
    }

    public function update(Request $request, $id)
    {
        return view('classrooms.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('classrooms.delete');
    }
}
