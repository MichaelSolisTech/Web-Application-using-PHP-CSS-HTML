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
    <title>Artículos</title>
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
           
            <h1>Artículos</h1>
            <img src="../img/ejer1.jpg" alt="imagen sacada de google">
        </header>
    
        <div class="blanco"></div>
    
        <div class="menu-contenedor">
            <ul class="menu">
                    <li><a href="../index.php" target="">Inicio</a></li>
                    <li><a href="equipo_entrenamiento.php" target="">Equipos de entrenamiento</a></li>
                    <li><a href="dieta.php" target="">Dieta</a></li>
                    <li><a href="articulos.php" target="">Artículos</a></li>
                    <li><a href="contactanos.php" target="">Contáctanos</a></li>
                </ul>
            </div>
        
        <div class="conoce"><h2>Artículos</h2></div>
        <div class="debajo"></div>
        
            
            
            <div class="imagen_escala">
                <h1 class="texto">Los beneficios del yoga para la salud</h1>
                <p class="texto">Este artículo de Harvard Health Publishing describe los beneficios del yoga para la salud, incluyendo la reducción del estrés, la mejora de la flexibilidad y la fuerza muscular, y la reducción del dolor crónico. Puedes encontrar más información en su sitio web: https://www.health.harvard.edu/staying-healthy/yoga-benefits-beyond-the-mat</p>
                <!-- <img src="../img/mancuernas.jpg" alt=""> -->
                <br><br>
                <h1 class="texto">Cómo hacer ejercicio físico en casa sin equipo</h1>
                <p class="texto">Este artículo de Verywell Fit proporciona consejos para hacer ejercicio físico en casa sin necesidad de equipo, incluyendo ejercicios de peso corporal, yoga y entrenamiento de intervalos de alta intensidad (HIIT). Puedes encontrar más información en su sitio web: https://www.verywellfit.com/how-to-exercise-at-home-without-equipment-4169936</p>
                <!-- <img src="../img/cinta-para-correr.jpg" alt=""> -->
                <br><br>
                <h1 class="texto">Los mejores ejercicios para mejorar la postura</h1>
                <p class="texto">Este artículo de Medical News Today describe los mejores ejercicios para mejorar la postura, incluyendo el estiramiento de los músculos del cuello y la espalda, el fortalecimiento de los músculos de la espalda y el entrenamiento de la respiración. Puedes encontrar más información en su sitio web: https://www.medicalnewstoday.com/articles/323324</p>
                <!-- <img src="../img/press_pech.png" alt=""> -->
                <br><br>
                <h1 class="texto">Los beneficios del ejercicio físico para la salud ósea</h1>
                <p class="texto">Este artículo de Medical News Today describe los beneficios del ejercicio físico para la salud ósea, incluyendo la prevención de la osteoporosis y la mejora de la densidad ósea. Puedes encontrar más información en su sitio web: https://www.medicalnewstoday.com/articles/320073</p>
                <!-- <img src="../img/Kettlebell-Transparent-File.png" alt=""> -->
            </div>
        </div>
        

        <footer>
            Copyright © Todos los derechos reservados por Michael Solis & Andrés Villarreal
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