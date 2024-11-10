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

      <!-- banner -->
      <section class="banner_main">
   <div id="banner1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#banner1" data-slide-to="0" class="active"></li>
         <li data-target="#banner1" data-slide-to="1"></li>
         <li data-target="#banner1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <div class="carousel-caption">
                  <div class="text-bg">
                     <h1>Bienvenid@ <span class="blu">
                        <?php
                           if(isset($_SESSION['email'])){
                              $email = $_SESSION['email'];
                              $query = mysqli_query($conn, "SELECT users.firstName, users.lastName FROM `users` WHERE users.email='$email'");
                              while($row = mysqli_fetch_array($query)){
                                 echo $row['firstName'] . ' ' . $row['lastName'];
                              }
                           } else {
                              echo 'Invitado';
                           }
                        ?>
                     </span> a KA/YO</h1>
                     <figure><img src="images/kayo.png" alt="KA/YO Logo" /></figure>
                     <a class="read_more" href="about.html">Leer más</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Repite para otras imágenes en el slider -->
         <div class="carousel-item">
            <div class="container">
               <div class="carousel-caption">
                  <div class="text-bg">
                     <h1>Bienvenid@ <span class="blu">
                        <?php
                           if(isset($_SESSION['email'])){
                              $email = $_SESSION['email'];
                              $query = mysqli_query($conn, "SELECT users.firstName, users.lastName FROM `users` WHERE users.email='$email'");
                              while($row = mysqli_fetch_array($query)){
                                 echo $row['firstName'] . ' ' . $row['lastName'];
                              }
                           } else {
                              echo 'Invitado';
                           }
                        ?>
                     </span> a KA/YO</h1>
                     <figure><img src="images/vision.png" alt="KA/YO Vision" /></figure>
                     <a class="read_more" href="about.html">Leer más</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Más elementos del slider aquí -->
      </div>
      <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
         <i class="fa fa-arrow-left" aria-hidden="true"></i>
      </a>
      <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
         <i class="fa fa-arrow-right" aria-hidden="true"></i>
      </a>
   </div>
</section>

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
<section class="glasses">
   <div class="container">
      <div class="row">
         <div class="col-md-10 offset-md-1">
            <div class="titlepage">
               <h2>Nuestro catálogo</h2>
               <p>
                  <?php 
                  if(isset($_SESSION['email'])){
                     // Mostrar el catálogo solo si el usuario está logueado
                     echo "Es un catálogo de juegos que ofrecen el desarrollo cognitivo y de habilidades para nuestro público objetivo.";
                  } else {
                     // Si no está logueado, mostrar un mensaje invitando a loguearse
                     echo "Inicia sesión para explorar nuestro catálogo de juegos diseñados para mejorar tus habilidades cognitivas.";
                  }
                  ?>
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row">
         <?php 
         // Verificar si el usuario está logueado antes de mostrar los juegos
         if(isset($_SESSION['email'])): 
         ?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="images/ninjabreakout200.png" alt="nb.php"/></figure>
                  <h3><span class="blu"></span>NINJA BREAKOUT</h3>
                  <p>KAYO™</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="images/candyhouse200.png" alt="ch.php"/></figure>
                  <h3><span class="blu"></span>CANDY HOUSE</h3>
                  <p>KAYO™</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="images/hashiwokakero200.png" alt="hashi.php"/></figure>
                  <h3><span class="blu"></span>HASHIWOKAKERO</h3>
                  <p>KAYO™</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="images/mergeit200.png" alt="mergeit.php"/></figure>
                  <h3><span class="blu"></span>MERGEIT</h3>
                  <p>KAYO™</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="images/pinballbreakout200.png" alt="pinball.php"/></figure>
                  <h3><span class="blu"></span>PINBALL BREAKOUT</h3>
                  <p>KAYO™</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="images/winterbubble200.png" alt="winter.php"/></figure>
                  <h3><span class="blu"></span>WINTER BUBBLE</h3>
                  <p>KAYO™</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="images/balloonmaze200.jpg" alt="ballon.php"/></figure>
                  <h3><span class="blu"></span>BALLON MAZE</h3>
                  <p>KAYO™</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="glasses_box">
                  <figure><img src="images/chaosmahjong200.jpg" alt="chaos.php"/></figure>
                  <h3><span class="blu"></span>CHAOS MAHJONG</h3>
                  <p>KAYO™</p>
               </div>
            </div>
         <?php else: ?>
            <!-- Si no está logueado, mostramos un mensaje invitando al login -->
            <div class="col-md-12">
               <p style="text-align: center;">¡Inicia sesión para acceder al catálogo completo de juegos!</p>
            </div>
         <?php endif; ?>
         <div class="col-md-12">
            <?php if(isset($_SESSION['email'])): ?>
               <a class="read_more" href="glasses.html">Más</a>
            <?php else: ?>
               <a class="read_more" href="login.php">Inicia sesión para ver más juegos</a>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>
