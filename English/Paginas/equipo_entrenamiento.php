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
    <title>Training Equipment</title>
    <link rel="stylesheet" href="../css/equipo_entrenamiento.css">
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
            <h1>Training Equipment</h1>
            <img src="../img/ez.jpeg" alt="imagen sacada de google">
        </header>
    
        <div class="blanco"></div>
    
        <div class="menu-contenedor">
            <ul class="menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="equipo_entrenamiento.php" target="">Training Equipment</a></li>
                    <li><a href="dieta.php" target="">Diet</a></li>
                    <li><a href="articulos.php" target="">Articles</a></li>
                    <li><a href="contactanos.php" target="">Contact us</a></li>
                </ul>
            </div>
        
        <div class="conoce"><h2>Basic team</h2></div>
        <div class="debajo"></div>
            
            
            <div class="imagen_escala">
                <h1 class="texto">Free Weights</h1>
                <p class="texto">Free weights are a type of equipment used in strength training that consists of dumbbells, barbells, and weight plates that are not attached to a machine or fixed structure. These dumbbells allow for a full range of motion and provide greater activation of the stabilizing muscles, helping to improve functional strength and coordination.</p>
                <img src="../img/mancuernas.jpg" alt="">
                <br><br>
                <h1 class="texto">Cardio machines</h1>
                <p class="texto">The most common cardio machines are the treadmill, stationary bike, elliptical, and rowing machine. The treadmill allows you to walk or run on a moving surface, adjusting the speed and incline. The stationary bike offers stationary pedaling that is adjustable in resistance, simulating cycling. The elliptical combines running, walking, and stair climbing movements, providing a low-impact workout.</p>
                <img src="../img/cinta-para-correr.jpg" alt="">
                <br><br>
                <h1 class="texto">Strength machines</h1>
                <p class="texto">Strength machines are pieces of equipment designed to exercise and strengthen specific muscle groups. Some of the more common strength machines include cable machines, leg press machines, and chest press machines. Cable machines use a system of cables and pulleys to provide controlled resistance for a variety of pull and push exercises. Leg press machines allow you to exercise your leg muscles, such as your quadriceps and hamstrings, through an upright pushing motion. Chest press machines provide a safe and guided way to work your pectoral muscles and triceps. </p>
                <img src="../img/press_pech.png" alt="">
                <br><br>
                <h1 class="texto">Resistance team</h1>
                <p class="texto">Resistance equipment is a tool used in training to provide additional resistance to exercises, helping to strengthen and tone muscles. Some of the more common resistance equipment includes elastic bands, medicine balls, and kettlebells. Elastic bands are strips of latex or rubber that stretch to provide resistance during stretching, strengthening, and mobility exercises. Medicine balls are soft, flexible weights used for throwing, lifting, and balance exercises, improving strength and stability. Kettlebells are round-shaped weights with a handle, used for lifting and swinging exercises, engaging multiple muscle groups at once and improving strength, stamina, and coordination. This resistance equipment offers variety in training, allows greater freedom of movement and is excellent for working on functional strength and muscle stabilization.</p>
                <img src="../img/Kettlebell-Transparent-File.png" alt="">
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