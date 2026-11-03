@extends('layouts.app')
@section('content')
<h1>Add student</h1>
@if ($errors->any())
  <ul>@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
@endif
<form method="POST" action="{{ route('students.store') }}">
  @csrf
  <input name="roll_no" placeholder="Roll no" value="{{ old('roll_no') }}"><br>
  <input name="name" placeholder="Name" value="{{ old('name') }}"><br>
  <input name="email" placeholder="Email" value="{{ old('email') }}"><br>
  <input name="department" placeholder="Department" value="{{ old('department','CSE') }}"><br>
  <input name="semester" placeholder="Semester" value="{{ old('semester',7) }}"><br>
  <input name="cgpa" placeholder="CGPA" value="{{ old('cgpa') }}"><br>
  <button>Save</button>
</form>
@endsection
