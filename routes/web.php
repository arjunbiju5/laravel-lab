<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// A: MVC / routes
Route::get('/hello/{name}', fn ($name) => "Hello, $name");
Route::get('/about', [PageController::class, 'about']);

// C (explicit binding): /roll/CS23-01 -> uses Route::bind('roll', ...) in AppServiceProvider
Route::get('/roll/{roll}', fn (Student $roll) => view('students.show', ['student' => $roll]));

// B + C (implicit binding): index, create, store, show (and edit/update/destroy too)
Route::resource('students', StudentController::class)->only(['index', 'create', 'store', 'show']);

// E: JSON
Route::get('/api/students', fn () => response()->json(Student::all()));