<?php
include('../../database/db_connection.php');

$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

$dental_services = [
  "Cleaning",
  "Dentures",
  "Minor Surgery",
  "Orthodontic Braces",
  "Tooth Extraction",
  "Toot filling",
];


$approved_list = [];

// function updateStatus($set_status, $id)
// {
//   global $conn;
//   $set = "UPDATE patient SET status=$set_status WHERE slot_id=$id";
//   mysqli_query($conn, $set);
// };


if ($result->num_rows > 0) {
  while ($patient = $result->fetch_assoc()) {
    array_push($approved_list, $patient);
  }
} else {
  echo '<script>
  alert("Something went wrong!"); 
  </script>';
}

$conn->close();
