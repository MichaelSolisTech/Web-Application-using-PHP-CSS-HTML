<?php
// session_start();
include '../../contadorCookie/index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/contacto.css">
</head>
<body style="background-color: <?php echo isset($_SESSION['colorfondo']) ? $_SESSION['colorfondo'] : 'defaultColor'; ?>; color: <?php echo isset($_SESSION['colortexto']) ? $_SESSION['colortexto'] : 'defaultColor'; ?>;">
 <!-- ///////// -->
 <p style="background-color: black; color: white;"><?php echo $mensaje; ?></p>
                         <!-- ///////// -->
        <div class="jj">
            <a href="../../Secciones PHP/mode.php?mode=light">Light Mode</a>
            <a href="../../Secciones PHP/mode.php?mode=dark">Dark Mode</a>
            <a href="../../SesionSegura/logout.php" class="icon icon-k">Logout</a>
        </div>
    <div class="contacto">
        <h1>Contacto</h1>
    </div>

    <div class="contenedor">
        <div class="menu-contenedor">
            <ul class="menu">
                    <li><a href="../index.php" target="">Home</a></li>
                    <li><a href="equipo_entrenamiento.php" target="">Training Equipment</a></li>
                    <li><a href="../paginas/dieta.php" target="">Diet</a></li>
                    <li><a href="articulos.php" target="">Articles</a></li>
                    <li><a href="contactanos.php" target="">Contact us</a></li>
                </ul>
            </div>
    </div>
    
  <!--------------- footer empieza aquí --------------->

  <div class="footer">

        <div class="contenedor1">

              <div class="info">

                    <div id="direccion">
                        <p>Work area</p>
                        <h4>Tocumen</h4>
                        <h4>La Siesta & Brisas del Golf</h4><br>
                                

                        <br><br>
                    </div>

                        <div id="mail">
                            <p>Any Query</p>
                            <h4>andres.villarreal1@utp.ac.pa</h4>
                            <h4>michael.solis@utp.ac.pa</h4>
                            <br><br>
                    </div>

              </div>

        </div>

  </div>

  <!--------------- footer termina aquí--------------->
</body>
</html>