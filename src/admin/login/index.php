<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ROMERO'S Dental Clinic</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body style="background-color: #6c88ad;display:flex; flex-direction: column; align-items: center;">
  <img src="../assets/images/header.png" style="width: 30%; margin: auto; display: block; height: 30%;">
  <form action="login_be.php" method="post">
    <div class="box">
      <h2>LOG IN</h2>
      <div>
        <label class="username">U S E R N A M E : </label>
        <input class="user" type="username" name="username" required>
      </div>

      <div>
        <label class="password">P A S S W O R D : </label>
        <input class="pass" type="password" name="password" required>
      </div>
      <div>
        <button type="submit" name="btnLogin">Login</button>
      </div>
  </form>
</body>

</html
