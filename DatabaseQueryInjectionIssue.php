<?php
$dbConnection = mysqli_connect("localhost", "my_user", "my_password", "world");

$userInput = $_REQUEST['userInput']; // <-- Taint source
$unsafeQuery = "SELECT * FROM Users WHERE username = '{$userInput}'"; // <-- Taint propagated to variable

function generateQuery($userId) {
  $safeQuery = "SELECT * FROM `Plans` WHERE `userId` = '{$userId}'"; // <-- Taint sink
  return $safeQuery;
}

$query = generateQuery($unsafeQuery); // <-- Taint propagated to function call
