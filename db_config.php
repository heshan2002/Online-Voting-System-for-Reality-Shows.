<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "project1";

$conn = mysqli_connect($servername,'root','', $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
