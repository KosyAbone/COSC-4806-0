<?php
  session_start();
  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
      header('Location: index.php');
  }

  $error = '';
  if (isset($_SESSION['login_error'])) {
      $error = $_SESSION['login_error'];
      unset($_SESSION['login_error']);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>

  <body>
    <h1>Login form</h1> 
    <form action="/validate.php" method="post">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" val><br><br>
      <input type="submit" value="Submit">
      
    </form>
    
    <?php if (!empty($error)): ?>
          <p style="color: red;"><?= $error ?></p>
      <?php endif; ?>
    
  </body>

</html>