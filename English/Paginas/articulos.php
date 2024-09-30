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
    <title>Articles</title>
    <link rel="stylesheet" href="../css/articulos.css">
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
    <div class="contenedor">
        <header>
            <h1>Articles</h1>
            <img src="../img/ejer1.jpg" alt="imagen sacada de google">
        </header>
    
        <div class="blanco"></div>
    
        <div class="menu-contenedor">
            <ul class="menu">
                    <li><a href="../index.php" target="">Home</a></li>
                    <li><a href="equipo_entrenamiento.php" target="">Training Equipment</a></li>
                    <li><a href="dieta.php" target="">Diet</a></li>
                    <li><a href="articulos.php" target="">Articles</a></li>
                    <li><a href="contactanos.php" target="">Contact us</a></li>
                </ul>
            </div>
        
        <div class="conoce"><h2>Articles</h2></div>
        <div class="debajo"></div>
            
            
            <div class="imagen_escala">
                <h1 class="texto">The benefits of yoga for health</h1>
                <p class="texto">This Harvard Health Publishing article outlines the health benefits of yoga, including reducing stress, improving flexibility and muscle strength, and reducing chronic pain. You can find more information on their website: https://www.health.harvard.edu/staying-healthy/yoga-benefits-beyond-the-mat</p>
                <!-- <img src="../img/mancuernas.jpg" alt=""> -->
                <br><br>
                <h1 class="texto">How to exercise at home without equipment</h1>
                <p class="texto">This Verywell Fit article provides tips for exercising at home without the need for equipment, including bodyweight exercises, yoga, and high-intensity interval training (HIIT). You can find more information on their website: https://www.verywellfit.com/how-to-exercise-at-home-without-equipment-4169936</p>
                <!-- <img src="../img/cinta-para-correr.jpg" alt=""> -->
                <br><br>
                <h1 class="texto">The best exercises to improve posture</h1>
                <p class="texto">This Medical News Today article outlines the best exercises to improve posture, including stretching your neck and back muscles, strengthening your back muscles, and breathing training. You can find more information on their website: https://www.medicalnewstoday.com/articles/323324</p>
                <!-- <img src="../img/press_pech.png" alt=""> -->
                <br><br>
                <h1 class="texto">The benefits of physical exercise for bone health</h1>
                <p class="texto">This Medical News Today article describes the benefits of physical exercise for bone health, including preventing osteoporosis and improving bone density. You can find more information on their website: https://www.medicalnewstoday.com/articles/320073</p>
                <!-- <img src="../img/Kettlebell-Transparent-File.png" alt=""> -->
            </div>
        </div>
        

        <footer>
            Copyright © All rights reserved by Michael Solis & Andrés Villarreal
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