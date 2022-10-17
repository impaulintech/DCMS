<!---<?php
      $naming = "";
      $age1 = "";
      $cellphone = "";
      $email1 = "";
      $add1 = "";
      $dental = "";
      $date1 = "";
      $time1 = "";
      $description = "";
      ?> ---->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <title>ROMERO'S Dental Clinic</title>
  <link rel="stylesheet" type="text/css" href="appointment.css">
</head>

<body>
  <div class="container">
    <img src="../assets/images/logo.png" style="width: 40%; margin: auto; display: block; height: 40%;">
  </div>
  <center>
    <!-- The navigation menu -->
    <div class="navbar">
      <a href="../home">HOME</a>
      <a href="../about">ABOUT US</a>
      <a href="../contact">CONTACT</a>
      <a href="../services">SERVICES</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div class="background">
      <div class="letters">
        <h2>Patients' Appointment </h2>

      </div>
      <div class="box">
        <label class="text1"> Please be advised that this is not yet a confirmed appointment.</label> <br>
        <label class="text2">Our Clinic will text/email you to finalize your appointment</label>
        <br> <br>

        <form action="formpatient.php" method="post">
          <div>
            <label class="name">Name (Lastname, Firstname): </label>
            <input class="naming" type="text" name="txtname" placeholder="Enter your Name" required>
          </div>
          <div>
            <label class="age">Age: </label>
            <input class="age1" type="age" name="txtage" placeholder="Enter your Age" required>
          </div>
          <div>
            <label class="cp">Cellphone Number: </label>
            <input class="cellphone" type="contactno" name="txtcell" placeholder="Enter you number" required>
          </div>
          <div>
            <label class="email">Email: </label>
            <input class="email1" type="email" name="txtemail" placeholder="Enter your Email" required>
          </div>
          <div>
            <label class="address">Address: </label>
            <input class="add1" type="address" name="txtadd" placeholder="Enter your Address" required>
          </div>
          <div>
            <label class="date">Date: </label>
            <input class="date1" type="date" name="txtdate" required>
          </div>
          <div>
            <label class="time">Time: </label>
            <input class="time1" type="time" name="txttime" required>
          </div>
          <div class="input-box">
            <span class="services"> SERVICES AND ESTIMATED PRICE </span>
            <select class="dental" name="option">
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Cleaning Php 600</option>Dentures Php 7000
              <option value="2">Dentures Php 7000</option>
              <option value="3">Minor Surgery Php 600</option>
              <option value="4">Orthodontic Braces Php 35000</option>
              <option value="5">Tooth Extraction Php 600</option>
              <option value="6">Tooth Filling Php 600</option>
            </select>
          </div>
          <div>
            <label class="description">DESCRIPTION - If you have any Medical allergies </label>
            <textarea name="description" placeholder="Medical Allergies" rows="5" cols="30" required> </textarea>
          </div>
          <div class="button">
            <input type="submit" value="SUBMIT" name="submit">
          </div>
        </form>
      </div>
    </div>
  </center>