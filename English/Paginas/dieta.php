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
    <title>Diet Page</title>
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
            <a href="../../Secciones PHP/mode.php?mode=light">Light Mode</a>
            <a href="../../Secciones PHP/mode.php?mode=dark">Dark Mode</a>
            <a href="../../SesionSegura/logout.php" class="icon icon-k">Logout</a>
        </div>
   <div class="contenedor">
        <header>
            <div class="logo">
                <img src="../img/exer.png" alt="Imagen del logo">
            </div>
       
            <nav class="menu">
                <a href="../index.php">Home</a>
                <a href="equipo_entrenamiento.php">Training Equipment</a>
                <a href="dieta.php">Diet</a>
                <a href="articulos.php" target="">Articles</a>
                <a href="contactanos.php">Contact us</a>
            </nav>
        </header>
        <section class="main">
            <article>
                <div class="imagen">
                    <img src="../img/dieta_ejer.jpg" alt="img">
                </div>
                <h2>Diet for a healthy lifestyle</h2>
                <p>It is important to consume the right amount of calories based on individual needs and to focus on the three essential macronutrients: carbohydrates, protein, and healthy fats. Including nutritious foods like fruits, vegetables, lean protein, and whole grains in your daily diet is key. Staying hydrated by drinking enough water and planning meals can help maintain a consistent focus on healthy eating. </p>
       
                <p>It is recommended to seek personalized guidance from a health professional or nutritionist for specific goals.</p>
            </article>
        </section>
        <div class="tabla">
            <table>
                <caption>Foods with their macronutrients and calories</caption>
                <thead>
                    <tr>
                        <th>Macronutrient</th>
                        <th colspan="2">FOOD</th>
                        <th rowspan="2">Caloric value per gram</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Carbohydrates</td>
                        <td>Integral Rice</td>
                        <td>Quinoa</td>
                        <td>4 calories/gram each food</td>
                    </tr>
        
                    <tr>
                        <td>Carbohydrates</td>
                        <td colspan="2">Potatoes</td>
                        <td>1 calories/gram</td>
                    </tr>
        
                    <tr>
                        <td>Carbohydrates</td>
                        <td colspan="2">Whole grains</td>
                        <td>4 calories/gram</td>
                    </tr>
                    <tr>
                        <td>Carbohydrates</td>
                        <td colspan="2">Fruits</td>
                        <td>Varies by fruit</td>
                    </tr>
                    <tr>
                        <td>Proteins</td>
                        <td colspan="2">Chicken</td>
                        <td>4 calories/gram</td>
                    </tr>
                    <tr>
                        <td>Proteins</td>
                        <td colspan="2">Fish</td>
                        <td>4 calories/gram</td>
                    </tr>
                    <tr>
                        <td>Proteins</td>
                        <td colspan="2">Eggs</td>
                        <td>5 calories/gram</td>
                    </tr>
                    <tr>
                        <td>Proteins</td>
                        <td colspan="2">Low-fat dairy products</td>
                        <td>4 calories/gram</td>
                    </tr>
                    <tr>
                        <td>Fats</td>
                        <td colspan="2">Olive oil</td>
                        <td>9 calories/gram</td>
                    </tr>
                    <tr>
                        <td>Fats</td>
                        <td colspan="2">Avocados</td>
                        <td>9 calories/gram</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Comparative Data</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <footer>
            <div class="autor">
                <p>Created by Michael Solis & Andrés Villarreal</p>
            </div>
       
            <div class="redes-sociales">
                <a href="http://www.facebook.com/" target="_blank">Facebook</a>
                <a href="http://www.twitter.com/" target="_blank">Twitter</a>
            </div>
        </footer>
   </div>
</body>
</html>