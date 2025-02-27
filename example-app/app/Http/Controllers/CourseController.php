<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class Coursecontroller extends Controller
{
    public function index()
    {
        return view('courses.index');  
    }

    public function create()
    {
        return view('courses.create');
    }

    public function update(Request $request, $id)
    {
        return view('courses.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('courses.delete');
    }
}
