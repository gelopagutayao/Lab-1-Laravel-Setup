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
Route::put('/grades/{id}', [GradeController::class, 'update'])->name('grades.update'); 
Route::delete('/grades/{id}', [GradeController::class, 'destroy'])->name('grades.delete'); 

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index'); 
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create'); 
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store'); 
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit'); 
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update'); 
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy'); 

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index'); 
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create'); 
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit'); 
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('teachers.update'); 
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('teachers.delete');

Route::get('/parents', [ParentController::class, 'index'])->name('parents.index'); 
Route::get('/parents/create', [ParentController::class, 'create'])->name('parents.create'); 
Route::post('/parents', [ParentController::class, 'store'])->name('parents.store');
Route::get('/parents/{id}/edit', [ParentController::class, 'edit'])->name('parents.edit'); 
Route::put('/parents/{id}', [ParentController::class, 'update'])->name('parents.update'); 
Route::delete('/parents/{id}', [ParentController::class, 'destroy'])->name('parents.delete');

Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.index'); 
Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create'); 
Route::post('/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');
Route::get('/classrooms/{id}/edit', [ClassroomController::class, 'edit'])->name('classrooms.edit'); 
Route::put('/classrooms/{id}', [ClassroomController::class, 'update'])->name('classrooms.update'); 
Route::delete('/classrooms/{id}', [ClassroomController::class, 'destroy'])->name('classrooms.delete');

Route::get('/students', [StudentController::class, 'index'])->name('students.index'); 
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); 
Route::post('/students', [StudentController::class, 'store'])->name('students.store'); 
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit'); 
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update'); 
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.delete');

Route::get('/examresults', [ExamresultController::class, 'index'])->name('examresults.index'); 
Route::get('/examresults/create', [ExamresultController::class, 'create'])->name('examresults.create'); 
Route::post('/examresults', [ExamresultController::class, 'store'])->name('examresults.store'); 
Route::get('/examresults/{id}/edit', [ExamresultController::class, 'edit'])->name('examresults.edit'); 
Route::put('/examresults/{id}', [ExamresultController::class, 'update'])->name('examresults.update'); 
Route::delete('/examresults/{id}', [ExamresultController::class, 'destroy'])->name('examresults.delete'); 

Route::get('/exams', [ExamController::class, 'index'])->name('exams.index'); 
Route::get('/exams/create', [ExamController::class, 'create'])->name('exams.create'); 
Route::post('/exams', [ExamController::class, 'store'])->name('exams.store'); 
Route::get('/exams/{id}/edit', [ExamController::class, 'edit'])->name('exams.edit'); 
Route::put('/exams/{id}', [ExamController::class, 'update'])->name('exams.update'); 
Route::delete('/exams/{id}', [ExamController::class, 'destroy'])->name('exams.delete');

Route::get('/examtypes', [ExamtypeController::class, 'index'])->name('examtypes.index'); 
Route::get('/examtypes/create', [ExamtypeController::class, 'create'])->name('examtypes.create'); 
Route::post('/examtypes', [ExamtypeController::class, 'store'])->name('examtypes.store'); 
Route::get('/examtypes/{id}/edit', [ExamtypeController::class, 'edit'])->name('examtypes.edit'); 
Route::put('/examtypes/{id}', [ExamtypeController::class, 'update'])->name('examtypes.update'); 
Route::delete('/examtypes/{id}', [ExamtypeController::class, 'destroy'])->name('examtypes.delete'); 

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create'); 
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store'); 
Route::get('/attendance/{id}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit'); 
Route::put('/attendance/{id}', [AttendanceController::class, 'update'])->name('attendance.update'); 
Route::delete('/attendance/{id}', [AttendanceController::class, 'destroy'])->name('attendance.delete'); 

Route::get('/classroomstudents', [ClassroomstudentController::class, 'index'])->name('classroomstudents.index'); 
Route::get('/classroomstudents/create', [ClassroomstudentController::class, 'create'])->name('classroomstudents.create'); 
Route::post('/classroomstudents', [ClassroomstudentController::class, 'store'])->name('classroomstudents.store'); 
Route::get('/classroomstudents/{id}/edit', [ClassroomstudentController::class, 'edit'])->name('classroomstudents.edit'); 
Route::put('/classroomstudents/{id}', [ClassroomstudentController::class, 'update'])->name('classroomstudents.update'); 
Route::delete('/classroomstudents/{id}', [ClassroomstudentController::class, 'destroy'])->name('classroomstudents.delete');




