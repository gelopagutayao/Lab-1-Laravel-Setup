<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Student;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('attendance.index');  
    }

    public function create()
    {
        return view('attendance.create');
    }

    public function update(Request $request, $id)
    {
        return view('attendance.edit');
    }
    
    public function delete(Request $request, $id)
    {
        return view('attendance.delete');
    }

    
}