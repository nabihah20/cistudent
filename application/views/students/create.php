<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('students/create'); ?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add name">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="number" class="form-control" name="age" placeholder="Add age">
  </div>
  <div class="form-group">
    <label>Year</label>
    <input type="number" class="form-control" name="year" placeholder="Add current study year">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>