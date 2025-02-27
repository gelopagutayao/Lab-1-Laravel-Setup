<?php

namespace App\Http\Controllers;
use App\Models\ParentModel; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class ParentController extends Controller
{
    // Display a listing of parents (READ)
    public function index()
    {
        $parents = ParentModel::all();  // Retrieve all parents from the database
        return view('parents.index', compact('parents'));  // Assuming you have a 'parents.index' view
    }

    // Show the form for creating a new parent (CREATE)
    public function create()
    {
        return view('parents.create');  // Assuming you have a 'parents.create' view for the form
    }

    // Store a newly created parent in storage (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:45|unique:parents,email',
            'password' => 'required|string|min:8|max:45',
            'fname' => 'required|string|max:45',
            'lname' => 'required|string|max:45',
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:15',
            'mobile' => 'nullable|string|max:15',
            'status' => 'nullable|boolean',
        ]);

        ParentModel::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fname' => $request->fname,
            'lname' => $request->lname,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'status' => $request->status ?? true,
        ]);

        return redirect()->route('parents.index')->with('success', 'Parent created successfully!');
    }

    // Display the specified parent (READ)
    public function show($id)
    {
        $parent = ParentModel::findOrFail($id);  // Get parent by ID
        return view('parents.show', compact('parent'));  // Assuming you have a 'parents.show' view
    }

    // Show the form for editing the specified parent (UPDATE)
    public function edit($id)
    {
        $parent = ParentModel::findOrFail($id);  // Get parent by ID
        return view('parents.edit', compact('parent'));  // Assuming you have a 'parents.edit' view
    }

    // Update the specified parent in storage (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|max:45|unique:parents,email,' . $id,
            'password' => 'nullable|string|min:8|max:45',
            'fname' => 'required|string|max:45',
            'lname' => 'required|string|max:45',
            'dob' => 'required|date',
            'phone' => 'nullable|string|max:15',
            'mobile' => 'nullable|string|max:15',
            'status' => 'nullable|boolean',
        ]);

        $parent = ParentModel::findOrFail($id);  // Get parent by ID

        // If password is provided, hash it
        $parentData = [
            'email' => $request->email,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'status' => $request->status ?? true,
        ];

        if ($request->password) {
            $parentData['password'] = Hash::make($request->password);
        }

        $parent->update($parentData);

        return redirect()->route('parents.index')->with('success', 'Parent updated successfully!');
    }

    // Remove the specified parent from storage (DELETE)
    public function destroy($id)
    {
        $parent = ParentModel::findOrFail($id);  // Get parent by ID
        $parent->delete();  // Delete the parent

        return redirect()->route('parents.index')->with('success', 'Parent deleted successfully!');
    }
}
