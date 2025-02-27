<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    // Display a listing of grades (READ)
    public function index()
    {
        $grades = Grade::all();  // Retrieve all grades from the database
        return view('grades.index', compact('grades'));  // Assuming you have a 'grades.index' view
    }

    // Show the form for creating a new grade (CREATE)
    public function create()
    {
        return view('grades.create');  // Assuming you have a 'grades.create' view for the form
    }

    // Store a newly created grade in storage (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'desc' => 'nullable|string|max:45',
        ]);

        Grade::create([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return redirect()->route('grades.index')->with('success', 'Grade created successfully!');
    }

    // Display the specified grade (READ)
    public function show($id)
    {
        $grade = Grade::findOrFail($id);  // Find grade by ID
        return view('grades.show', compact('grade'));  // Assuming you have a 'grades.show' view
    }

    // Show the form for editing the specified grade (UPDATE)
    public function edit($id)
    {
        $grade = Grade::findOrFail($id);  // Find grade by ID
        return view('grades.edit', compact('grade'));  // Assuming you have a 'grades.edit' view
    }

    // Update the specified grade in storage (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'desc' => 'nullable|string|max:45',
        ]);

        $grade = Grade::findOrFail($id);  // Find the grade by ID
        $grade->update([
            'name' => $request->name,
            'desc' => $request->desc,
        ]);

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully!');
    }

    // Remove the specified grade from storage (DELETE)
    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);  // Find grade by ID
        $grade->delete();  // Delete the grade

        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully!');
    }
}
