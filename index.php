<?php
  session_start();
  // Redirect to login if not authenticated
  if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
      header('Location: login.php');
      exit();
  }
?>

<!DOCTYPE html>
  <html>
  <head>
    <title>Kosi's HomePage</title>
  </head>
  
  <body>
    <main>
      <h1>Assignment 1</h1> 
      <h2> Welcome, <?=$_SESSION['username']?>! </h2>
      <p>Date: <?=date("l, F j, Y, g:i A");?></p><br><br>
    </main>
  </body>

  <footer>
    <p><a href="logout.php">Click here to logout</p>
  </footer>
</html>