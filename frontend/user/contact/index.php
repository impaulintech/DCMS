<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yesteryear">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png">
    <style>

    * {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
    <title>Romero's Dental Clinic</title>

    <link href = "contacts.css" rel="stylesheet">
  </body class="body">

  </head>

  <body>


    
<center>
    <div class="container">
      <img src="img/logo1.png"
        style="width: 30%; margin: auto; display: block; height: 30%; position: static; margin: 45px;">
    </div>
</center>
      <!-- The navigation menu -->
      <div class="navbar">
        <a href="home.php">HOME</a>
        <a href="About.php">ABOUT US</a>
        <a href="contacts.php">CONTACT</a>
        <a href="services.php">SERVICES</a>
      </div>

<div class="wide">

      <div class="get">
      <center> <h1>GET IN TOUCH</h1> </center>
    </div>
<center>
      <div class="row">
        <div class="column" style="background-color:#182434;">
          <img src="img/fb.png" style="width: 20%">
          <h1>Facebook</h1>
          <input type="button" onclick="location.href='https://www.facebook.com/ronaldo.romero.3785';" value="MESSAGE" />
        </div>


        <div class="column" style="background-color:#1B293B">
          <img src="img/gmail.png" style="width: 35%">
          <h1>Gmail</h1>
          <input type="button" onclick="location.href='https://www.gmail.com';" value="MESSAGE" />
        </div>


        <div class="column" style="background-color:#1e2e42;">
          <img src="img/cp.png" style="width: 20%">
          <h1>Contact Number</h1>
          <h3> 09164560205 </h3>
          <h3> 8364 3165 </h3>
        </div>
      </div>
</div>
</center>

</div>
</body>
</html>