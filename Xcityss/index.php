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
    <div class="slider">
        <div class="slides">
           <div class="slide"><img src="img/volcan.jpeg" /></div>
           <div class="slide"><img src="img/orange.jpeg" /></div>
           <div class="slide"><img src="img/planete.jpeg" /></div>
        </div>


    </div>

<?php include("content.php"); ?>

<!------------------ FOOTER ------------------------>
<?php include("footer.php"); ?>
</body>
</html>