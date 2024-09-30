<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css"> 
    <style>
        a {
            color: white;
            text-decoration: none;
        }
    </style> 
</head>
<body>

  <div class="login">
    <h1>Login</h1>

    <?php
        if(isset($_SESSION['mensaje'])){
            echo "<p style='color: white;'>{$_SESSION['mensaje']}</p>";
            unset($_SESSION['mensaje']); // eliminar el mensaje de la sesión una vez mostrado
        }
    ?>

    <form name="login" method="post" action="login.php">        
        <?php
        // Verifica si los datos del formulario han sido enviados
        if (isset($_POST['usuario']) && isset($_POST['clave'])) {
            // Recuperar los datos del formulario
            $username = $_POST['usuario'];
            $password = $_POST['clave'];

            // Crear la conexión a la base de datos
            $conn = new mysqli('localhost', 'root', '', 'Registros');

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query SQL para buscar el usuario
            $sql = "SELECT * FROM usuarios WHERE usuario = ?";

            // Preparar la sentencia
            $stmt = $conn->prepare($sql);

            // Vincular los parámetros
            $stmt->bind_param("s", $username);

            // Ejecutar la sentencia
            $stmt->execute();

            // Obtener los resultados
            $result = $stmt->get_result();

            // Verificar si se encontró el usuario
            if ($result->num_rows > 0) {
                // Obtener los datos del usuario
                $user = $result->fetch_assoc();

                // Verificar la contraseña
                if ($password === $user['password']) {
                    // Iniciar la sesión
                    $_SESSION['usuario'] = $username;

                    // Redirigir al usuario a la página de inicio
                    header('Location: espanol/index.php');
                } else {
                    echo "Contraseña incorrecta";
                }
            } else {
                echo "Usuario no encontrado";
            }

            // Cerrar la sentencia y la conexión
            $stmt->close();
            $conn->close();
        }
        ?>
      <input name="usuario" type="text" id="usuario" placeholder="Usuario">
      <input name="clave" type="password" id="clave" placeholder="Contraseña">
      <input name="enviar" type="submit" id="enviar" value="Enviar">
      <a href="RegistroPHP/index.php" style="color: white;">Registrarse</a>

    </form>
  </div>

</body>
</html>
