<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExamresultController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamtypeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClassroomstudentController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('grades', GradeController::class);
Route::resource('courses', CourseController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('parents', ParentController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('students', StudentController::class);
Route::get('/students', [StudentController::class, 'index'])->name('students.index'); // View all students
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); // Show form to create student
Route::post('/students', [StudentController::class, 'store'])->name('students.store'); // Store new student
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit'); // Edit student
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update'); // Update student
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy'); // Delete student
Route::resource('exam_results', ExamresultController::class);
Route::resource('exams', ExamController::class);
Route::resource('exam_types', ExamtypeController::class);
Route::resource('attendance', AttendanceController::class);
Route::resource('classroom_student', ClassroomstudentController::class);



