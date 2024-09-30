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
    <title>Matériel de formation</title>
    <link rel="stylesheet" href="../css/equipo_entrenamiento.css">
</head>
<body style="background-color: <?php echo isset($_SESSION['colorfondo']) ? $_SESSION['colorfondo'] : 'defaultColor'; ?>; color: <?php echo isset($_SESSION['colortexto']) ? $_SESSION['colortexto'] : 'defaultColor'; ?>;">
<!-- ///////// -->
<p style="color: white;"><?php echo $mensaje; ?></p>
                         <!-- ///////// -->

        <div class="jj">
            <a href="../../Secciones PHP/mode.php?mode=light">Modo claro</a>
            <a href="../../Secciones PHP/mode.php?mode=dark">Modo oscuro</a>
            <a href="../../SesionSegura/logout.php" class="icon icon-k">Cerrar Sesión</a>
        </div>
    <div class="contenedor">
        <header>
            <h1>Matériel de formation</h1>
            <img src="../img/ez.jpeg" alt="imagen sacada de google">
        </header>
    
        <div class="blanco"></div>
    
        <div class="menu-contenedor">
            <ul class="menu">
                    <li><a href="../index.php">Début</a></li>
                    <li><a href="equipo_entrenamiento.php" target="">Équipement de formation</a></li>
                    <li><a href="dieta.php" target="">Régime</a></li>
                    <li><a href="articulos.php" target="">Des articles</a></li>
                    <li><a href="contactanos.php" target="">Contactez-nous</a></li>
                </ul>
            </div>
        
        <div class="conoce"><h2>Equipe de base</h2></div>
        <div class="debajo"></div>
            
            
            <div class="imagen_escala">
                <h1 class="texto">Poids libres</h1>
                <p class="texto">Les poids libres sont un type d'équipement utilisé dans l'entraînement en force qui se compose d'haltères, d'haltères et de plaques de poids qui ne sont pas attachés à une machine ou à une structure fixe. Ces haltères permettent une gamme complète de mouvements et fournissent une plus grande activation des muscles stabilisateurs, aidant à améliorer la force fonctionnelle et la coordination.</p>
                <img src="../img/mancuernas.jpg" alt="">
                <br><br>
                <h1 class="texto">Machines cardio</h1>
                <p class="texto">Les machines cardio les plus courantes sont le tapis roulant, le vélo stationnaire, l'elliptique et le rameur. Le tapis roulant vous permet de marcher ou de courir sur une surface en mouvement, en ajustant la vitesse et l'inclinaison. Le vélo stationnaire offre un pédalage stationnaire dont la résistance est réglable, simulant le cyclisme. L'elliptique combine des mouvements de course, de marche et de montée d'escaliers, offrant un entraînement à faible impact.</p>
                <img src="../img/cinta-para-correr.jpg" alt="">
                <br><br>
                <h1 class="texto">Appareils de musculation</h1>
                <p class="texto">Les appareils de musculation sont des équipements conçus pour exercer et renforcer des groupes musculaires spécifiques. Certaines des machines de musculation les plus courantes comprennent les machines à câble, les presses à jambes et les presses à poitrine. Les machines à câbles utilisent un système de câbles et de poulies pour fournir une résistance contrôlée pour une variété d'exercices de traction et de poussée. Les presses à jambes vous permettent d'exercer les muscles de vos jambes, tels que vos quadriceps et vos ischio-jambiers, par un mouvement de poussée verticale. Les presses pectorales offrent un moyen sûr et guidé de travailler vos muscles pectoraux et vos triceps. </p>
                <img src="../img/press_pech.png" alt="">
                <br><br>
                <h1 class="texto">Équipe de résistance</h1>
                <p class="texto">L'équipement de résistance est un outil utilisé dans l'entraînement pour fournir une résistance supplémentaire aux exercices, aidant à renforcer et à tonifier les muscles. Certains des équipements de résistance les plus courants comprennent les bandes élastiques, les médecine-balls et les kettlebells. Les bandes élastiques sont des bandes de latex ou de caoutchouc qui s'étirent pour offrir une résistance lors des exercices d'étirement, de renforcement et de mobilité. Les ballons médicinaux sont des poids souples et flexibles utilisés pour les exercices de lancer, de levage et d'équilibre, améliorant ainsi la force et la stabilité. Les kettlebells sont des poids de forme ronde avec une poignée, utilisés pour les exercices de levage et de balancement, engageant plusieurs groupes musculaires à la fois et améliorant la force, l'endurance et la coordination. Cet équipement de résistance offre une variété d'entraînements, permet une plus grande liberté de mouvement et est excellent pour travailler la force fonctionnelle et la stabilisation musculaire.</p>
                <img src="../img/Kettlebell-Transparent-File.png" alt="">
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