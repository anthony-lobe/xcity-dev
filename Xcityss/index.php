<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <title>Xcity</title>

    <!-- CSS link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">

    <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Semantic UI  -->
        <link rel="stylesheet" type="text/css" href="SemanticUI/semantic.min.css">
        <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        <script src="semantic/dist/semantic.min.js"></script>
    
    <!-- Javascript link  -->
        <script src="js/index.js"></script>

    <!-- Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" />
  
    <!-- Squad theme CSS -->
        <link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!------------------ NAVBAR ------------------------>
    <?php include("header.php"); ?>
    <!------------------ SLIDER IMAGE ------------------------>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url(./1.jpg);">

      <div class="container">
        <div class="carousel-caption text-left">
          <!------------------------------>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="background-image:url(img/team/2.jpg);">

      <div class="container">
        <div class="carousel-caption">
          <!------------------------------>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

      <div class="container">
        <div class="carousel-caption text-right">
          <!------------------------------>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>




<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!------------------ FOOTER ------------------------>
<?php include("footer.php"); ?>
</body>
</html>