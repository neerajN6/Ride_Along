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

     <div class="row title-section">
      <div class="col col-lg-6 col-md-12 col-sm-12">
        <h1>Welcome to Ride Along</h1>
        <p class="title-description">Your Essential Ride-Sharing Companion!</p>
      </div>
      <div class="title-image-div col col-lg-6 col-md-12 col-sm-12">
        <img class="title-image" src="images/car.png" alt="bank-mockup">
      </div>
    </div>


  </div>

  <!-- Facilities Section -->

  <div class="facilities-section">

    <h2>Our Facilities</h2>

    <div class="row cards-section">
      <div class="pricing-col col col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card card-item">
          <div class="card-header">
            <h3>View Owners</h3>
          </div>
          <div class="card-body d-grid gap-2">
            <div><i class="fa-solid fa-user fa-6x feature-image"></i></div>
            <p class="card-text">View the details of all owners of cars.</p>
            <a href="allOwners.php">
              <button type="submit" class="btn btn-dark btn-lg">View Owners</button>
            </a>
          </div>
        </div>
      </div>

      <div class="pricing-col col col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card card-item">
          <div class="card-header">
            <h3>View commuters</h3>
          </div>
          <div class="card-body d-grid gap-2">
            <div><i class="fa-solid fa-person-military-pointing fa-6x feature-img"></i></div>
            <p class="card-text mt-3">View the details of all viewers of cars.</p>
            <a href="allCommuters.php">
              <button type="submit" class="btn btn-dark btn-lg">View commuters</button>
            </a>
          </div>
        </div>
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