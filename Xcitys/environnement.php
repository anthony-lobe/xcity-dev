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
        <link rel="icon" type="image/png" href="imagesx/icons/favicon.ico"/>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!------------------ NAVBAR ------------------------>
    <?php include("header.php"); ?>
    <!------------------ BANNIERE IMAGE ------------------------>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url(banniere.png);background-size:cover;max-height:0 auto;">
        </div>
      </div>
    </div>

    <!------------------ TEXTE IMAGE ------------------------>

    <div class="ui segment">
  <div class="ui two column very relaxed grid">
    <div class="column">
    <h1><B style="color: black;">ramassage des marchés <span class="text-green">+100</span><B></h1>
    <h1><B style="color: black;">recyclage des matières plastiques <span class="text-green">+50</span><B></h1>
    <h1><B style="color: black;">un mégot de cigarette ?<span class="text-green">+20</span><B></h1>
    <h1><B style="color: black;">une bouteille en plastique ?<span class="text-danger">+40</span><B></h1>  
    </div>
    <img src="sponsors.jpg"/>
  </div>
  <div class="ui vertical divider">
    and
  </div>
</div>

<div class="ui segment" style="text-align: center;background: grey">
<h1>Nos offres partenaires</h1>
  <p>Nous agissons avec des acteurs locaux afin de faciliter l'ecologie. chaque action écologique signalé par un de nos utilisateurs entraine des points de recompense
    nous vous proposons des offres suivantes :</p>
    <p> pour 25O points <span class="text-danger"> -15% de réductions chez nos partenaires </span></p>
</div>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<!------------------ FOOTER ------------------------>
<?php include("footer.php"); ?>
</body>
</html>

