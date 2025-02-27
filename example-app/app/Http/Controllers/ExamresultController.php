<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamResult;

class ExamResultController extends Controller
{
    public function index()
    {
        $examResults = ExamResult::with(['exam', 'student'])->get();
        return response()->json($examResults);
    }

    public function store(Request $request)
    {
        $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'student_id' => 'required|exists:students,id',
            'marks' => 'required|string|max:45',
        ]);

        $examResult = ExamResult::create($request->all());
        return response()->json($examResult, 201);
    }

    public function show($id)
    {
        $examResult = ExamResult::with(['exam', 'student'])->findOrFail($id);
        return response()->json($examResult);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'marks' => 'required|string|max:45',
        ]);

        $examResult = ExamResult::findOrFail($id);
        $examResult->update($request->all());
        return response()->json($examResult);
    }

    public function destroy($id)
    {
        $examResult = ExamResult::findOrFail($id);
        $examResult->delete();
        return response()->json(null, 204);
    }
}