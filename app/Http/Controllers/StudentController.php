<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', ['students' => Student::all()]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'roll_no'    => 'required|unique:students,roll_no',
            'name'       => 'required',
            'email'      => 'required|email',
            'department' => 'required',
            'semester'   => 'required|integer',
            'cgpa'       => 'required|numeric',
        ]);
        Student::create($data);
        return redirect()->route('students.index')->with('status', 'Student saved!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}