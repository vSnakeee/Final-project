<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>KAYO</title>
      <link rel="shortcut icon" href="img/favicon.ico">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body class="main-layout">

      <!-- header -->
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/favicon.ico" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="homepage.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">Nosotros</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="glasses.php">Catalogo</a>
                              </li>
                              <?php if(isset($_SESSION['email'])): ?>
                              <li class="nav-item">
                                 <a class="nav-link" href="logout.php">Logout</a>
                              </li>
                              <?php else: ?>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Login</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Register</a>
                              </li>
                              <?php endif; ?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Nuestro catalogo.</h2>
                     <p>Es un catalogo de juegos que ofrecen el desarrollo cognitivo y de habilidades para nuestro publico objetivo.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="nb.php"><!-- Enlace a NINJA BREAKOUT -->
                        <figure><img src="images/ninjabreakout200.png" alt="#"/></figure>
                     </a>
                     <h3><span class="blu"></span>NINJA BREAKOUT</h3>
                     <p>KAYO™</p>
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="ch.php"><!-- Enlace a CANDY HOUSE -->
                        <figure><img src="images/candyhouse200.png" alt="#"/></figure>
                     </a>
                     <h3><span class="blu"></span>CANDY HOUSE</h3>
                     <p>KAYO™</p>
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="Hashi.php"><!-- Enlace a HASHIWOKAKERO -->
                        <figure><img src="images/hashiwokakero200.png" alt="#"/></figure>
                     </a>
                     <h3><span class="blu"></span>HASHIWOKAKERO</h3>
                     <p>KAYO™</p>
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="mergeit.php"><!-- Enlace a MERGEIT -->
                        <figure><img src="images/mergeit200.png" alt="#"/></figure>
                     </a>
                     <h3><span class="blu"></span>MERGEIT</h3>
                     <p>KAYO™</p>
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="pinball.php"><!-- Enlace a PINBALL BREAKOUT -->
                        <figure><img src="images/pinballbreakout200.png" alt="#"/></figure>
                     </a>
                     <h3><span class="blu"></span>PINBALL BREAKOUT</h3>
                     <p>KAYO™</p>
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="winter.php"><!-- Enlace a WINTER BUBBLE -->
                        <figure><img src="images/winterbubble200.png" alt="#"/></figure>
                     </a>
                     <h3><span class="blu"></span>WINTER BUBBLE</h3>
                     <p>KAYO™</p>
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="ballon.php"><!-- Enlace a BALLOON MAZE -->
                        <figure><img src="images/balloonmaze200.jpg" alt=""/></figure>
                     </a>
                     <h3><span class="blu"></span>BALLOON MAZE</h3>
                     <p>KAYO™</p>
                  </div>
               </div>
               
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <!-- Envuelve la imagen en un enlace -->
                     <a href="chaos.php">
                        <figure><img src="images/chaosmahjong200.jpg" alt=""/></figure>
                     </a>
                     <h3><span class="blu"></span>CHAOS MAHJONG</h3>
                     <p>KAYO™</p>
                  </div>
               </div>
               <div class="col-md-12">
               </div>
            </div>
         </div>
      </div>
      <div>
      <!-- end Our  Glasses section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br>Cúcuta</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br>3116295363</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br>k.business@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© KAYO todos los derechos reservados.</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>