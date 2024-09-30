<?php
session_start();
include '../contadorCookie/index.php';

// Check if cookie exists, if not, set it to a default language
if (!isset($_COOKIE['idiomaUsuario'])) {
    $_COOKIE['idiomaUsuario'] = 'en';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>LABORATORY 6</title>
      <script language="javascript" type="text/javascript">
            function enviarIdioma (idioma) {
                location.href ="../grabarCookie.php?idiomaUsuario=" + idioma;
            }
        </script>
      <link rel="stylesheet" href="css/font.css">
      <script src="https://kit.fontawesome.com/78110e1896.js" crossorigin="anonymous"></script>

      <!-- stylesheet -->
      <link rel="stylesheet" href="css/index.css">

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- iconos -->
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

      <!-- para animaciones de scroll -->
      <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
      <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>

      <body style="background-color: <?php echo isset($_SESSION['colorfondo']) ? $_SESSION['colorfondo'] : 'defaultColor'; ?>; color: <?php echo isset($_SESSION['colortexto']) ? $_SESSION['colortexto'] : 'defaultColor'; ?>;">
      <a name="home"></a>
      <div class="wrapper">


            <!--------------- Video --------------->

            <div class="video-container">
                  <video playsinline autoplay muted loop id="bgvid">
                        <source src="video/ejercicio.mp4" type="video/mp4">
                  </video>
            </div>

            <div class="header">
                  <h1>Body Workout</h1>
            </div>
            

            <!--------------- Video termina aquí --------------->

            <!--------------- Menú empieza aquí --------------->

            <nav class="nav">
                  <span id="brand">
                   <!-- ///////// -->
                   <p style="color: white;"><?php echo $mensaje; ?></p>
                         <!-- ///////// -->
                        <a href="#">Welcome</a>
                  </span>

                  <ul id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="paginas/equipo_entrenamiento.php">Training equipment</a></li>
                        <li><a href="paginas/dieta.php">Diet</a></li>
                        <li><a href="paginas/articulos.php" target="">Articles</a></li>
                        <li><a href="Paginas/contactanos.php">Contact us</a></li>
                  </ul>
            </nav>
            

            <!--------------- Menú termina aquí --------------->

            <div class="content">

            <!--------------- videos y texto --------------->

            

           <section class="story">
      

                  

           </section>

            <!--------------- Video y texto termina aquí --------------->



            <!--------------- TEAM --------------->

            <div class="slider">
                  <ul>
                      <li><img src="img/ejer1.jpg" alt=""></li>
                      <li><img src="img/ejer2.png" alt=""></li>
                      <li><img src="img/ejer3.png" alt=""></li>
                      <li><img src="img/ejer4.png" alt=""></li>
      
                  </ul>
              </div>
            
            <!--------------- team termina aquí --------------->

            <!--------------- Tabla --------------->

            <div class="tabla">
                  <h1>Weekly exercise schedule</h1>
                        <table>
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th colspan="2">Exercise</th>   
                                    <th rowspan="2">Routine repetitions</th>
                                    <th rowspan="2">Duration of each exercise</th>
                                    <th rowspan="2">Sequence</th>
                                </tr>
                      </thead>
                      <tbody>
      
                        <tr>
                              <td>Monday</td>
                              <td colspan="2">GAP (buttocks, abs and legs)</td>
                              <td>3 repetitions</td>
                              <td>60 seconds</td>
                              <td>Frog pump, squat, reverse Nordic curl, lunge or stride, kneeling get up.</td>
                          </tr>
      
                          <tr>
                              <td>Tuesday</td>
                              <td colspan="2">CORE (diaphragm, lumbar, pelvis, adductors, abductors)</td>
                              <td>3 repetitions</td>
                              <td>30 seconds</td>
                              <td>Modified crunch, front plank, side plank, glute bridge, and bird dog.</td>
                          </tr>
              
                          <tr>
                              <td>Wednesday</td>
                              <td colspan="2">HIIT (high intensity interval exercises)</td>
                              <td>3 repetitions</td>
                              <td>40 seconds</td>
                              <td>Speed ​​walkout, predator jacks, burpees, scissors sumo, strand, sprint skipping.</td>
                          </tr>
                          <tr>
                              <td>Thursday</td>                   
                              <td colspan="2">Mobility and stretching (standing rest routine)</td>
                              <td>2 and 3 repetitions</td>
                              <td>Do it at your pace</td>
                              <td>To your taste.</td>
                          </tr>
                          <tr>
                              <td>Friday</td>
                              <td colspan="2">YOGA (Relax and disconnection)</td>
                              <td>The ones you want</td>
                              <td>To your taste.</td>
                              <td>Free.</td>
                          </tr>
                          <tr>
                              <td>Saturday</td>
                              <td colspan="2">CORE (To regain strength and mobility for the week</td>
                              <td>3 repetitions</td>
                              <td>30 seconds</td>
                              <td>Hollow rock, Hoover Side Plank, Skydiver, FRT, mountain climber.</td>
                          </tr>
                          <tr>
                              <td>Sunday</td>
                              <td colspan="2">Cross met (improve physical condition with cardiovascular and resistance exercises)</td>
                              <td>3 repetitions</td>
                              <td>5 minutes</td>
                              <td>Little burpees, squats, jumping jacks, quick seat, push-ups, scissor jacks, speed walkout, lunges, lateral hops.</td>
                          </tr>
                    </tbody>
                </table>
            </div>
            <footer>
                  Copyright © All rights reserved by Michael Solis & Andrés Villarreal
              </footer>
            </div>

      </div>
      


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>

// La navegación empieza aquí
$("#toggle").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });
      $("#resize ul li a").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });
      $(".close-btn").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

$(function () {
  $(document).scroll(function () {
    var $nav = $(".nav");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});


</script>
<div class="social">
      <a href="javascript:enviarIdioma('sp');" class="icon icon-facebook2"></a>
      <a href="javascript:enviarIdioma('en');" class="icon icon-instagram"></a>
      <a href="javascript:enviarIdioma('fr');" class="icon icon-twitter"></a>
      <a href="../borrarCookie.php" class="icon icon-youtube"></a>
      <a href="../Secciones PHP/mode.php?mode=light" class="icon icon-k">Light Mode</a>
      <a href="../Secciones PHP/mode.php?mode=dark" class="icon icon-k">Dark Mode</a>
      <a href="../SesionSegura/logout.php" class="icon icon-k">Logout</a>
</div>

</body>
</html>

