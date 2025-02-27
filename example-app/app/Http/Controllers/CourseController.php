<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class Coursecontroller extends Controller
{
    // Display a listing of courses (READ)
    public function index()
    {
        $courses = Course::with('grade')->get();  // Get all courses with their related grade
        return view('courses.index', compact('courses'));  // Assuming you have a 'courses.index' view
    }

    // Show the form for creating a new course (CREATE)
    public function create()
    {
        $grades = Grade::all();  // Get all grades to populate the dropdown
        return view('courses.create', compact('grades'));  // Assuming you have a 'courses.create' view for the form
    }

    // Store a newly created course in storage (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:45',
            'grade_id' => 'required|exists:grades,id',  // Make sure the grade exists in the grades table
        ]);

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'grade_id' => $request->grade_id,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }

    // Display the specified course (READ)
    public function show($id)
    {
        $course = Course::with('grade')->findOrFail($id);  // Get course with the related grade
        return view('courses.show', compact('course'));  // Assuming you have a 'courses.show' view
    }

    // Show the form for editing the specified course (UPDATE)
    public function edit($id)
    {
        $course = Course::findOrFail($id);  // Get the course by ID
        $grades = Grade::all();  // Get all grades for the dropdown
        return view('courses.edit', compact('course', 'grades'));  // Assuming you have a 'courses.edit' view
    }

    // Update the specified course in storage (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'nullable|string|max:45',
            'grade_id' => 'required|exists:grades,id',  // Make sure the grade exists
        ]);

        $course = Course::findOrFail($id);  // Get the course by ID
        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'grade_id' => $request->grade_id,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    // Remove the specified course from storage (DELETE)
    public function destroy($id)
    {
        $course = Course::findOrFail($id);  // Get the course by ID
        $course->delete();  // Delete the course

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}
