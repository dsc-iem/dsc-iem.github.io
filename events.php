<?php
require("common.php");
$sql = "SELECT * FROM events";
$result = mysqli_query($con,$sql);
$sql1 = "SELECT * FROM eventsPast";
$result1 = mysqli_query($con1,$sql1);
$sql2 = "SELECT * FROM eventsUp";
$result2 = mysqli_query($con2,$sql2);
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="DSC IEM is a community which aims to upskills students and is owered by Google">
        <title>Events</title>
        <link rel="apple-touch-icon" sizes="180x180" href="assests/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assests/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assests/favicon/favicon-16x16.png">
        <link rel="manifest" href="assests/favicon/site.webmanifest">
        <link rel="mask-icon" href="assests/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assests/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="assests/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/themify/css/themify-icons.css">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
        
        </head>
        <body>
        	<!--- carousel --->
        	<section id ="car-margin" style="height: auto;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <?php
      while($row = mysqli_fetch_assoc($result))
      {
        if($row['active']==1)
          echo "<div class='carousel-item active'>";
        else
          echo'<div class="carousel-item">';
          echo'<img class="d-block w-100" src="'.$row['eventPic'].'" alt="Pics">';
          echo '<div class="carousel-caption d-none d-md-block">';
          #sort this out depending on use
          echo'<h5>'.$row['eventHeading'].'</h5>';
          echo'<p>'.$row['eventPara'].'</p>';
          echo '</div></div>';
      }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<!--- carousel end --->
<h1 style="text-align: center; color: ">UPCOMING EVENTS</h1>
<hr class="style1" style="height: 3px">
<!-- cards--->
<section class="section-margin">
<div class="card-deck">
  <?php
    while($row2 = mysqli_fetch_assoc($result2))
    {
      echo '<div class="card">';
      echo '<img class="card-img-top" src="'.$row2['eventPic'].'" alt="Card image cap">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">'.$row2['eventHeading'].'</h5>';
      echo '<p class="card-text">'.$row2['eventPara'].'</p>';
      #<p class="card-text"> <a href="#" class="btn btn-primary">Explore</a>
      /*
              <div class="social">
              <a href="#" ><i class="fa fa-facebook"></i></a>
         <a href="#"> <i class="fa fa-twitter"></i></a>
        </div>
      */
      echo '</p></div></div>';
    }
  ?>
</div>
</section>
<div style="background: #ececec;">

<hr class="style2" style="padding-bottom: 5%;">


<h1 style="text-align: center; ">PAST EVENTS</h1>
<hr class="style1" style="height: 3px">
<!-- cards--->
<section class="section-margin">
<div class="card-deck">
  <?php
    while($row1 = mysqli_fetch_assoc($result1))
    {
      echo '<div class="card">';
      echo '<img class="card-img-top" src="'.$row1['eventPic'].'" alt="Card image cap">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">'.$row1['eventHeading'].'</h5>';
      echo '<p class="card-text">'.$row1['eventPara'].'</p>';
      #<p class="card-text"> <a href="#" class="btn btn-primary">Explore</a>
      /*
              <div class="social">
              <a href="#" ><i class="fa fa-facebook"></i></a>
         <a href="#"> <i class="fa fa-twitter"></i></a>
        </div>
      */
      echo '</p></div></div>';
    }
  ?>
</div>
</section >
<div style="padding-bottom: 10px;">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

        </body>
        </html>
