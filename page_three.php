<?php include 'header.php';?>

  <h1>Page Three</h1>

  <h3>Sessions</h3>

  <p>
    Session information will only be saved if the session_start() function
    has to be called before the $_SESSION data has been set.
  </p>


  <form method="POST">
  <?php

    if (isset($_SESSION['username'])) {
      echo '<input type="submit" name="logout" value="logout"/>';
    } else {
      echo '<input type="text" name="username" /><button type="submit">LOG IN</button>';
    }

  ?>

  </form>

  <?php
    if (isset($_POST['username']) && $_POST['username'] != "") {
      $_SESSION['username'] = $_POST['username'];
      echo $_SESSION['username'];
      header('Location: '.$_SERVER['PHP_SELF']);
      die;
    }

    if (isset($_POST['logout'])) {
      unset($_SESSION);
      session_destroy();
      header('Location: '.$_SERVER['PHP_SELF']);
      die;
    }


  ?>


<?php include 'footer.php';?>
