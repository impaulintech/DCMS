<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "dbdcms";
$conn = new mysqli($server, $user, $pass, $db_name);

if ($conn->connect_error) {
  die('Connect Failed' . $conn->connect_error);
}
