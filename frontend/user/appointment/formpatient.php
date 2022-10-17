<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $server = "localhost"; 
        $user = "root";
        $pass = "";
        $db_name = "dbdcms";
        $conn = new mysqli($server, $user, $pass, $db_name);
        if($conn->connect_error){
          die('Connection Failed'.$conn->connect_error);
        }

        if(isset($_POST['txtname']) && isset($_POST['txtage']) && isset($_POST['txtcell']) && isset($_POST['txtemail']) && isset($_POST['txtadd']) && isset($_POST['option']) && isset($_POST['txtdate']) && isset($_POST['txttime']) && isset($_POST['description'])) {

          $naming = $_POST['txtname'];
          $age1 = $_POST['txtage'];
          $cellphone = $_POST['txtcell'];
          $email1 = $_POST['txtemail']; 
          $add1 = $_POST['txtadd'];
          $dental = $_POST['option'];
          $date1 = $_POST['txtdate'];
          $time1 = $_POST['txttime'];
          $description = $_POST['description'];

          $sql = "INSERT INTO `patient` (`slot_id`, `name`, `age`, `contact_number`, `email`, `address`, `dental_procedure`, `dt`, `tm`, `description`) VALUES ('','$naming', '$age1', '$cellphone', '$email1', '$add1', '$dental', '$date1', '$time1', '$description');";
          $query = mysqli_query($conn, $sql);

          if ($query) {
            echo "REGISTERED SUCCESSFULLY!";

          } 
          else{
            echo $query->error;
          }
        }
      }
?>

