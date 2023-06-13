<?php

  session_start();
  include("connection.php");
  include("functions.php");

  $user_data = check_login_admin($con);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Ride Along</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- Bootstrap Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/62cf4bdb1a.js" crossorigin="anonymous"></script>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</head>

<body>


  <!-- Navbar Section -->


  <div class="container-fluid">

    <nav class="navbar navbar-expand-xl navbar-light">
      <a class="navbar-brand">RIDE ALONG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="indexAdmin.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">Home</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="allOwners.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">All Owners</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="allCommuters.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">All Commuters</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="aboutusAdmin.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">About Us</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">Log Out</button>
            </a>
          </li>
        </ul>
      </div>
    </nav>
     <!-- Title Section -->

     <div class="row about-section">
      <div class="col col-lg-6 col-md-12 col-sm-12">
        <h1>About Us</h1>
        <div class="title-image-div col col-lg-12 col-md-12 col-sm-12">
        <img class="title-image" src="images/car.png" alt="bank-mockup">
      </div>
      </div>
      <div class="title-image-div col col-lg-6 col-md-12 col-sm-12">
        <p class="about-desc"><p>Welcome to our carpooling website, where owners and commuters can connect to share rides and reduce their carbon footprint while saving money on transportation costs.</p>

        <p>At our website, we understand the importance of reducing traffic congestion, lowering carbon emissions, and improving transportation options for all. That's why we've created a platform that brings car owners and commuters together in a safe and convenient way.</p>

        <p>For car owners, our website offers the opportunity to share their ride with others, reducing the cost of gas and wear and tear on their vehicle. It's also an easy way to make new friends and meet other people in their community.</p>

        <p>For commuters, our website offers a convenient and cost-effective alternative to driving alone. With our platform, they can find carpool partners who are traveling to the same destination, reducing their transportation costs and making their daily commute more enjoyable.</p>

        <p>Our website offers a simple and user-friendly interface that makes it easy for car owners and commuters to connect. Car owners can create a profile and list their ride, including the starting location, destination, and departure time. Commuters can search for available rides based on their location, destination, and schedule.</p>

        <p>Safety is our top priority, and we take measures to ensure the security of our users. We provide a rating system that allows users to rate their carpool partners and provide feedback on their experience. We also verify the identity of all users to ensure that everyone is who they say they are.</p>

        <p>Join our carpooling community today and help reduce traffic congestion, lower carbon emissions, and save money on transportation costs. Together, we can create a more sustainable and connected world.</p>
      </div>
    </div>


  </div>
  <footer>

    <div class="contact">
      <i class="contact-img fa-brands fa-twitter"></i>
      <i class="contact-img fa-brands fa-facebook-f"></i>
      <i class="contact-img fa-brands fa-instagram"></i>
      <i class="contact-img fa-solid fa-envelope"></i>
    </div>
  
    <p>© Copyright N-Square P-Square</p>
  
  </footer>
  
  </body>
  
  </html>