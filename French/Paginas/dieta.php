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
    <title>Page de régime</title>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dieta.css">
    <link rel="stylesheet" href="../css/tablas.css">
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
            <div class="logo">
                <img src="../img/exer.png" alt="Imagen del logo">
            </div>
       
            <nav class="menu">
                <a href="../index.php">Début</a>
                <a href="equipo_entrenamiento.php">Équipement de formation</a>
                <a href="dieta.php">Régime</a>
                <a href="articulos.php" target="">Des articles</a>
                <a href="contactanos.php">Contactez-nous</a>
            </nav>
        </header>
        <section class="main">
            <article>
                <div class="imagen">
                    <img src="../img/dieta_ejer.jpg" alt="img">
                </div>
                <h2>Régime alimentaire pour un mode de vie sain</h2>
                <p>Il est important de consommer la bonne quantité de calories en fonction des besoins individuels et de se concentrer sur les trois macronutriments essentiels : les glucides, les protéines et les graisses saines. Il est essentiel d'inclure des aliments nutritifs comme les fruits, les légumes, les protéines maigres et les grains entiers dans votre alimentation quotidienne. Rester hydraté en buvant suffisamment d'eau et en planifiant les repas peut aider à maintenir une concentration constante sur une alimentation saine. </p>
       
                <p>Il est recommandé de demander des conseils personnalisés à un professionnel de la santé ou à un nutritionniste pour des objectifs spécifiques.</p>
            </article>
        </section>
        <div class="tabla">
            <table>
                <caption>Les aliments avec leurs macronutriments et leurs calories</caption>
                <thead>
                    <tr>
                        <th>MACRONUTRIMENT</th>
                        <th colspan="2">NOURRITURE</th>
                        <th rowspan="2">Valeur calorique par gramme</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Les glucides</td>
                        <td>Riz complet</td>
                        <td>Quinoa</td>
                        <td>4 calories/gramme chaque aliment</td>
                    </tr>
        
                    <tr>
                        <td>Les glucides</td>
                        <td colspan="2">Patates</td>
                        <td>1 calories/gramme</td>
                    </tr>
        
                    <tr>
                        <td>Les glucides</td>
                        <td colspan="2">Céréales complètes</td>
                        <td>4 calories/gramme</td>
                    </tr>
                    <tr>
                        <td>Les glucides</td>
                        <td colspan="2">Fruit</td>
                        <td>Varie selon les fruits</td>
                    </tr>
                    <tr>
                        <td>Protéines</td>
                        <td colspan="2">Poulet</td>
                        <td>4 calories/gramme</td>
                    </tr>
                    <tr>
                        <td>Protéines</td>
                        <td colspan="2">Poisson</td>
                        <td>4 calories/gramme</td>
                    </tr>
                    <tr>
                        <td>Protéines</td>
                        <td colspan="2">Œufs</td>
                        <td>5 calories/gramme</td>
                    </tr>
                    <tr>
                        <td>Protéines</td>
                        <td colspan="2">Produits laitiers allégés</td>
                        <td>4 calories/gramme</td>
                    </tr>
                    <tr>
                        <td>Graisses</td>
                        <td colspan="2">Huile d'olive</td>
                        <td>9 calories/gramme</td>
                    </tr>
                    <tr>
                        <td>Graisses</td>
                        <td colspan="2">Avocats</td>
                        <td>9 calories/gramme</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Données comparatives</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <footer>
            <div class="autor">
                <p>Créé par Michael Solis & Andrés Villarreal</p>
            </div>
       
            <div class="redes-sociales">
                <a href="http://www.facebook.com/" target="_blank">Facebook</a>
                <a href="http://www.twitter.com/" target="_blank">Twitter</a>
            </div>
        </footer>
   </div>
</body>
</html>