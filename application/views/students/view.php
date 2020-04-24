<h2><?php echo $student['name']; ?></h2>

<div class="form-group">
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <td>: <?php echo $student['name']; ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td>: <?php echo $student['age']; ?></td>
        </tr>
        <tr>
            <th>Year</th>
            <td>: <?php echo $student['year']; ?></td>
        </tr>
        <tr>
            <th>Registered on</th>
            <td>: <?php echo $student['created_at']; ?></td>
        </tr>
    </table>  
    <hr>
    <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>students/edit/<?php echo $student['slug']; ?>">Edit</a>
    <?php echo form_open('/students/delete/'.$student['id']); ?>
        <input type="submit" value="Delete" class="btn btn-danger">
</form>