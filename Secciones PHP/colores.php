<?php
    session_start();

    // header("Location: ../Espanol/index.php");
    // exit();
    
    // Verificar si no existe la variable colorfondo en la sesión y se le asigna el valor 0.
    if (!isset($_SESSION['colorfondo'])) {
        $_SESSION['colorfondo'] = 0;
    }
    
    // Verificar si no existe la variable colortexto en la sesión y se le asigna el valor 0.
    if (!isset($_SESSION['colortexto'])) {
        $_SESSION['colortexto'] = 0;
    }
    
    // Verificar si se ha presionado el botón "enviar"
    if (isset($_REQUEST['enviar'])) {
        if (isset($_REQUEST['Opcolorfondo'])) {
            $colorBG = traducirColor($_REQUEST['Opcolorfondo']);
            $_SESSION['colorfondo'] = $colorBG;
        }
        
        if (isset($_REQUEST['Opcolortxt'])) {
            $colorTxt = traducirColor($_REQUEST['Opcolortxt']);
            $_SESSION['colortexto'] = $colorTxt;
        }
    }
    
    echo "<html>\n<head>\n<title>Eleccion de colores</title>\n</head>";
    echo "<body style='background-color: ".$_SESSION['colorfondo']."; color: ".$_SESSION['colortexto']."'>";
    
    function traducirColor($color) {
        switch ($color) {
            case "rojo":
                return "red";
            case "verde":
                return "green";
            case "azul":
                return "blue";
            case "cian":
                return "cyan";
            case "amarillo":
                return "yellow";
            case "gris":
                return "grey";
        }
    }
?>

<html>
<body>
<h2>Personaliza los colores</h2>
<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <p>Color de fondo:
        <select name="Opcolorfondo">
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
            <option value="cian">Cian</option>
            <option value="amarillo">Amarillo</option>
            <option value="gris">Gris</option>
        </select>
    </p>
    <hr>

    <p>Color de texto:
        <select name="Opcolortxt">
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
            <option value="cian">Cian</option>
            <option value="amarillo">Amarillo</option>
            <option value="gris">Gris</option>
        </select>
    </p>
   <p><input type="submit" name="enviar"></p>
