<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yesteryear">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/images/icon.png">
  <title>Romero's Dental Clinic</title>
  <link href="home.css" rel="stylesheet">
</head>

<body class="body">
  <center>
    <div class="container">
      <img src="../assets/images/logo.png"
        style="width: 30%; margin: auto; display: block; height: 30%; position: static; margin: 45px;">
    </div>
  </center>
  </div>

  <!-- The navigation menu -->
  <div class="navbar" id="myNavbar">
    <a href="../home">HOME</a>
    <a href="../about">ABOUT US</a>
    <a href="../contact">CONTACT</a>
    <a href="../services">SERVICES</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="letters">
    <h2>Welcome!</h2>
    <h1>Schedule your appointment</h1>
    <h3>Romero's Dental Clinic is here to provide safe and quality dental journey.</br>
      Book an appointment now to flash your best smile.</h3>
    <input type="submit" name="booknow" value="BOOK NOW!" onClick="myFunction1()" />

    <script>
    function myFunction1() {
      window.location.href = "../appointment";
    }
    </script>
    <script>
    function myFunction() {
      var x = document.getElementById("myNavbar");
      if (x.className === "navbar") {
        x.className += " responsive";
      } else {
        x.className = "navbar";
      }
    }
    </script>
  </div>
  <p style="text-align: center; color: white">
    Copyright &copy; 2022
    <br> Romero's Dental Clinic | All Rights Reserved
  </p>
</body>


</html>
