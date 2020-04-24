<h2><?= $title ?></h2>
<table class="table table-hover table-dark">
          <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $counter = 1; ?>
          <?php foreach($students as $student) : ?>
            <tr>
              <td><?php echo $counter; ?></td>
              <td><?php echo $student['name']; ?></td>
              <td>
                <p><a class="btn btn-default" href="<?php echo site_url('/students/'.$student['slug']); ?>"> 
                Details</a></p>
              </td>
            </tr>
            <?php $counter++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>	
