<?php

if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
include '../contadorCookie/index.php';

// Verificar si el usuario existe
if (!isset($_SESSION['usuario'])) {
      header('Location: ../login.php');
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>LABORATORIO 6</title>
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

</head>
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
                  <h1>Entrenamiento Corporal</h1>
            </div>
            

            <!--------------- Video termina aquí --------------->

            <!--------------- Menú empieza aquí --------------->
             

            <nav class="nav">
                  <span id="brand">
                        <!-- ///////// -->
                  <p style="color: white;"><?php echo $mensaje; ?></p>
                         <!-- ///////// -->
                        <p id="contadorVisitas"></p>
                        <a href="#">Bienvenido</a>
                  </span>
                  
                  <ul id="menu">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="paginas/equipo_entrenamiento.php">Equipos de entrenamiento</a></li>
                        <li><a href="paginas/dieta.php">Dieta</a></li>
                        <li><a href="paginas/articulos.php" target="">Artículos</a></li>
                        <li><a href="Paginas/contactanos.php">Contáctanos</a></li>
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
                  <h1>Calendario semanal de ejercicio</h1>
                  
                        <table>
                            <thead>
                                <tr>
                                    <th>Día</th>
                                    <th colspan="2">Ejercicio</th>   
                                    <th rowspan="2">Repeticiones de rutina</th>
                                    <th rowspan="2">Duración de cada ejercicio</th>
                                    <th rowspan="2">Secuencia</th>
                                </tr>
                      </thead>
                      <tbody>
      
                        <tr>
                              <td>Lunes</td>
                              <td colspan="2">GAP(glúteos, abdominales y piernas)</td>
                              <td>3 repeticiones</td>
                              <td>60 segundos</td>
                              <td>Frog pump, sentadilla, reverse nordic curl, lunge o zancada, kneeling get up.</td>
                          </tr>
      
                          <tr>
                              <td>Martes</td>
                              <td colspan="2">CORE(diafragma, lumbare, pelvis, aductores, abductores)</td>
                              <td>3 repeticiones</td>
                              <td>30 segundos</td>
                              <td>Crunch modificado, plancha frontal, plancha lateral, puente de glúteo y bird dog.</td>
                          </tr>
              
                          <tr>
                              <td>Miércoles</td>
                              <td colspan="2">HIIT (ejercicios de intervalos de alta intensidad)</td>
                              <td>3 repeticiones</td>
                              <td>40 segundos</td>
                              <td>Speed walkout, predator jacks, burpees, scissorsumo, strand, sprint skipping.</td>
                          </tr>
                          <tr>
                              <td>Jueves</td>                   
                              <td colspan="2">Movilidad y estiramientos(rutina de descanso de pie)</td>
                              <td>2 y 3 repeticiciones</td>
                              <td>Hcerlo a su ritmo</td>
                              <td>A su gusto.</td>
                          </tr>
                          <tr>
                              <td>Viernes</td>
                              <td colspan="2">YOGA(Relax y desconexión)</td>
                              <td>Las que desee</td>
                              <td>A su gusto</td>
                              <td>Libre.</td>
                          </tr>
                          <tr>
                              <td>Sábado</td>
                              <td colspan="2">CORE(Para retomar fuerza y movilidad para la semana</td>
                              <td>3 repeticiones</td>
                              <td>30 segundos</td>
                              <td>Hollow rock, Plancha lateral hoover, el paracaidista, FRT, mountain climber.</td>
                          </tr>
                          <tr>
                              <td>Domingo</td>
                              <td colspan="2">Cross met(mejorar condición física con ejercicios cardiovasculares y de resistencia)</td>
                              <td>3 repeticiones</td>
                              <td>5 minutos</td>
                              <td>Little burpees, sentadillas, jumping jacks, quick seat, flexiones, scissor jacks, speed walkout, lunges, lateral hops.</td>
                          </tr>
                    </tbody>
                </table>
            </div>
            <footer>
                  &copy; Todos los derechos reservados por Michael Solis & Andrés Villarreal
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
      <!-- <a href="../SesionSegura/segura.php" class="icon icon-s">Página Segura</a> -->
      <!-- <a href="../Secciones PHP/colores.php" target="_blank" class="icon icon-k">Personalizar colores</a> -->
      <a href="../Secciones PHP/mode.php?mode=light" class="icon icon-k">Modo claro</a>
      <a href="../Secciones PHP/mode.php?mode=dark" class="icon icon-k">Modo oscuro</a>
      <a href="../SesionSegura/logout.php" class="icon icon-k">Cerrar Sesión</a>
</div>  


</body>
</html>

