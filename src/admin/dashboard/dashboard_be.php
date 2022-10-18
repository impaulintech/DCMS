<?php
include('../../database/db_connection.php');

$get_all_user = "SELECT * FROM patient";
$get_pending_user = "SELECT * FROM `patient` WHERE status=0";
$get_approved_user = "SELECT * FROM `patient` WHERE status=1";
$user_data = $conn->query($get_all_user);

$dental_services = [
  "Cleaning",
  "Dentures",
  "Minor Surgery",
  "Orthodontic Braces",
  "Tooth Extraction",
  "Toot filling",
];

if ($user_data->num_rows > 0) {
  global $conn;

  foreach ($user_data as $res) {
    $date = $res['dt'];
    $fullName = $res['name'];
    $user_id = $res['slot_id'];
    $notes = $res['description'];
    $set_status = $res['status'] ? 0 : 1;
    $procedure_id = $res['dental_procedure'];
    $status = $res['status'] ? "Approved" : "Pending";
    $button_value = $res['status'] ? "Set as Pending" : "Approve";

    if (isset($_POST['update_' . $user_id . ''])) {
      $set = "UPDATE patient SET status=$set_status WHERE slot_id=$user_id";

      if (mysqli_query($conn, $set)) {
        echo '
        <script>
          alert("Record updated successfully!");
          window.location.href="../dashboard";
        </script>
        ';
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    }

    if (isset($_POST['delete_' . $user_id . ''])) {
      $set = "DELETE FROM patient WHERE slot_id=$user_id";

      if (mysqli_query($conn, $set)) {
        echo '
        <script>
          alert("Record deleted successfully!");
          window.location.href="../dashboard";
        </script>
        ';
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    }

    echo "
    <tr>
      <td class='row'>" . $user_id . "</td>
      <td class='row'>" . $fullName . "</td>
      <td class='row'>" . $date . "</td>
      <td class='row'>" . $dental_services[(int)$procedure_id - 1] . "</td>
      <td class='row'>" . $notes . "</td>
      <td class='row'>" . $status . "</td>
      <td class='row' style='width: 300px;'>
        <form method='POST' >
          <input type='submit' name='update_$user_id' onclick='approveSchedule(event)' class='menu-btn' value='$button_value' /> 
          <input type='submit' name='delete_$user_id' onclick='deleteSchedule(event)' class='action-btn' value='Delete' /> 
        </form>
      </td>
    </tr>
    ";
  }
} else {
  echo '
  <tr>
      <td colspan="100" style="padding: 20px 0px;background-color: #25303f;">No available data.</td>
  </tr>
  ';
}

$conn->close();
