<?php

  session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $owner_username = $_POST['username'];
    $owner_password = $_POST['password'];

    if(!empty($owner_username) && !empty($owner_password) && !is_numeric($owner_username))
    {
      //read to database
      $query = "select * from owner where Username = '$owner_username' limit 1";

      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['Password'] === $owner_password)
                {
                  $_SESSION['OwnerID'] = $user_data['OwnerID'];
                  header("Location: index.php");
                  die;
                }
            }
      }
      echo '<script>alert("Wrong username or password!")</script>';
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
      <div class="btn-group ms-auto">
      <button class="btn btn-success btn-lg dropdown-toggle navBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Log In
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="loginCommuter.php">Log In As Commuter</a></li>
        <li><a class="dropdown-item" href="loginAdmin.php">Log In As Administrator</a></li>
      </ul>
    </div>
      <div class="btn-group ">
      <button class="btn btn-success btn-lg dropdown-toggle navBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Sign Up
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="signupOwner.php">Sign Up As Owner</a></li>
        <li><a class="dropdown-item" href="signupCommuter.php">Sign Up As Commuter</a></li>
      </ul>
    </div>
    </nav>
    <body class="text-center">
      <div class="box">
        <h2>Log In As Owner</h2>

        <div class="title-image-div col col-lg-12 col-md-12 col-sm-12">
          <img class="title-image-login" src="images/car.png" alt="bank-mockup">
        </div>
      
        <form class="input-box" method="post" class="transfer-form mt-5">
        <div class="form-group">
          <input type="text" name="username" class="inputs form-control form-control-lg rounded-0 rounded-top" placeholder="Enter Username" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="password" name="password"class="inputs form-control form-control-lg rounded-0 rounded-bottom mt-1" placeholder="Enter Password" autocomplete="off">
        </div>
        <button type="submit" name="login-in-Button" class="btn btn-success btn-lg mt-5" value="login-in-Button">Log In</button>
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
  