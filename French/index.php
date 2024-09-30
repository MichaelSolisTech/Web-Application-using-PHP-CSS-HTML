<?php
// session_start();
include '../contadorCookie/index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>LABORATOIRE 6</title>
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
                  <h1>Entraînement Corporel</h1>
            </div>
            

            <!--------------- Video termina aquí --------------->

            <!--------------- Menú empieza aquí --------------->

            <nav class="nav">
                  <span id="brand">
                         <!-- ///////// -->
                  <p style="color: white;"><?php echo $mensaje; ?></p>
                         <!-- ///////// -->
                        <a href="#">Accueillir</a>
                  </span>

                  <ul id="menu">
                        <li><a href="index.php">Début</a></li>
                        <li><a href="paginas/equipo_entrenamiento.php">Équipement de formation</a></li>
                        <li><a href="paginas/dieta.php">Régime</a></li>
                        <li><a href="paginas/articulos.php" target="">Des articles</a></li>
                        <li><a href="Paginas/contactanos.php">Contactez-nous</a></li>
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
                  <h1>Programme d'exercices hebdomadaire</h1>
                        <table>
                            <thead>
                                <tr>
                                    <th>Jour</th>
                                    <th colspan="2">Exercer</th>   
                                    <th rowspan="2">Eépétitions de routine</th>
                                    <th rowspan="2">Durée de chaque exercice</th>
                                    <th rowspan="2">Séquence</th>
                                </tr>
                      </thead>
                      <tbody>
      
                        <tr>
                              <td>Lundi</td>
                              <td colspan="2">GAP (fesses, abdominaux et jambes)</td>
                              <td>3 répétitions</td>
                              <td>60 secondes</td>
                              <td>Frog pump, squat, curl nordique inversé, fente ou foulée, lever à genoux.</td>
                          </tr>
      
                          <tr>
                              <td>Mardi</td>
                              <td colspan="2">CORE (diaphragme, lombaire, bassin, adducteurs, abducteurs)</td>
                              <td>3 répétitions</td>
                              <td>30 secondes</td>
                              <td>Crunch modifié, planche avant, planche latérale, pont fessier et chien d'oiseau.</td>
                          </tr>
              
                          <tr>
                              <td>Mercredi</td>
                              <td colspan="2">HIIT (exercices à intervalles de haute intensité)</td>
                              <td>3 répétitions</td>
                              <td>40 secondes</td>
                              <td>Débrayage de vitesse, prises de prédateur, burpees, sumo de ciseaux, brin, saut de sprint.</td>
                          </tr>
                          <tr>
                              <td>Jeudi</td>                   
                              <td colspan="2">Mobilité et étirements (routine de repos debout)</td>
                              <td>2 et 3 répétitions</td>
                              <td>Faites-le à votre rythmeo</td>
                              <td>À votre goût.</td>
                          </tr>
                          <tr>
                              <td>Vendredi</td>
                              <td colspan="2">YOGA (Détente et déconnexion)</td>
                              <td>Ceux que tu veux</td>
                              <td>A votre goût</td>
                              <td>Libre.</td>
                          </tr>
                          <tr>
                              <td>Samedi</td>
                              <td colspan="2">CORE (Pour retrouver force et mobilité pour la semaine</td>
                              <td>3 répétitions</td>
                              <td>30 secondes</td>
                              <td>Hollow rock, Hoover Side Plank, Skydiver, FRT, alpiniste.</td>
                          </tr>
                          <tr>
                              <td>Dimanche</td>
                              <td colspan="2">Cross met (améliorer la condition physique avec des exercices cardiovasculaires et de résistance)</td>
                              <td>3 répétitions</td>
                              <td>5 minutes</td>
                              <td>Petits burpees, squats, jumping jacks, quick seat, push-ups, scissor jacks, speed walkout, fentes, sauts latéraux.</td>
                          </tr>
                    </tbody>
                </table>
            </div>
            <footer>
                  Copyright © Tous droits réservés par Michael Solis & Andrés Villarreal
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
      <a href="../Secciones PHP/mode.php?mode=light" class="icon icon-k">Mode Lumière</a>
      <a href="../Secciones PHP/mode.php?mode=dark" class="icon icon-k">Mode Sombre</a>
      <a href="../SesionSegura/logout.php" class="icon icon-k">Se déconnecter</a>
</div>

</body>
</html>

