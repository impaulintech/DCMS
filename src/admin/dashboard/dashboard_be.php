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

if ($result->num_rows > 0) {
  foreach ($result as $res) {
    $date = $res['dt'];
    $fullName = $res['name'];
    $user_id = $res['slot_id'];
    $notes = $res['description'];
    $procedure_id = $res['dental_procedure'];
    $status = $res['status'] ? "Approved" : "Pending";
    $set_status = $status ? 0 : 1;

    if (isset($_POST['update_' . $user_id . ''])) {
      global $conn;
      $set = "UPDATE patient SET status=$set_status WHERE slot_id=$user_id";
      mysqli_query($conn, $set);
    }

    echo "
    <tr>
      <td class='row'>" . $user_id . "</td>
      <td class='row'>" . $fullName . "</td>
      <td class='row'>" . $date . "</td>
      <td class='row'>" . $dental_services[$procedure_id - 1] . "</td>
      <td class='row'>" . $notes . "</td>
      <td class='row'>" . $status . "</td>
      <td class='row' style='width: 300px;'>
        <form method='POST' >
          <input type='submit' name='update_$user_id' onclick='approveSchedule(event)' class='menu-btn' value='Approve' /> 
          <input type='submit' name='delete' onclick='deleteSchedule(event)' class='action-btn' value='Delete' /> 
        </form>
      </td>
    </tr>
    ";
  }
} else {
  echo '
  <script>
    alert("Something went wrong!");
  </script>
  ';
}

$conn->close();
