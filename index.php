<?php
session_start();
?>

<!DOCTYPE html>
  <html>
  <head>
    <title>Kosi's HomePage</title>
  </head>
  
  <body>
    <h1>Assignment 1</h1> 
    <h2> Welcome <?=$_SESSION['username']?> </h2>
    <p><a href="./login.php"/>Click to login</p>
  </body>
      
</html>