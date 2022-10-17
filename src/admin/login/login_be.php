<?php
include './src/database/db_connection.php';

if (isset($_POST['txtUser']) && isset($_POST['txtPass'])) {
	$username = $_POST['txtUser'];
	$pass = md5($_POST['txtPass']);

	$sql = "SELECT * FROM users WHERE user_name='$username' AND user_pass='$pass' ";
	if ($rs = $conn->query($sql)) {
		if ($rs->num_rows > 0) {

			include 'schedule_front.php';
		} else {

			include 'admin_front.php';
		}
	} else {
		echo $conn->error;
	}
}
