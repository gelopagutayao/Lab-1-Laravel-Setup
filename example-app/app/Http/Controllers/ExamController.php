<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::with('examType')->get();
        return response()->json($exams);
    }

    public function store(Request $request)
    {
        $request->validate([
            'exam_type_id' => 'required|exists:exam_types,id',
            'name' => 'required|string|max:45',
            'start_date' => 'required|date',
        ]);

        $exam = Exam::create($request->all());
        return response()->json($exam, 201);
    }

    public function show($id)
    {
        $exam = Exam::with('examType')->findOrFail($id);
        return response()->json($exam);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'exam_type_id' => 'sometimes|exists:exam_types,id',
            'name' => 'sometimes|string|max:45',
            'start_date' => 'sometimes|date',
        ]);

        $exam = Exam::findOrFail($id);
        $exam->update($request->all());
        return response()->json($exam);
    }

    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();
        return response()->json(null, 204);
    }
}
