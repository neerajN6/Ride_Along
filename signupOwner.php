<?php

  session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $owner_username = $_POST['username'];
    $owner_name = $_POST['name'];
    $owner_age = $_POST['age'];
    $owner_password = $_POST['password'];
    $owner_gender = $_POST['gender'];

    if(!empty($owner_username) && !empty($owner_password) && !empty($owner_name) && !empty($owner_age) && !empty($owner_gender) && !is_numeric($owner_username) && !is_numeric($owner_name))
    {
      //save to database
      $OwnerID = random_num(20);
      $query = "insert into owner (OwnerID,Username,Name,Age,Gender,Password) values ('$OwnerID','$owner_username','$owner_name','$owner_age','$owner_gender','$owner_password')";

      mysqli_query($con, $query);
      header("Location: themesOwner.php");
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

<body>


  <!-- Navbar Section -->


  <div class="container-fluid">

    <nav class="navbar navbar-expand-xl navbar-light">
      <a class="navbar-brand">RIDE ALONG</a>
      <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="signupCommuter.php">
              <button type="submit" class="btn btn-success btn-lg navBtn">Sign Up as Commuter</button>
            </a>
          </li>
        </ul>
      </div>
      <div class="btn-group ms-auto">
      <button class="btn btn-success btn-lg dropdown-toggle navBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Log In
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="loginOwner.php">Log In As Owner</a></li>
        <li><a class="dropdown-item" href="loginCommuter.php">Log In As Commuter</a></li>
        <li><a class="dropdown-item" href="loginAdmin.php">Log In As Administrator</a></li>
      </ul>
    </div>
    </nav>
    <body class="text-center">
      <div class="box">
        <h2>Sign Up As Owner</h2>

        <div class="title-image-div col col-lg-12 col-md-12 col-sm-12">
            <img class="title-image-login" src="images/car.png" alt="bank-mockup">
          </div>
      
        <form class="input-box" method="post" class="transfer-form mt-5">
        <div class="form-group">
          <input type="text" name="username" class="inputs form-control form-control-lg rounded-0 rounded-top" placeholder="Enter Username" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="text" name="name" class="inputs form-control form-control-lg rounded-0 mt-1" placeholder="Enter Name" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="number" name="age" class="inputs form-control form-control-lg rounded-0 mt-1" placeholder="Enter Age" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="text" name="password" class="inputs form-control form-control-lg rounded-0 mt-1" placeholder="Enter Password" autocomplete="off">
        </div>
        <div class="form-group">
            <select name="gender" class="inputs form-control form-control-lg rounded-0 rounded-bottom mt-1">
              <option value="" disabled selected hidden>Select gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Others</option>
            </select>
          </div>
        <button type="submit" name="sign-up-Button" class="btn btn-success btn-lg mt-5" value="sign-up-Button">Sign Up</button>
      </form>
</div>
      
      </body>
      <!-- Footer Section -->

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
  