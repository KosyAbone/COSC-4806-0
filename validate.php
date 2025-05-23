<?php

  $valid_username = "Kosy";
  $valid_password = "Test";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if($valid_username == $username && $valid_password == $password){
    echo 'success';
  }
  else{
    echo 'fail';
  }

?>