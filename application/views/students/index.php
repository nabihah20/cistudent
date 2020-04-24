<h2><?= $title ?></h2>
<?php foreach($students as $student) : ?>
    <h3><?php echo $student['name']; ?></h3>
    <small class="student-date">Registered on: <?php echo $student['created_at']; ?></small><br>

    <br><br>
    <p><a class="btn btn-default" href="<?php echo site_url('/students/'.$student['slug']); ?>"> 
    Details</a></p>
<?php endforeach; ?>
