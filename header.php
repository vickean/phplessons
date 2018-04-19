<?php include 'functions.php'; ?>

<html>

<head>
  <meta charset="UTF-8" />
  <title>PHP Lessons</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <div id='main-container'>
    <nav id="topnav">
      <a href='index.php'>Home</a>
      <a href='page_one.php'>Pg1</a>
      <a href='page_two.php'>Pg2</a>
      <a href='page_three.php'>Pg3</a>
      <a href='page_four.php'>Pg4(DB)</a>
      <a href='sass_exercise.php'>Sass Exercises</a>
      <a href='page_three.php'><?php echo isset($_SESSION['username'])?$_SESSION['username']:"Log In?";?></a>
    </nav>
