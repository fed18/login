<?php

/**
 * NO HTML PLEASE!
 * Mission: Spara en användare i databasen
 * 1. Hantera post variabler: $_POST
 * 2. Koppling till databas: PDO
 * 3. Spara användaren i databasen
 */

$pdo = new PDO(
  "mysql:host=localhost;dbname=fed18;charset=utf8",
  "root",
  "root"
);

// Same value in both $_POST["username"] and $username
$username = $_POST["username"];
$password = $_POST["password"];
// password_hash must always have two arguments
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// No whitespace between $pdo and prepare
$statement = $pdo->prepare("INSERT INTO users
  (username, password) VALUES (:username, :password)");
// Execute populates the statement and runs it
$statement->execute(
  [
    ":username" => $username,
    ":password" => $hashed_password
  ]
);

header('Location: index.php');