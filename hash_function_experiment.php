<?php include 'header.php';?>

  <h1>Hash Function Experiment</h1>

  <form method="POST" id="hash_form">
    <textarea name="hash_source" form="hash_form" rows="4" cols="50"></textarea>
    <br />
    <button type="submit">HASH</button>
  </form>

  <?php
    $hashSource = isset($_POST['hash_source'])?$_POST['hash_source']:'';

    $hashType = 'sha256';

    $hashResult = hash($hashType, $hashSource);

    $doubleHashResult = hash($hashType, $hashResult);

  ?>

  <div>
    <h3><?php echo strtoupper($hashType); ?> Hash</h3>
    <?php
      echo "<p>" . $hashResult . "</p>";
    ?>
  </div>

  <div>
    <h3><?php echo strtoupper($hashType); ?>^2 Hash</h3>
    <?php
      echo "<p>" . $doubleHashResult . "</p>";
    ?>
  </div>


<?php include 'footer.php';?>
