<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassroomStudent;

class ClassroomstudentController extends Controller
{
    public function index()
    {
        $classroomStudents = ClassroomStudent::with(['classroom', 'student'])->get();
        return response()->json($classroomStudents);
    }

    public function store(Request $request)
    {
        $request->validate([
            'classroom_id' => 'required|exists:classrooms,id',
            'student_id' => 'required|exists:students,id',
        ]);

        $classroomStudent = ClassroomStudent::create($request->all());
        return response()->json($classroomStudent, 201);
    }

    public function show($id)
    {
        $classroomStudent = ClassroomStudent::with(['classroom', 'student'])->findOrFail($id);
        return response()->json($classroomStudent);
    }

    public function destroy($id)
    {
        $classroomStudent = ClassroomStudent::findOrFail($id);
        $classroomStudent->delete();
        return response()->json(null, 204);
    }
}