<?php
include('../../database/db_connection.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$pass = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE user_name='$username' AND user_pass='$pass' ";
	if ($rs = $conn->query($sql)) {
		if ($rs->num_rows > 0) {
			echo '<script>
      alert("Welcome Admin!")
      window.location.href="../dashboard";
      </script>';
		} else {
			echo '<script>
      alert("Wrong username or password!")
      window.location.href="../login";
      </script>';
		}
	} else {
		echo "qqqq";
		echo $conn->error;
	}
}
