@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">CareerID : {{ $students->career_id }}</p>
  </div>
    </hr>
  </div>
</div>