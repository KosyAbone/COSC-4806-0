<?php

  session_start();

  $valid_username = "kosy";
  $valid_password = "test";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if($valid_username == $username && $valid_password == $password){
    header('location: /');
  }
  else{
    if(!isset($_SESSION['failed_attempts'])){
      $_SESSION['failed_attempts'] = 1;
    }
    else{
      $_SESSION['failed_attempts'] += 1;
    }
    echo 'This is unsuccessful attempt number ' . $_SESSION['failed_attempts'];
  }

?>