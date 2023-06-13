<?php

  session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $initial_loc = $_POST['initialLoc'];
    $final_loc = $_POST['finalLoc'];

    if(!empty($initial_loc) && !empty($final_loc))
    {
      $commuter_id = $_SESSION['CommuterID'];
      $commuter_id1 = (string)$commuter_id;
      $result1 = substr($commuter_id1, 0);
      $result2=intval($result1);
      //save to database
      $query = "insert into commuter_loc (CommuterID,InitialLoc,FinalLoc) values ('$result2','$initial_loc','$final_loc')";

      mysqli_query($con, $query);
      header("Location: map.php");
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/62cf4bdb1a.js" crossorigin="anonymous"></script>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</head>

<body class="text-center">


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
            <a href="transfer.html">
              <button type="submit" class="btn btn-success btn-lg navBtn">My Trip</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="transfer.html">
              <button type="submit" class="btn btn-success btn-lg navBtn">Commuter Messages</button>
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

    <div class="box">
        <h2>Commuter Location</h2>
      
        <form class="input-box" method="post" class="transfer-form mt-5">
        <div class="form-group">
            <select name="initialLoc" class="inputs form-control form-control-lg rounded-0 rounded-top">
              <option value="" disabled selected hidden>Select Initial Location</option>
              <option>Mangalore</option>
              <option>Suratkal</option>
              <option>Puttur</option>
              <option>Padubidri</option>
            </select>
          </div>
          <div class="form-group">
            <select name="finalLoc" class="inputs form-control form-control-lg rounded-0 rounded-bottom">
              <option value="" disabled selected hidden>Select Final Location</option>
              <option>Mangalore</option>
              <option>Suratkal</option>
              <option>Puttur</option>
              <option>Padubidri</option>
            </select>
          </div>
        <button type="submit" name="sign-up-Button" class="btn btn-success btn-lg mt-5" value="sign-up-Button">Test</button>
      </form>
    </div>
      
</body>

  <footer>

    <div class="contact">
      <i class="contact-img fa-brands fa-twitter"></i>
      <i class="contact-img fa-brands fa-facebook-f"></i>
      <i class="contact-img fa-brands fa-instagram"></i>
      <i class="contact-img fa-solid fa-envelope"></i>
    </div>
  
    <p>© Copyright N-Square P-Square</p>
  
  </footer>
  
  </html>