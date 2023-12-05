@extends('layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />

        <div class="form-group">
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        </div>

        <div class="form-group">
            <label>Email</label></br>
            <input type="emai" name="emai" id="emai" value="{{$students->email}}" class="form-control"></br>
        </div>

        <div class="form-group">
        <label for="career_id">Career</label>
        <select id="career_id" class="form-control" name="career_id">
            @foreach($careers as $career)
                <option value="{{ $career->id }}" {{ $career->id == $students->career_id ? 'selected' : '' }}>
                    {{ $career->name }}
                </option>
            @endforeach
        </select>
    </div>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop