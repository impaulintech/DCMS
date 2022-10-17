<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  include('../../database/db_connection.php');

  if (
    isset($_POST['fullName']) &&
    isset($_POST['age']) &&
    isset($_POST['phone']) &&
    isset($_POST['email']) &&
    isset($_POST['address']) &&
    isset($_POST['option']) &&
    isset($_POST['date']) &&
    isset($_POST['time']) &&
    isset($_POST['description'])
  ) {
    $fullName = $_POST['fullName'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dental = $_POST['option'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `patient`( 
      `slot_id`, 
      `name`, 
      `age`, 
      `contact_number`, 
      `email`, 
      `address`, 
      `dental_procedure`, 
      `dt`, 
      `tm`, 
      `description`
    ) 
      VALUES (
        '',
        '$fullName', 
        '$age', 
        '$phone', 
        '$email', 
        '$address', 
        '$dental', 
        '$date', 
        '$time', 
        '$description'
      );";

    $query = mysqli_query($conn, $sql);
    print_r($query);
    if ($query) {
      echo '<script>
      alert("REGISTERED SUCCESSFULLY!")
      window.location.href="../home";
      </script>';
    } else {
      echo $query;
    }
  }
}
