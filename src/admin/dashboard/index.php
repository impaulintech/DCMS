<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dashboard.css">
</head>

<body>
  <div class="sidenav">
    <img src="../assets/images/header.png" height="68px">
    <a class="active" href="schedule_front.php">SCHEDULE</a>
    <a href="#">PATIENTS</a>
    <a href="#">NOTES</a>
  </div>
  <div class="main">
    <h2 style="font-size:3vw;color: white; margin-left: 100px; text-align:center">SCHEDULE LIST</h2>
    <div class="page">
      <div class="search-container">
        <input type="text" placeholder="Search.." name="search">
        <button class="menu-btn">Search</button>
        <button class="menu-btn" onclick="approvedAppointment()">Approved Appointments</button>
        <button class="menu-btn" onclick="logout()">Logout</button>
        <button onclick="refreshState()" class="menu-btn"
          style="float: right; margin-top: 9px; margin-right: 9px">Refresh</button>
      </div>
    </div>
    <div>
      <table style="width:85%; margin-left: 200px;color:white">
        <tr>
          <td class="title">SLOTS</td>
          <td class="title">PATIENT NAME</td>
          <td class="title">DATE</td>
          <td class="title">SERVICE</td>
          <td class="title">NOTES</td>
          <td class="title">STATUS</td>
          <td class="title">ACTION</td>
        </tr>
        <tbody>
          <?php include('./dashboard_be.php'); ?>
        </tbody>
      </table>
    </div>
  </div>

  <script>
  function refreshState() {
    window.location.reload();
  }

  function approveSchedule(event) {
    console.log("approv")
  }

  function deleteSchedule(event) {
    console.log('delete');
  }

  function approvedAppointment() {
    console.log('Go to approved appointments');
  }

  function logout() {
    window.location.href = "../login";
  }
  </script>

</body>

</html>
