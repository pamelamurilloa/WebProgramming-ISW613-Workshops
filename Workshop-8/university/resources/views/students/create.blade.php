@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
        </div>

        <div class="form-group">
            <label>Address</label></br>
            <input type="text" name="address" id="address" class="form-control"></br>
        </div>

        <div class="form-group">
            <label for="career_id">Category</label>
            <select id="career_id" class="form-control" name="career_id">
            <?php
                foreach($careers as $id => $career) {
                    echo "<option value=\"$id\">$career</option>";
                }
            ?>
            </select>
        </div>

        <input type="submit" value="Save" class="btn btn-success"></br>

    </form>
    
  </div>
</div>
  
@stop