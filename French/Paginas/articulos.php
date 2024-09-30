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
    <title>Des articles</title>
    <link rel="stylesheet" href="../css/articulos.css">
</head>
<body style="background-color: <?php echo isset($_SESSION['colorfondo']) ? $_SESSION['colorfondo'] : 'defaultColor'; ?>; color: <?php echo isset($_SESSION['colortexto']) ? $_SESSION['colortexto'] : 'defaultColor'; ?>;">
<!-- ///////// -->
<p style="background-color: black; color: white;"><?php echo $mensaje; ?></p>
                         <!-- ///////// -->
        <div class="jj">
            <a href="../../Secciones PHP/mode.php?mode=light">Modo claro</a>
            <a href="../../Secciones PHP/mode.php?mode=dark">Modo oscuro</a>
            <a href="../../SesionSegura/logout.php" class="icon icon-k">Cerrar Sesión</a>
        </div>
    <div class="contenedor">
        <header>
            <h1>Des articles</h1>
            <img src="../img/ejer1.jpg" alt="imagen sacada de google">
        </header>
    
        <div class="blanco"></div>
    
        <div class="menu-contenedor">
            <ul class="menu">
                    <li><a href="../index.php" target="">Début</a></li>
                    <li><a href="equipo_entrenamiento.php" target="">Équipement de formation</a></li>
                    <li><a href="dieta.php" target="">Régime</a></li>
                    <li><a href="articulos.php" target="">Des articles</a></li>
                    <li><a href="contactanos.php" target="">Contactez-nous</a></li>
                </ul>
            </div>
        
        <div class="conoce"><h2>Des articles</h2></div>
        <div class="debajo"></div>
            
            
            <div class="imagen_escala">
                <h1 class="texto">Les bienfaits du yoga pour la santé</h1>
                <p class="texto">Cet article de Harvard Health Publishing décrit les bienfaits du yoga pour la santé, notamment la réduction du stress, l'amélioration de la flexibilité et de la force musculaire et la réduction de la douleur chronique. Vous pouvez trouver plus d'informations sur leur site Web : https://www.health.harvard.edu/staying-healthy/yoga-benefits-beyond-the-mat</p>
                <!-- <img src="../img/mancuernas.jpg" alt=""> -->
                <br><br><br><br>
                <h1 class="texto">Comment faire de l'exercice à la maison sans équipement</h1>
                <p class="texto">Cet article Verywell Fit fournit des conseils pour faire de l'exercice à la maison sans avoir besoin d'équipement, y compris des exercices de poids corporel, du yoga et de l'entraînement par intervalles à haute intensité (HIIT). Vous pouvez trouver plus d'informations sur leur site Web : https://www.verywellfit.com/how-to-exercise-at-home-without-equipment-4169936</p>
                <!-- <img src="../img/cinta-para-correr.jpg" alt=""> -->
                <br><br><br><br>
                <h1 class="texto">Les meilleurs exercices pour améliorer la posture</h1>
                <p class="texto">Cet article de Medical News Today décrit les meilleurs exercices pour améliorer la posture, y compris l'étirement des muscles du cou et du dos, le renforcement des muscles du dos et l'entraînement respiratoire. Vous pouvez trouver plus d'informations sur leur site Web : https://www.medicalnewstoday.com/articles/323324</p>
                <!-- <img src="../img/press_pech.png" alt=""> -->
                <br><br><br><br>
                <h1 class="texto">Les bienfaits de l'exercice physique pour la santé des os</h1>
                <p class="texto">Cet article de Medical News Today décrit les avantages de l'exercice physique pour la santé des os, notamment la prévention de l'ostéoporose et l'amélioration de la densité osseuse. Vous pouvez trouver plus d'informations sur leur site Web : https://www.medicalnewstoday.com/articles/320073</p>
                <!-- <img src="../img/Kettlebell-Transparent-File.png" alt=""> -->
            </div>
        </div>
        

        <footer>
            Copyright © Tous droits réservés par Michael Solis & Andrés Villarreal
        </footer>
    </div>

    <script>
    // Obtener el valor del parámetro "imc" de la URL
    const urlParams = new URLSearchParams(window.location.search);
    const imc = urlParams.get('imc');
    const nombre = urlParams.get('nombre');
    const estatura = urlParams.get('estatura');
    const peso = urlParams.get('peso');

    // Mostrar el valor del IMC en la página
    const imcElement = document.getElementById('imc');
    imcElement.textContent = imc;

    const nombreElement = document.getElementById('nombre');
    nombreElement.textContent = nombre;

    const estaturaElement = document.getElementById('estatura');
    estaturaElement.textContent = estatura;

    const pesoElement = document.getElementById('peso');
    pesoElement.textContent = peso;
    </script>
   
</body>
</html>