@extends('layouts.app')
@section('content')
<h1>{{ $student->name }}</h1>
<p>Roll: {{ $student->roll_no }}</p>
<p>Email: {{ $student->email }}</p>
<p>Department: {{ $student->department }}, Semester {{ $student->semester }}</p>
<p>CGPA: {{ $student->cgpa }}</p>
<a href="{{ route('students.index') }}">Back</a>
@endsection
