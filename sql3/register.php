<?php
include "config.php";
$con = mysqli_connect("localhost", "sqlctf", "sqlctfwillamete", "sqlctf");
$username = $_POST["username"];
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) !== 0) {
  die("Someone has already registered " . htmlspecialchars($username));
}

die("No records found, this is a unique username! But our registration has been disabled :)");
?>
