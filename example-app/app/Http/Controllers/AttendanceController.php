<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Student;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with('student')->get();
        return response()->json($attendances);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'date' => 'required|date',
            'status' => 'required|boolean',
            'remark' => 'nullable|string',
        ]);

        $attendance = Attendance::create($request->all());
        return response()->json($attendance, 201);
    }

    public function show($id)
    {
        $attendance = Attendance::with('student')->findOrFail($id);
        return response()->json($attendance);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|boolean',
            'remark' => 'nullable|string',
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());
        return response()->json($attendance);
    }

    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
        return response()->json(null, 204);
    }
}