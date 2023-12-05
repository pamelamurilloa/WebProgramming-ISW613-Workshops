<section>

	<h3><?php echo $actionTitle ?> </h3>
	<form action="<?= base_url('students/save'); ?>" method="POST" class="form-inline" role="form">
    <input type="hidden" class="form-control" name="id" value="<?php echo isset($student) ? $student['id'] : '' ?>">
    <div class="form-group">
      <label class="sr-only" for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Students Name" value="<?php echo isset($student) ? $student['name'] : '' ?>">
    </div>
    <div class="form-group">
      <label class="sr-only" for="last_name">Last Name</label>
      <input type="text" class="form-control" name="last_name" placeholder="Students last Name" value="<?php echo isset($student) ? $student['last_name'] : '' ?>">
    </div>
    <div class="form-group">
      <label class="sr-only" for="">Address</label>
      <textarea class="form-control" name="address" id="" cols="30" rows="10"><?php echo isset($student) ? $student['address'] : '' ?></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Save"></input>
  </form>

</section>
