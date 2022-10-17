<?php include('./dashboard_be.php'); ?>
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
        <tbody id="app">
        </tbody>
      </table>
    </div>
  </div>

  <script>
  let userData = <?php echo json_encode($approved_list); ?>;
  let target = document.querySelector('#app');
  let userDataArray = userData;

  target.innerHTML = userDataArray.map(function(data, index) {
    const {
      name,
      dt: date,
      description,
      dental_procedure,
      status,
      slot_id
    } = data;

    return `
    <tr>
      <td class='row'>${slot_id}</td>
      <td class='row'>${name}</td>
      <td class='row'>${date}</td>
      <td class='row'>${dental_procedure}</td>
      <td class='row'>${description}</td>
      <td class='row'>${status}</td>
      <td class='row' style='width: 300px;'>
        <from method="POST">
          <input type='submit' value='Approve' name='update' onclick='approveSchedule(event)' class='menu-btn' />
          <input type='submit' value='Delete' name='delete' onclick='deleteSchedule(${index})' class='action-btn' />
        </from>
      </td>
    </tr>
    `;
  }).join("");

  function refreshState() {
    window.location.reload();
  }

  function approveSchedule(event) {

    console.log('approve', event);
  }

  function deleteSchedule(id) {
    console.log('delete', id);
    setTimeout(() => {
      window.location.reload();
    }, 1500)
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

<!-- <tr>
  <td class="row">1</td>
  <td class="row">Test User</td>
  <td class="row">01/01/01</td>
  <td class="row">Dental</td>
  <td class="row">₱ 150</td>
  <td class="row">Pending</td>
  <td class="row" style="width: 300px;">
    <button onclick="approveSchedule()" class="menu-btn">Approve</button>
    <button onclick="deleteSchedule()" class="action-btn">Delete</button>
  </td>
</tr> -->
