<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    // Display a listing of teachers (READ)
    public function index()
    {
        $teachers = Teacher::all();  // Retrieve all teachers from the database
        return view('teachers.index', compact('teachers'));  // Assuming you have a 'teachers.index' view
    }

    // Show the form for creating a new teacher (CREATE)
    public function create()
    {
        return view('teachers.create');  // Assuming you have a 'teachers.create' view for the form
    }

    // Store a newly created teacher in storage (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:45|unique:teachers,email',
            'password' => 'required|string|min:8|max:45',
            'fname' => 'required|string|max:45',
            'lname' => 'required|string|max:45',
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:15',
            'status' => 'nullable|boolean',
        ]);

        Teacher::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fname' => $request->fname,
            'lname' => $request->lname,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'status' => $request->status ?? true,
        ]);

        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully!');
    }

    // Display the specified teacher (READ)
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);  // Get teacher by ID
        return view('teachers.show', compact('teacher'));  // Assuming you have a 'teachers.show' view
    }

    // Show the form for editing the specified teacher (UPDATE)
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);  // Get teacher by ID
        return view('teachers.edit', compact('teacher'));  // Assuming you have a 'teachers.edit' view
    }

    // Update the specified teacher in storage (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|max:45|unique:teachers,email,' . $id,
            'password' => 'nullable|string|min:8|max:45',
            'fname' => 'required|string|max:45',
            'lname' => 'required|string|max:45',
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:15',
            'status' => 'nullable|boolean',
        ]);

        $teacher = Teacher::findOrFail($id);  // Get teacher by ID

        // If password is provided, hash it
        $teacherData = [
            'email' => $request->email,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'status' => $request->status ?? true,
        ];

        if ($request->password) {
            $teacherData['password'] = Hash::make($request->password);
        }

        $teacher->update($teacherData);

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully!');
    }

    // Remove the specified teacher from storage (DELETE)
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);  // Get teacher by ID
        $teacher->delete();  // Delete the teacher

        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully!');
    }
}
