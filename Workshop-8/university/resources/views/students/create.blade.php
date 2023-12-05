@extends('layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
        </div>

        <div class="form-group">
            <label for="email">Email</label></br>
            <input type="email" name="email" id="email" class="form-control"></br>
        </div>

        <div class="form-group">
            <label for="career_id">Career</label>
            <select id="career_id" class="form-control" name="career_id">
                <?php
                    foreach($careers as $career) {
                        echo "<option value=$career->id>$career->name</option>";
                    }
                ?>
            </select>
        </div>

        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>
    
  </div>
</div>
  
@stop