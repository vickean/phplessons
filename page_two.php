<?php include 'header.php';?>

  <h1>Page Two</h1>

  <h3>Arrays</h3>

  <?php
    $stuff = array("Red", "Green", "Blue", "Alpha");

    echo $stuff[0];
  ?>

  <h3>Functions</h3>

  <?php

    function newCalc($num) {
      $newnr = $num * 0.75;
      echo "75% of " . $num . " = " . $newnr . "<br />";
    }

    newCalc(100);
    newCalc(200);
    newCalc(500);
  ?>

  <h3>Local and Global Scope</h3>

  <p>
    Essentially, any variables declared in a function is unaccessable outside of the function.
  </p>

  <h3>Different Superglobals</h3>

  <p>
    $GLOBALS, $_POST, $_GET, $_COOKIE, $_SESSION.
  </p>

  <p>
    $GLOBALS keyword allows variables from outside of the function to be
    accessed within the function without having it passed through to the
    function specifically via an argument. ie. $GLOBALS['x'].
  </p>

  <?php
    $x = 5;

    function someFunc() {
      $y = 10;
      echo $GLOBALS['x'];
    }
    someFunc();

  ?>

  <p>
    $_POST and $_GET. Get will display the data acquired in the URL of the page
    whereas the Post method will not show the data in the URL but it is still
    stored and can be accessed by another page.
  </p>

  <form method="GET">
    <input type="text" name="name" placeholder="GET data" />
    <button type="submit">Hit Me!</button>
  </form>

  <form method="POST">
    <input type="text" name="name" placeholder="POST data" />
    <button type="submit">Hit Me!</button>
  </form>

  <?php echo (isset($_GET['name'])?$_GET['name']:"no GET data") . "<br />"; ?>
  <?php echo (isset($_POST['name'])?$_POST['name']:"no POST data") . "<br />"; ?>

  <p>
    $_COOKIE and $_SESSION. Cookie saves on browser while Session is saved on
    the server side. Cookies are for non-sensitive information which is persistent
    after the user closes the browser, to a limited amount of time. Session data
    is usually sensitive and will be deleted the moment the user disconnects
    from the server.
  </p>

  <?php
    setcookie("name", "Fluff", time() + 86400);

    $_SESSION['name'] = "12";

    echo $_SESSION['name'];

    $_SESSION['name'] = "25";

    echo $_SESSION['name'];
  ?>

<?php include 'footer.php';?>
