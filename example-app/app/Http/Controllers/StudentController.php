<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Retrieve all students from the database
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create'); // Return view with a form to create a student
    }

    public function store(Request $request)
    {
        // Validate and store the student
        $request->validate([
            'fname' => 'required|string|max:45',
            'lname' => 'required|string|max:45',
            'email' => 'required|email|max:45|unique:students,email',
            'password' => 'required|string|min:8|max:45', // Password validation
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:15',
            'mobile' => 'nullable|string|max:15',
            'parent_id' => 'nullable|exists:parents,id', // Ensure parent exists if provided
            'date_of_join' => 'nullable|date',
            'status' => 'nullable|boolean',
        ]);

        // Create new student record
        Student::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encrypt password
            'dob' => $request->dob,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'parent_id' => $request->parent_id,
            'date_of_join' => $request->date_of_join,
            'status' => $request->status ?? true, // Default status to true
        ]);

        return redirect('/students'); // Redirect to the index page
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id); // Find student by ID
        return view('students.edit', compact('student')); // Return edit form with student data
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'fname' => 'required|string|max:45',
            'lname' => 'required|string|max:45',
            'email' => 'required|email|max:45|unique:students,email,' . $id, // Ensure unique email for update
            'password' => 'nullable|string|min:8|max:45', // Password validation (nullable for updates)
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:15',
            'mobile' => 'nullable|string|max:15',
            'parent_id' => 'nullable|exists:parents,id', // Ensure parent exists if provided
            'date_of_join' => 'nullable|date',
            'status' => 'nullable|boolean',
        ]);

        $student = Student::findOrFail($id); // Find student by ID

        // Update student data
        $student->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $student->password, // Update password only if provided
            'dob' => $request->dob,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'parent_id' => $request->parent_id,
            'date_of_join' => $request->date_of_join,
            'status' => $request->status ?? true, // Default status to true if not provided
        ]);

        return redirect('/students'); // Redirect to the students index page
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id); // Find student by ID
        $student->delete(); // Delete student
        return redirect('/students'); // Redirect to the index page
    }
}
