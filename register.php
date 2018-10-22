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