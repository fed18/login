<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  <header>
    <h1>Hej <?= $_SESSION["username"]; ?></h1>
  </header>
  <h2>Register</h2>
  <form action="register.php" method="POST">
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="submit" value="Register">
  </form>
  <h2>Login</h2>
  <form action="login.php" method="POST">
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="submit" value="Login">
  </form>
</body>
</html>