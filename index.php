<?php include 'header.php';?>

  <h1>PHP Lessons</h1>
  <?php
    date_default_timezone_set('Asia/Kuala_Lumpur');
  ?>

  <h2>Today is <?php echo date("l, jS F Y") . "<br />" . " (Timezone: " . date("e") . ")"; ?></h2>

  <p>Click the links on the top nav to get to the pages that you want.</p>

<?php include 'footer.php';?>
