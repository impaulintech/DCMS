<?php  
$server="localhost"; 
$user="root";
$pass="";
$db_name="dbdcms";
$error = array();
$conn = new mysqli ($server, $user, $pass, $db_name);
if ($conn->connect_error){
	die ('Connect Failed'.$conn->connect_error);
}
if (isset($_POST['txtUser']) && isset($_POST['txtPass'])) {
	$username= $_POST['txtUser'];
	$pass= md5($_POST['txtPass']);

	$sql="SELECT * FROM users WHERE user_name='$username' AND user_pass='$pass' ";
	if ($rs=$conn->query($sql)) {
		if ($rs->num_rows>0) {
			
			include 'schedule_front.php';

		}else {
			
			include 'admin_front.php';

		}

	}else {
		echo $conn->error;
	}

}
?>