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



Route::get('/grades', [GradeController::class, 'index'])->name('grades.index'); 
Route::get('/grades/create', [GradeController::class, 'create'])->name('grades.create'); 
Route::post('/grades', [GradeController::class, 'store'])->name('grades.store');
Route::get('/grades/{id}/edit', [GradeController::class, 'edit'])->name('grades.edit'); 
Route::put('/grades/{id}', [GradeController::class, 'update'])->name('grades.delete'); 
Route::delete('/grades/{id}', [GradeController::class, 'destroy'])->name('courses.delete'); 



Route::get('/courses', [CourseController::class, 'index'])->name('students.index'); 
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create'); 
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store'); 
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit'); 
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update'); 
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy'); 

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index'); 
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create'); 
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit'); 
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('teachers.delete'); 
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('teachers.delete');


Route::get('/parents', [ParentController::class, 'index'])->name('parents.index'); 
Route::get('/parents/create', [ParentController::class, 'create'])->name('parents.create'); 
Route::post('/parents', [ParentController::class, 'store'])->name('parents.store');
Route::get('/parents/{id}/edit', [ParentController::class, 'edit'])->name('parents.edit'); 
Route::put('/parents/{id}', [ParentController::class, 'update'])->name('parents.delete'); 
Route::delete('/parents/{id}', [ParentController::class, 'destroy'])->name('parents.delete');



Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index'); 
Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create'); 
Route::post('/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');
Route::get('/classrooms/{id}/edit', [ClassroomController::class, 'edit'])->name('classrooms.edit'); 
Route::put('/classrooms/{id}', [ClassroomController::class, 'update'])->name('classrooms.delete'); 
Route::delete('/classrooms/{id}', [ClassroomController::class, 'destroy'])->name('classrooms.delete');


Route::get('/students', [StudentController::class, 'index'])->name('students.index'); 
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); 
Route::post('/students', [StudentController::class, 'store'])->name('students.store'); 
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit'); 
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update'); 
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.delete'); 



Route::get('/exam_results', [ExamresultController::class, 'index'])->name('exam_results.index'); 
Route::get('/exam_results/create', [ExamresultController::class, 'create'])->name('exam_results.create'); 
Route::post('/exam_results', [ExamresultController::class, 'store'])->name('exam_results.store'); 
Route::get('/exam_results/{id}/edit', [ExamresultController::class, 'edit'])->name('exam_results.edit'); 
Route::put('/exam_results/{id}', [ExamresultController::class, 'update'])->name('exam_results.update'); 
Route::delete('/exam_results/{id}', [ExamresultController::class, 'destroy'])->name('exam_results.delete'); 

Route::get('/exams', [ExamController::class, 'index'])->name('exams.index'); 
Route::get('/exams/create', [ExamController::class, 'create'])->name('exams.create'); 
Route::post('/exams', [ExamController::class, 'store'])->name('exams.store'); 
Route::get('/exams/{id}/edit', [ExamController::class, 'edit'])->name('exams.edit'); 
Route::put('/exams/{id}', [ExamController::class, 'update'])->name('exams.update'); 
Route::delete('/exams/{id}', [ExamController::class, 'destroy'])->name('exams.delete'); 


Route::get('/exam_types', [ExamtypeController::class, 'index'])->name('exam_types.index'); 
Route::get('/exam_types/create', [ExamtypeController::class, 'create'])->name('exam_types.create'); 
Route::post('/exam_types', [ExamtypeController::class, 'store'])->name('exam_types.store'); 
Route::get('/exam_types/{id}/edit', [ExamtypeController::class, 'edit'])->name('exam_types.edit'); 
Route::put('/exam_types/{id}', [ExamtypeController::class, 'update'])->name('exam_types.update'); 
Route::delete('/exam_types/{id}', [ExamtypeController::class, 'destroy'])->name('exam_types.delete'); 


Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index'); 
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create'); 
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store'); 
Route::get('/attendance/{id}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit'); 
Route::put('/attendance/{id}', [AttendanceController::class, 'update'])->name('attendance.update'); 
Route::delete('/attendance/{id}', [AttendanceController::class, 'destroy'])->name('attendance.delete'); 


Route::get('/classroom_student', [ClassroomstudentController::class, 'index'])->name('classroom_student.index'); 
Route::get('/classroom_student/create', [ClassroomstudentController::class, 'create'])->name('classroom_student.create'); 
Route::post('/classroom_student', [ClassroomstudentController::class, 'store'])->name('classroom_student.store'); 
Route::get('/classroom_student/{id}/edit', [ClassroomstudentController::class, 'edit'])->name('classroom_student.edit'); 
Route::put('/classroom_student/{id}', [ClassroomstudentController::class, 'update'])->name('classroom_student.update'); 
Route::delete('/classroom_student/{id}', [ClassroomstudentController::class, 'destroy'])->name('classroom_student.delete'); 



