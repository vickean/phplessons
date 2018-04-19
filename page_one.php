<?php include 'header.php';?>

  <h1>Page One</h1>

  <h3>Strings and Variables</h3>

  <form method="GET">
    <input type="text" name="person"/>
    <button>SUBMIT</button>
  </form>

  <?php
    //get data from URL and concatenate to string and displayed.
    $name = isset($_GET['person'])?$_GET['person']:'Fluffy';
    $output = $name . " is a handsome fella.";
    echo $output . "<br />";
    echo "This sentence has " . str_word_count($output) . " words" . "<br />";
    echo strrev($output) . "<br />";
    echo strpos($output, "a") . "<br />";
    echo str_replace($name, 'No one', $output) . "<br />";

  ?>

  <h3>Data Types</h3>

  <?php
    //String
    $stringVar = "Coding is fun";

    //Integer
    $integerVar = 69;

    //Float
    $floatVar = 8008.135;

    //boolean
    $booleanVar = true;

    //array
    $arrayVar = array("Victor", "Kean", "Shern", "Phng");
    echo $arrayVar['0'] . $arrayVar['1'] . $arrayVar['2'] . $arrayVar['3'];

  ?>

  <h3>Arithmetic Operators</h3>

  <?php
    echo 5+5 . "<br />";
    echo 5-5 . "<br />";
    echo 23%3 . "<br />";
    echo 2**3 . "<br />";
  ?>

  <h3>Comparison Operators</h3>

  <p>
    '==' compares without considering data type.
    '===' compares strictly, considering data type.
  </p>

  <?php
    $x = 5;
    $y = '5';

    if ($x == $y) {
      echo 'True!';
    } else {
      echo 'False!';
    }

    if ($x === $y) {
      echo 'True!';
    } else {
      echo 'False!';
    }
  ?>

  <h3>Increment and Decrement</h3>

  <?php
    $iad1 = 5;

    echo $iad1;

    $iad1++;
    echo $iad1;

    $iad1--;
    echo $iad1;

    ++$iad1;
    echo $iad1;

    --$iad1;
    echo $iad1;
  ?>

  <h3>Logical Operators</h3>

  <p>
    and (&&), or (||), xor.
  </p>

  <?php
    if ($x == $y || 1 == 1) {
      echo "True!";
    }
  ?>

  <h3>Various Conditional Statements</h3>

  <?php
    $vcs1 = 1;

    if ($vcs1 == 1) {
      echo "vcs is one!";
    }
    elseif ($vcs1 == 2) {
      echo "vcs is 2.";
    }
    else {
      echo "vcs is NOT 1.";
    }
  ?>

  <h3>Switch Statements</h3>

  <?php
    $ss1 = 2;

    echo $ss1;

    switch ($ss1) {
      case 1:
        echo "ss1 = 1";
        break;
      case 2:
        echo "ss1 = 2";
        break;
      case 3:
        echo "ss1 = 3";
        break;
      default:
        echo "ss1 out of range";
    }
  ?>

  <h3>Calculator</h3>

  <div>
    <form>
      <input type="text" name="num1" placeholder="Number 1" />
      <input type="text" name="num2" placeholder="Number 2"/>
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br />
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

    <?php
      $final_result = 0;
      if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
          case 'None':
            $final_result = "Please select an operator.";
            break;
          case 'Add':
            $final_result = $result1 + $result2;
            break;
          case 'Subtract':
            $final_result = $result1 - $result2;
            break;
          case 'Multiply':
            $final_result = $result1 * $result2;
            break;
          case 'Divide':
            $final_result = $result1 / $result2;
            break;
        }
      }
    ?>

    <p>
      The answer is: <?php echo $final_result; ?>
    </p>

  </div>


  <h3>Scheduled Message programming</h3>

  <p>
    <?php
      $dayofweek = date('w');

      switch ($dayofweek) {
        case 1:
          echo "Monday";
          break;
        case 2:
          echo "Tuesday";
          break;
        case 3:
          echo "Wednesday";
          break;
        case 4:
          echo "Thursday";
          break;
        case 5:
          echo "Friday";
          break;
        case 6:
          echo "Saturday";
          break;
        case 0:
          echo "Sunday";
          break;
      }
    ?>
  </p>

  <h3>While Loop</h3>

  <form method="GET">
    <input type="number" name="iterations"/>
    <button>YELL!</button>
  </form>

  <?php
    $wl = 1;
    if (isset($_GET["iterations"])) {
      while ($wl <= $_GET["iterations"]) {
        echo $wl . " hi there<br />";
        $wl++;
      }
    }

  ?>

  <h3>Do While Loop</h3>

  <p>
    Do while loops execute once regardless of the limiting condition. ie. iteration2 = 0.
  </p>

  <form method="GET">
    <input type="number" name="iterations2"/>
    <button>YELL!</button>
  </form>

  <?php
  $dwl = 1;
  if (isset($_GET["iterations2"])) {
    do {
      echo $dwl . " hi there<br />";
      $dwl++;
    }
    while ($dwl <= $_GET["iterations2"]);
  }
  ?>

  <h3>For Loop</h3>

  <?php
    for ($cntr = 0; $cntr <= 10; $cntr++) {
      echo $cntr . " Hi ";
    }
  ?>

  <h3>Foreach Loop</h3>

  <?php
    $stuff = array("Red", "White", "Blue", "Purple", "Gray");

    foreach ($stuff as $stuff_item) {
      echo "My colour is " . $stuff_item . "<br />";
    }
  ?>

  <h3>SASS Exercises</h3>

  <div id="d-container">
    <div id='d1'>
      <h4>This is some text</h4>
    </div>
    <div id='d2'>
      <h4>This is other text</h4>
    </div>
    <div id='d3'>
      <h4>This is text</h4>
    </div>
    <div id='d4'>
      <h4>This is text too</h4>
    </div>
  </div>

<?php include 'footer.php';?>
