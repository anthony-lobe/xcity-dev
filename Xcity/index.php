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
    <header class="justify-content-center page-scroll">       
        <div class="topnav navbar-dark bg-dark nav-pills" id="myTopnav">
            <a href="#home" class="active">Xcity</a>
            <a href="#sante">SANTE</a>
            <a href="#environnement">ENVIRONNEMENT</a>
            <a href="#logement">LOGEMENT</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>                        
        </div>
    </header>   
    <!------------------ SLIDER IMAGE ------------------------>
    <div id="slider" style='height: 40%; width: 100%; margin:0 auto;'>
        <figure>
            <img style='height: 100%; width: 100%; object-fit: contain' src="img/orange.jpeg" alt>
            <img style='height: 100%; width: 100%; object-fit: contain' src="img/volcan.jpeg" alt>
            <img style='height: 100%; width: 100%; object-fit: contain' src="img/planete.jpeg" alt>
            <img style='height: 100%; width: 100%; object-fit: contain' src="img/volcan.jpeg" alt>
            <img style='height: 100%; width: 100%; object-fit: contain' src="img/planete.jpeg" alt>
        </figure>
    </div>

<!------------------ SPONSORS ------------------------>

<div title="Click to flip" class="sponsor">
    <div class="sponsorFlip">
        <img alt="More about google" src="img/Sponsors/casino.png">
        
    </div>

    
</div>
<?php
$sponsors = array(
    array('auchan','The biggest social..','http://www.facebook.com/'),
    array('leclerc','The leading software de..','http://www.adobe.com/'),
    array('intermarche','One of the top software c..','http://www.microsoft.com/'),
    array('carrefour','A global multibillion electronics..','http://www.sony.com/'),
    array('casino','One of the biggest computer develo..','http://www.dell.com/'),
    array('match','The biggest online auction and..','http://www.ebay.com/'),
 
);

// Randomizing the order of sponsors:

shuffle($sponsors);

// Looping through the array:

foreach($sponsors as $company)
{
    echo'
        <div class="sponsor" title="Click to flip">
            <div class="sponsorFlip">
                <img src="img/Sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
            </div>

            <div class="sponsorData">
                <div class="sponsorDescription">
                    '.$company[1].'
                </div>
                <div class="sponsorURL">
                    <a href="'.$company[2].'">'.$company[2].'</a>
                </div>
            </div>
        </div>

    ';
}
?>


<!------------------ FOOTER ------------------------>
      <!-- Site footer -->
      <footer class="site-footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Xcity est une plateforme communautaire , qui intervient dans l'amélioration des condtions de vie. Aussi bien dans le secteur <i>medical , immobilier </i> et meme <i>environnemental . </i>  </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Nos valeurs</h6>
            <ul class="footer-links">
              <li>Amelioration</li>
              <li>Progression</li>
              <li>Futur</li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Xcity</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="facebook icon"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>