@extends('careers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('career/' .$careers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$careers->id}}" id="id" />

        <div class="form-group">
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$careers->name}}" class="form-control"></br>
        </div>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop