<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamType;

class ExamTypeController extends Controller
{
    public function index()
    {
        $examTypes = ExamType::all();
        return response()->json($examTypes);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'desc' => 'nullable|string|max:45',
        ]);

        $examType = ExamType::create($request->all());
        return response()->json($examType, 201);
    }

    public function show($id)
    {
        $examType = ExamType::findOrFail($id);
        return response()->json($examType);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|string|max:45',
            'desc' => 'sometimes|string|max:45',
        ]);

        $examType = ExamType::findOrFail($id);
        $examType->update($request->all());
        return response()->json($examType);
    }

    public function destroy($id)
    {
        $examType = ExamType::findOrFail($id);
        $examType->delete();
        return response()->json(null, 204);
    }
}