<div id="about" class="shop">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-5">
            <div  class="shop_img">
               <figure><img src="images/pacmantb.png" alt="#"/></figure>
            </div>
         </div>
         <div class="col-md-7 padding_right0">
            <div class="max_width">
               <div class="titlepage">
                  <h2>Mejor interacción con el jugador</h2>
                  <p>
                     <?php 
                     if(isset($_SESSION['email'])){
                        // Si el usuario está logueado, mostramos la descripción del juego
                        echo "Pacman es uno de los más grandes clásicos en los videojuegos y que es probado sirve para aprender a predecir acciones y poder hacerle frentes a acciones repentinas, estas viéndose representadas por los fantasmas que el jugador tiene que esquivar.";
                     } else {
                        // Si no está logueado, invitamos al usuario a iniciar sesión
                        echo "Inicia sesión para obtener más información sobre los juegos y mejorar tu experiencia.";
                     }
                     ?>
                  </p>
                  <a class="read_more" href="#">
                     <?php 
                     // Cambiar el enlace dependiendo de si el usuario está logueado o no
                     if(isset($_SESSION['email'])){
                        echo "Más";
                     } else {
                        echo "Inicia sesión para más detalles";
                     }
                     ?>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clients">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Opiniones de usuarios</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <?php if(isset($_SESSION['email'])): ?>
               <!-- Carrusel visible solo si el usuario está logueado -->
               <div id="myCarousel" class="carousel slide clients_Carousel" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="clients_box">
                                       <figure><img src="images/usuario1.jpg" alt="#"/></figure>
                                       <h3>Martín, 22 años</h3>
                                       <p>Es una buena página para pasar el rato cuando tengo tiempo libre. Tienen una gran variedad de géneros, desde acción hasta puzzles, aunque algunos juegos tardan un poco en cargar. Creo que podrían mejorar optimizando el rendimiento, pero fuera de eso, está bastante bien.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="clients_box">
                                       <figure><img src="images/our.png" alt="#"/></figure>
                                       <h3>Laura, 34 años</h3>
                                       <p>La página es genial para los niños. Mi hijo pasa horas entretenido con los juegos educativos que ofrecen, y sé que es un entorno seguro para él. Sería perfecto si tuviera algunas funciones adicionales, como la posibilidad de guardar el progreso en los juegos, pero en general es bastante completa.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="clients_box">
                                       <figure><img src="images/usuario2.png" alt="#"/></figure>
                                       <h3>Carlos, 28 años</h3>
                                       <p>Me encanta esta página. Tiene una selección de juegos súper divertida y variada, perfecta para esos momentos de descanso. Lo que más me gusta es que no necesito descargar nada, solo entro y juego. Además, la interfaz es muy sencilla, lo que hace que sea fácil encontrar lo que quiero sin perder tiempo.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            <?php else: ?>
               <!-- Mensaje para usuarios no logueados -->
               <div class="alert alert-warning">
                  <h3>¡Inicia sesión para ver las opiniones de los usuarios!</h3>
                  <p>Solo los usuarios logueados pueden ver las opiniones. Por favor, inicia sesión para acceder a esta sección.</p>
                  <a href="login.php" class="btn btn-primary">Iniciar sesión</a>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>
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

      </footer>
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
                        <p>© KAYO todos los derechos reservados.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
