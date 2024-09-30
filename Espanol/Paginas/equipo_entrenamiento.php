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
    <title>Equipo de entrenamiento</title>
    <link rel="stylesheet" href="../css/equipo_entrenamiento.css">
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
            <h1>Equipos de entrenamiento</h1>
            <img src="../img/ez.jpeg" alt="imagen sacada de google">
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
        
        <div class="conoce"><h2>Equipo básico</h2></div>
        <div class="debajo"></div>
            
            
            <div class="imagen_escala">
                <h1 class="texto">Pesas Libres</h1>
                <p class="texto">Las pesas libres son un tipo de equipamiento utilizado en el entrenamiento de fuerza que consiste en mancuernas, barras y discos de peso que no están conectados a una máquina o estructura fija. Estas pesas permiten un rango completo de movimiento y brindan una mayor activación de los músculos estabilizadores, lo que ayuda a mejorar la fuerza funcional y la coordinación.</p>
                <img src="../img/mancuernas.jpg" alt="">
                <br><br>
                <h1 class="texto">Máquinas cardiovasculares</h1>
                <p class="texto">Las máquinas cardiovasculares más comunes son la cinta de correr, la bicicleta estática, la elíptica y la máquina de remo. La cinta de correr permite caminar o correr en una superficie en movimiento, ajustando la velocidad e inclinación. La bicicleta estática ofrece un pedaleo estacionario ajustable en resistencia, simulando el ciclismo. La elíptica combina movimientos de correr, caminar y escalar escaleras, brindando un entrenamiento de bajo impacto.</p>
                <img src="../img/cinta-para-correr.jpg" alt="">
                <br><br>
                <h1 class="texto">Máquinas de fuerza</h1>
                <p class="texto">Las máquinas de fuerza son equipos diseñados para ejercitar y fortalecer grupos musculares específicos. Algunas de las máquinas de fuerza más comunes incluyen las máquinas de poleas, las máquinas de press de piernas y las máquinas de press de pecho. Las máquinas de poleas utilizan un sistema de cables y poleas para proporcionar resistencia controlada en una variedad de ejercicios de tracción y empuje. Las máquinas de press de piernas permiten ejercitar los músculos de las piernas, como los cuádriceps y los isquiotibiales, a través de un movimiento de empuje vertical. Las máquinas de press de pecho brindan una forma segura y guiada de trabajar los músculos pectorales y los tríceps. </p>
                <img src="../img/press_pech.png" alt="">
                <br><br>
                <h1 class="texto">Equipo de resistencia</h1>
                <p class="texto">Los equipos de resistencia son herramientas utilizadas en el entrenamiento para proporcionar resistencia adicional a los ejercicios, lo que ayuda a fortalecer y tonificar los músculos. Algunos de los equipos de resistencia más comunes incluyen bandas elásticas, balones medicinales y kettlebells. Las bandas elásticas son tiras de látex o goma que se estiran para proporcionar resistencia durante los ejercicios de estiramiento, fortalecimiento y movilidad. Los balones medicinales son pesas blandas y flexibles que se utilizan para ejercicios de lanzamiento, levantamiento y equilibrio, mejorando la fuerza y la estabilidad. Los kettlebells son pesas de forma redonda con un asa, que se utilizan para ejercicios de levantamiento y balanceo, involucrando múltiples grupos musculares a la vez y mejorando la fuerza, la resistencia y la coordinación. Estos equipos de resistencia ofrecen variedad en los entrenamientos, permiten una mayor libertad de movimiento y son excelentes para trabajar la fuerza funcional y la estabilización muscular.</p>
                <img src="../img/Kettlebell-Transparent-File.png" alt="">
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