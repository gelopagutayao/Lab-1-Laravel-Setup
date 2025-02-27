<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    // Display a listing of classrooms (READ)
    public function index()
    {
        $classrooms = Classroom::with(['grade', 'teacher'])->get();
        return view('classrooms.courses.index', compact('classrooms'));
    }

    // Show the form for creating a new classroom (CREATE)
    public function create()
    {
        $grades = \App\Models\Grade::all();
        $teachers = \App\Models\Teacher::all();
        return view('classrooms.create', compact('grades', 'teachers'));
    }

    // Store a newly created classroom in storage (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required|digits:4|integer|min:2000|max:' . (date('Y') + 1),
            'grade_id' => 'required|exists:grades,id',
            'section' => 'required|string|max:2',
            'status' => 'nullable|boolean',
            'remarks' => 'nullable|string|max:45',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        Classroom::create([
            'year' => $request->year,
            'grade_id' => $request->grade_id,
            'section' => $request->section,
            'status' => $request->status ?? true,
            'remarks' => $request->remarks,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('classrooms.courses.index')->with('success', 'Classroom created successfully!');
    }

    // Display the specified classroom (READ)
    public function show($id)
    {
        $classroom = Classroom::with(['grade', 'teacher'])->findOrFail($id);
        return view('classrooms.show', compact('classroom'));
    }

    // Show the form for editing the specified classroom (UPDATE)
    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        $grades = \App\Models\Grade::all();
        $teachers = \App\Models\Teacher::all();
        return view('classrooms.edit', compact('classroom', 'grades', 'teachers'));
    }

    // Update the specified classroom in storage (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required|digits:4|integer|min:2000|max:' . (date('Y') + 1),
            'grade_id' => 'required|exists:grades,id',
            'section' => 'required|string|max:2',
            'status' => 'nullable|boolean',
            'remarks' => 'nullable|string|max:45',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $classroom = Classroom::findOrFail($id);
        $classroom->update([
            'year' => $request->year,
            'grade_id' => $request->grade_id,
            'section' => $request->section,
            'status' => $request->status ?? true,
            'remarks' => $request->remarks,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('classrooms.courses.index')->with('success', 'Classroom updated successfully!');
    }


    // Remove the specified classroom from storage (DELETE)
    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();

        return redirect()->route('classrooms.courses.index')->with('success', 'Classroom deleted successfully!');
    }
}
