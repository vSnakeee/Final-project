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

   <section class="about">
   <div class="container">
      <div class="row d_flex">
         <div class="col-md-5">
            <div class="about_img">
               <figure><img src="images/question.png" alt="#"/></figure>
            </div>
         </div>
         <div class="col-md-7">
            <div class="titlepage">
               <h2>¿Qué es KAYO?</h2>
               <p>
                  <?php 
                  if(isset($_SESSION['email'])){
                     // Mostrar la descripción de KAYO solo si el usuario está logueado
                     echo "KAYO es una página web que se especializa en la creación e implementación de juegos en su plataforma, para que todas las personas puedan acceder a ellos de forma fácil y segura, sin necesidad de descargar nada. Además, los juegos están diseñados para ayudar al desarrollo de habilidades cognitivas.";
                  } else {
                     // Si no está logueado, mostrar un mensaje para invitarlos a loguearse
                     echo "¡Inicia sesión para conocer más sobre KAYO y explorar nuestras funciones! Los juegos están diseñados para ayudarte a desarrollar habilidades cognitivas.";
                  }
                  ?>
               </p>
            </div>
            <?php if(isset($_SESSION['email'])): ?>
               <a class="read_more" href="about.html">Leer más</a>
            <?php else: ?>
               <a class="read_more" href="login.php">Inicia sesión para saber más</a>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>


<div id="contact" class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <?php if(isset($_SESSION['email'])): ?>
               <!-- Formulario de contacto visible solo si el usuario está logueado -->
               <form id="request" class="main_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <h3>Contactanos</h3>
                     </div>
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Nombre" type="text" name="Name">
                     </div>
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Número de teléfono" type="text" name="Phone Number">
                     </div>
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Correo" type="email" name="Email">
                     </div>
                     <div class="col-md-12 ">
                        <input class="contactusmess" placeholder="Mensaje" type="text" name="Message">
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">Enviar</button>
                     </div>
                  </div>
               </form>
            <?php else: ?>
               <!-- Mensaje invitando a iniciar sesión si no está logueado -->
               <div class="alert alert-warning">
                  <h3>¡Necesitas iniciar sesión para enviarnos un mensaje!</h3>
                  <p>Por favor, inicia sesión para que podamos procesar tu mensaje.</p>
                  <a href="login.php" class="btn btn-primary">Iniciar sesión</a>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="map_section">
         <div id="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.0642129725697!2d-72.50353016330524!3d7.88162930659295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6645994e1bed0d%3A0x2dad34ff57962010!2sFundaci%C3%B3n%20de%20Estudios%20Superiores%20Comfanorte!5e0!3m2!1ses!2sco!4v1731136480492!5m2!1ses!2sco" width="1950" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
      </div>
   </div>
</div>


      <!-- Footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Cúcuta</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> 3116295363</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> k.business@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© KAYO todos los derechos reservados.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>

   </body>
</html>
