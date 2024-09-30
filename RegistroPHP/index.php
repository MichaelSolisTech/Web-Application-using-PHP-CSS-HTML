<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro con Base de Datos</title>
    <style>
        a {
            color: white;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="../login.css">  
</head>
<body>

  <div class="login">
    <h1>Registro</h1>

    <form action="registro.php" method="post" name="formulario">
      <input type="text" name="usuario" id="usuario" placeholder="Usuario"><br><br>
      <input type="password" name="clave" id="clave" placeholder="Contraseña"><br><br>
      <input name="botonGuardar" type="submit" id="enviar" value="Registrar">
      <a href="../login.php" style="color:white;">Logearse</a>
    </form>
  </div>

</body>
</html>
