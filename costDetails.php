<?php

  session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $owner_cost_per_sec = $_POST['costPerKm'];
    $owner_cost_per_min = $_POST['costPerMin'];

    if(!empty($owner_cost_per_sec) && !empty($owner_cost_per_min))
    {
      $owner_id = $_SESSION['OwnerID'];
      //save to database
      $query = "update Owner set Cost_Per_KM='$owner_cost_per_sec',Cost_Per_Min='$owner_cost_per_min' where OwnerID='$owner_id'";

      mysqli_query($con, $query);
      header("Location: index.php");
      echo '<script>alert("Please enter some information!")</script>';
      die;
    }
    else
    {
      echo '<script>alert("Please enter some valid information!")</script>';
    }
  }
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
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Josefin+Sans:wght@600&family=Satisfy&display=swap" rel="stylesheet">

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
            <a href="index.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">Home</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="vehicleInformation.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">Vehicle Details</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="ownerLoc.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">Owner Loc</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="aboutusOwner.php">
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

  <footer>

  <div class="box">
        <h2>Enter Cost Details</h2>
      
        <form class="input-box" method="post" class="transfer-form mt-5">
        <div class="form-group">
          <input type="text" name="costPerKm" class="inputs form-control form-control-lg rounded-0 rounded-top" placeholder="Enter Cost Per Kilometer" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="text" name="costPerMin" class="inputs form-control form-control-lg rounded-0 mt-1 rounded-bottom" placeholder="Enter Cost Per Minute" autocomplete="off">
        </div>
        <button type="submit" name="submit-Button" class="btn btn-success btn-lg mt-5" value="submit-Button">Submit</button>
      </form>
    </div>

  <div>

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