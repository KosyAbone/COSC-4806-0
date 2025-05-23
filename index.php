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
    <h1>Assignment 1</h1> 
    <h2> Welcome <?=$_SESSION['username']?> </h2>
  </body>

  
</html>