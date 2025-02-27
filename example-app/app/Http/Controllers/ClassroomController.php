<?php

namespace App\Http\Controllers;

use App\Models\Classroom;  // Assuming you name the model Classroom
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    // Display a listing of classrooms (READ)
    public function index()
    {
        $classrooms = Classroom::with(['grade', 'teacher'])->get();  // Retrieves all classrooms, including related grade and teacher data
        return view('classrooms.index', compact('classrooms'));  // Assuming you have a 'classrooms.index' view
    }

    // Show the form for creating a new classroom (CREATE)
    public function create()
    {
        $grades = \App\Models\Grade::all();  // Get all grades for the select dropdown
        $teachers = \App\Models\Teacher::all();  // Get all teachers for the select dropdown
        return view('classrooms.create', compact('grades', 'teachers'));  // Assuming you have a 'classrooms.create' view for the form
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

        return redirect()->route('classrooms.index')->with('success', 'Classroom created successfully!');
    }

    // Display the specified classroom (READ)
    public function show($id)
    {
        $classroom = Classroom::with(['grade', 'teacher'])->findOrFail($id);  // Get classroom by ID, including related grade and teacher
        return view('classrooms.show', compact('classroom'));  // Assuming you have a 'classrooms.show' view
    }

    // Show the form for editing the specified classroom (UPDATE)
    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);  // Get classroom by ID
        $grades = \App\Models\Grade::all();  // Get all grades for the select dropdown
        $teachers = \App\Models\Teacher::all();  // Get all teachers for the select dropdown
        return view('classrooms.edit', compact('classroom', 'grades', 'teachers'));  // Assuming you have a 'classrooms.edit' view
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

        $classroom = Classroom::findOrFail($id);  // Get classroom by ID
        $classroom->update([
            'year' => $request->year,
            'grade_id' => $request->grade_id,
            'section' => $request->section,
            'status' => $request->status ?? true,
            'remarks' => $request->remarks,
            'teacher_id' => $request->teacher_id,
        ]);

        return redirect()->route('classrooms.index')->with('success', 'Classroom updated successfully!');
    }

    // Remove the specified classroom from storage (DELETE)
    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);  // Get classroom by ID
        $classroom->delete();  // Delete the classroom

        return redirect()->route('classrooms.index')->with('success', 'Classroom deleted successfully!');
    }
}
