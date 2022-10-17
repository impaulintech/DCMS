<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="icon.png">
  <title>Services Dental Clinic</title>
  <link rel="stylesheet" type="text/css" href="service.css">

<body>
  <center>
    <div class="container">
      <img src="../assets/images/logo.png"
        style="width: 30%; margin: auto; display: block; height: 30%; position: static; margin: 45px;">
    </div>
  </center>

  <div class="navbar" id="myNavbar">
    <a href="../home">HOME</a>
    <a href="../about">ABOUT US</a>
    <a href="../contact">CONTACT</a>
    <a href="../services">SERVICES</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

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

  <div class="background">
    <div class="letters">
      <h1>DENTAL SERVICES </h1>

      <div class="box">
        <center>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="../assets/images/cleaning.jpg" alt="Cleaning" style="width:100%">
                <h2>Cleaning</h2>
                <p class="price2">Estimated Price</p>
                <p class="price">₱600.00</p>
                <p class="clean"> Cavities or dental caries as well as other tooth and gum problems.</p>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <img src="../assets/images/dentures.jpg" alt="Dentures" style="width:100%">
                <h2>Dentures</h2>
                <p class="price2">Estimated Price</p>
                <p class="price1">₱7000.00</p>
                <p class="Denture"> It is removable replacement for missing teeth and surrounding tissues.</p>

              </div>
            </div>
            <div class="column">
              <div class="card">
                <img src="../assets/images/filling.jpg" alt="Filling" style="width:100%">
                <h2>Tooth Filling</h2>
                <p class="price2">Estimated Price</p>
                <p class="price2">₱600.00</p>
                <p class="tFilling">Used to treat a small hole, or cavity, in a tooth</p>
              </div>
            </div>

          </div>
      </div>
      </center>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="../assets/images/orthodontics.jpg" alt="Orthodontic" style="width:100%">
            <h2>Orthodontic Braces</h2>
            <p class="price2">Estimated Price</p>
            <p class="price2">₱35,000.00</p>
            <p class="braces"> (DP 5,000) Treatment of irregularities in the teeth and jaws, including the use of
              braces.</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="../assets/images/extraction.jpg" alt="Extraction" style="width:100%">
            <h2>Tooth Extraction</h2>
            <p class="price2">Estimated Price</p>
            <p class="price2">₱600.00</p>
            <p class="tooth"> A procedure to remove a tooth from the gum socket.</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="../assets/images/whitening.jpg" alt="Whitening" style="width:100%">
            <h2>Whitening</h2>
            <p class="price2">Estimated Price</p>
            <p class="price">₱2000.00</p>

            <p class="clean"> (PER SESSION) Tooth whitening is any process that lightens the color of a tooth. </p>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  </div>


</body>
</head>

</html>
