@extends('careers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Careers</div>
  <div class="card-body">
       
      <form action="{{ url('career') }}" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
        </div>

        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>
    
  </div>
</div>
  
@stop