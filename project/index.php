<?php

$conn = mysqli_connect("localhost", "root", "", "diplo");


if ($conn) {

  echo "database connected";
} else {
  echo "unable to connect to database";
}



?>

<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rent A CAR</title>

  <link rel="icon" href="./images/favicon-32x32.png" type="image/x-icon">

  <link rel="stylesheet" href="./style.css">



  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@800&family=Lexend+Deca:wght@200&display=swap" rel="stylesheet">

  <style>
    nav {
      font-size: 20px;
      text-align: right;
      padding: 20px;
    }

    nav>a {
      color: white;
      text-decoration: none;
      opacity: 1;
      margin-right: 20px;
    }

    #main {
      height: 70px;
      border-radius: 10px;


    }
  </style>

</head>


<body class="bg__light  center">


  <main class="container">

    <div class="card card--1 container__padding bg--1 rounded--left">
      <img class="padding__1" src="./images/icon-sedans.svg" alt="">
      <h1 class="h1 padding__1 text--white">Sedans</h1>
      <p class="paragraph padding__2 text--white--transparent">Choose a
        <strong>SEDAN</strong> for its affordability and excellent fuel economy. Ideal for cruising in the city or on your next road trip.
      </p>
      <a class="btn" href="#">Learn More</a>
    </div>

    <div class="card card--2 container__padding bg--2">
      <img class="padding__1" src="./images/icon-.svg" alt="">
      <h2 class="h1 padding__1 text--white">Suvs</h1>
        <p class=" paragraph padding__2 text--white--transparent">Take an <strong>SUV</strong> for its spacious interior, power, and versatility. Perfect for your next family vacation and off-road adventures.</p>
        <a class="btn" href="#">Learn More</a>
    </div>

    <div class="card card--3 container__padding bg--3 rounded--right">
      <img class="padding__1" src="./images/icon-luxury.svg" alt="">
      <h2 class="h1 padding__1 text--white">Luxury</h1>
        <p class="paragraph padding__2 text--white--transparent">Cruise in the best car brands without the bloated prices. Enjoy the enhanced comfort of a <strong>LUXURY</strong> rental and arrive in style. </p>
        <a class="btn" href="#">Learn More</a>
    </div>

    <div id=main>

      <nav>

        <a href="login.php">login</a>

        <a href="login.php">signup</a>


      </nav>

    </div>




    </div>


  </main>









</body>

</html>