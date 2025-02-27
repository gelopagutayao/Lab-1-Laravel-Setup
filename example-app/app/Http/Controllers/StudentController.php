<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display a listing of the students
    public function index()
    {
        // Retrieve all students from the database
        $students = Student::all();

        // Return the 'students.index' view with the list of students
        return view('students.index', compact('students'));
    }

    // Method to display the create form
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email|max:255',
            'password' => 'required|string|min:8',
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:15',
            'mobile' => 'nullable|string|max:15',
            'parent_id' => 'nullable|integer|exists:parents,id',
            'status' => 'nullable|boolean',
        ]);

        // Create a new student
        $student = new Student();
        $student->fname = $validated['fname'];
        $student->lname = $validated['lname'];
        $student->email = $validated['email'];
        $student->password = bcrypt($validated['password']); // Hash the password
        $student->dob = $validated['dob'];
        $student->phone = $validated['phone'];
        $student->mobile = $validated['mobile'];
        $student->parent_id = $validated['parent_id'];
        $student->status = $validated['status'] ?? true; // Default to active if not provided
        $student->save();

        // Redirect to student list with a success message
        return redirect()->route('students.index')->with('success', 'Student created successfully!');
    }
}
