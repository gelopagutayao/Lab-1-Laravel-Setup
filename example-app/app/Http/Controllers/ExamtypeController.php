<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamType;

class ExamTypeController extends Controller
{
    public function index()
    {
        return view('examtypes.index');  
    }

    public function create()
    {
        return view('examtypes.create');
    }

    public function update(Request $request, $id)
    {
        return view('examtypes.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('examtypes.delete');
    }
}