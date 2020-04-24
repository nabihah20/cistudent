<h2><?php echo $student['name']; ?></h2>
<small class="student-date">Posted on: <?php echo $student['created_at']; ?></small><br>
<div class="student-age">

    <?php echo $student['age']; ?>
</div>
<div class="student-year">
    <?php echo $student['year']; ?>
</div>
<hr>
<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>students/edit/<?php echo $student['slug']; ?>">Edit</a>
<?php echo form_open('/students/delete/'.$student['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
