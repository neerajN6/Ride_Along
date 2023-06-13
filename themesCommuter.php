<?php

  session_start();
  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    if (isset($_POST["photo"])){
        $themes="Photo";
      } else if (isset($_POST["hiphop"])){
        $themes="HipHop";
      } else if (isset($_POST["movie"])){
        $themes="Movie";
      } else if (isset($_POST["literature"])){
        $themes="Literature";
      }

    if(!empty($themes))
    {
      $commuter_id = $_SESSION['CommuterID'];
      //save to database
      $query = "update Commuter set Themes='$themes' where CommuterID='$commuter_id'";

      mysqli_query($con, $query);
      header("Location: loginCommuter.php");
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

  <div class="container">
    <h2>Choose Themes</h2>
    <div class="row">
        <div class="col-sm-6 py-2">
            <div class="card h-100 text-white bg-danger">
                <div class="card-body">
                    <img src="https://cdn-icons-png.flaticon.com/256/2317/2317973.png" alt="Italian Trulli">
                    <h3 class="card-title">Photography</h3>
                    <p class="card-text">Photography is the art, application, and practice of creating durable images by recording light.</p>
                    <form class="input-box" method="post" class="transfer-form mt-5">
                        <button type="submit" name="photo" class="btn btn-success btn-lg mt-5" value="submit-Button">Photography</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 py-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                <img src="https://cdn-icons-png.flaticon.com/256/3613/3613255.png" alt="Italian Trulli">
                    <h3 class="card-title">Hip-Hop Culture</h3>
                    <p class="card-text">Hip hop culture is characterized by four key elements: rapping, DJing, breakdancing, and graffiti.</p>
                    <form class="input-box" method="post" class="transfer-form mt-5">
                        <button type="submit" name="hiphop" class="btn btn-success btn-lg mt-5" value="submit-Button">Hip-Hop Culture</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 py-2">
            <div class="card h-100 text-white bg-danger">
                <div class="card-body">
                <img src="https://cdn-icons-png.flaticon.com/256/4221/4221484.png" alt="Italian Trulli">
                    <h3 class="card-title">Movies</h3>
                    <p class="card-text">People who watch similar types of movies.</p>
                    <form class="input-box" method="post" class="transfer-form mt-5">
                        <button type="submit" name="movie" class="btn btn-success btn-lg mt-5" value="submit-Button">Movies</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 py-2">
            <div class="card text-white bg-primary">
                <div class="card-body">
                <img src="https://cdn-icons-png.flaticon.com/256/8132/8132110.png" alt="Italian Trulli">
                    <h3 class="card-title">Literature</h3>
                    <p class="card-text">People who read similar types of books.</p>
                    <form class="input-box" method="post" class="transfer-form mt-5">
                        <button type="submit" name="literature" class="btn btn-success btn-lg mt-5" value="submit-Button">Literature</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  
     <!-- Title Section -->

  <footer>

  

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