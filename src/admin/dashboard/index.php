<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="schedule.css">
</head>

<body>

  <div class="sidenav">
    <img src="img/logo.png" height="68px">
    <a class="active" href="schedule_front.php">SCHEDULE</a>
    <a href="#">PATIENTS</a>
    <a href="#">NOTES</a>
  </div>


  <div class="main">
    <h2 style="font-size:3vw;color: white;">SCHEDULE LIST</h2>
  </div>
  <div class="page">

    <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="button" class="search">Search</button>
        <button type="button" class="approved">Approved Schedule</button>
        <button type="button" class="edit">Edit</button>
        <button type="button" class="delete">Delete</button>
        <button type="button" class="logout">Logout</button>
      </form>
    </div>
  </div>
  </div>
  <center>
    <div>
      <table style="width:85%; margin-left: 200px;">
        <tr>
          <td class="title">SLOTS</td>
          <td class="title">PATIENT NAME</td>
          <td class="title">DATE</td>
          <td class="title">SERVICE</td>
          <td class="title">PRICE</td>
          <td class="title">STATUS</td>
          <td class="title">ACTION</td>
        </tr>
        <tr>
          <td class="row">
            <form method="POST">
              <input type="text" name="name" value="<?php $sqlName ?>">
            </form>
          </td>
          <td class="row"></td>
          <td class="row"></td>
          <td class="row"></td>
          <td class="row"></td>
          <td class="row"></td>
          <td class="row"></td>
        </tr>
      </table>
    </div>
  </center>

</body>

</html>