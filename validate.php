<?php

  session_start();

  $valid_username = "kosy";
  $valid_password = "test";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if($valid_username == $username && $valid_password == $password){
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $username;
    header('location: /');
  }
  else{
    $_SESSION['authenticated'] = false;
    if(!isset($_SESSION['failed_attempts'])){
      $_SESSION['failed_attempts'] = 1;
    }
    else{
      $_SESSION['failed_attempts'] += 1;
    }
    $_SESSION['login_error'] = "Login failed. You have unsuccesfully attempted " . $_SESSION['failed_attempts'] . " time(s).";
    header("Location: login.php");
  }

?>