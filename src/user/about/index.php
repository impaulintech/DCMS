<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <style>
    .background {
      background-color: #6c88ad;
      height: 600px;
    }

    .map {
      background-color: #1e2e42;
      width: 100%;
      margin-top: 3%;
      padding: 30px;

    }
  </style>

  <meta charset="utf-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/images/icon.png">
  <title>Romero's Dental Clinic</title>
  <link href="about.css" rel="stylesheet">
  </body class="body">
</head>

<body>

  <div class="bg2" style="background-color: #6c88ad;">
  </div>

  <center>
    <div class="container">
      <img src="../assets/images/logo.png" style="width: 30%; margin: auto; display: block; height: 30%; position: static; margin: 45px;">
    </div>
    <center>

      <!-- The navigation menu -->
      <div class="topnav" id="myTopnav">
        <a href="/home">HOME</a>
        <a href="/about">ABOUT US</a>
        <a href="/contact">CONTACT</a>
        <a href="/service">SERVICES</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>


      <div class="background">
        <div class="letters">
          <img src="../assets/images/samplepic.jpg" width="27%" height="17%">
          <h1>About Dr. Romero</h1>
          <h2>Dr. Ronaldo San Pedro Romero specializes in general dentistry.
            He received his diploma in 1991. Originally, her mother,
            Dr. Merced San Pedro-Romero, runs a dental office out of their home.
            Dr. Romero accepted a position in his mother's dentistry office after
            passing the bar test. Dr. Ronaldo Romero took over the clinic after
            8–10 years. An estimated 8–10 people can be accommodated daily in
            Romero's clinic. </h2>
        </div>
      </div>

      <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
      </script>


      <div class="map">
        <center>
          <iframe src="https://www.google.com/maps/embed?pb=!4v1665816249362!6m8!1m7!1svzLR2m4CnYg2dSBnNPQlhg!2m2!1d14.64038478882367!2d120.9914482239423!3f334.61527927139167!4f-7.42959708600678!5f2.600660853129009" class="iframes" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </center>
      </div>


      <div class="loc">
        <h2 style="font-style: Lucida Handwriting;"> Location </h2>
        <h3> 9 Cabatuan St. San Jose Quezon City </h3>
        <h3> Monday - Sunday </h3>
        <h3> 9AM - 6PM </h3>
      </div>


</body>

</html>