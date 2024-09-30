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
    <title>Página Dieta</title>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dieta.css">
    <link rel="stylesheet" href="../css/tablas.css">
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
            <div class="logo">
                <img src="../img/exer.png" alt="Imagen del logo">
            </div>
       
            <nav class="menu">
                <a href="../index.php">Inicio</a>
                <a href="equipo_entrenamiento.php">Equipos de entrenamiento</a>
                <a href="dieta.php">Dieta</a>
                <a href="articulos.php" target="">Artículos</a>
                <a href="contactanos.php">Contáctanos</a>
            </nav>
        </header>
        <section class="main">
            <article>
                <div class="imagen">
                    <img src="../img/dieta_ejer.jpg" alt="img">
                </div>
                <h2>Dieta para un estilo de vida saludable</h2>
                <p>Es importante consumir la cantidad adecuada de calorías según las necesidades individuales y enfocarse en los tres macronutrientes esenciales: carbohidratos, proteínas y grasas saludables. Incluir alimentos nutritivos como frutas, verduras, proteínas magras y granos enteros en la dieta diaria es clave. Mantenerse hidratado(a) bebiendo suficiente agua y planificar las comidas puede ayudar a mantener un enfoque constante en la alimentación saludable. </p>
       
                <p>Se recomienda buscar la guía personalizada de un profesional de la salud o un nutricionista para objetivos específicos.</p>
            </article>
        </section>
        <div class="tabla">
            <table>
                <caption>Alimentos con sus macronutrientes y calorías</caption>
                <thead>
                    <tr>
                        <th>MACRONUTRIENTE</th>
                        <th colspan="2">ALIMENTO</th>
                        <th rowspan="2">Valor calórico por gramo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Carbohidratos</td>
                        <td>Arroz Integral</td>
                        <td>Quinoa</td>
                        <td>4 calorías/gramo cada alimento</td>
                    </tr>
        
                    <tr>
                        <td>Carbohidratos</td>
                        <td colspan="2">Patatas</td>
                        <td>1 calorías/gramo</td>
                    </tr>
        
                    <tr>
                        <td>Carbohidratos</td>
                        <td colspan="2">Cereales integrales</td>
                        <td>4 calorías/gramo</td>
                    </tr>
                    <tr>
                        <td>Carbohidratos</td>
                        <td colspan="2">Frutas</td>
                        <td>Varía según la fruta</td>
                    </tr>
                    <tr>
                        <td>Proteínas</td>
                        <td colspan="2">Pollo</td>
                        <td>4 calorías/gramo</td>
                    </tr>
                    <tr>
                        <td>Proteínas</td>
                        <td colspan="2">Pescado</td>
                        <td>4 calorías/gramo</td>
                    </tr>
                    <tr>
                        <td>Proteínas</td>
                        <td colspan="2">Huevos</td>
                        <td>5 calorías/gramo</td>
                    </tr>
                    <tr>
                        <td>Proteínas</td>
                        <td colspan="2">Productos lácteos bajos en grasa</td>
                        <td>4 calorías/gramo</td>
                    </tr>
                    <tr>
                        <td>Grasas</td>
                        <td colspan="2">Aceite de oliva</td>
                        <td>9 calorías/gramo</td>
                    </tr>
                    <tr>
                        <td>Grasas</td>
                        <td colspan="2">Aguacates</td>
                        <td>9 calorías/gramo</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Datos comparativos</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <footer>
            <div class="autor">
                <p>Creado por Michael Solis & Andrés Villarreal</p>
            </div>
       
            <div class="redes-sociales">
                <a href="http://www.facebook.com/" target="_blank">Facebook</a>
                <a href="http://www.twitter.com/" target="_blank">Twitter</a>
            </div>
        </footer>
   </div>
</body>
</html>