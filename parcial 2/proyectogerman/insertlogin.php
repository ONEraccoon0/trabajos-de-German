<?php
session_start();

if ($_POST) { 
    $nombre = $_POST['txtname'];
    $password = $_POST['txtpass'];
    $login = $_POST['txtlogin'];

    // Conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'sistema', 3306);

    // Consulta para verificar si el usuario ya existe en la tabla usuarios
    $consulta_existencia = "SELECT * FROM usuarios WHERE login = '$login'";
    $resultado_existencia = mysqli_query($conexion, $consulta_existencia);

    // Verificar si el usuario ya existe
    if (mysqli_num_rows($resultado_existencia) > 0) {
        echo '<script>alert("Cuenta ya existente, cambie de usuario o inicie sesión"); window.location.href = "login.html";</script>';
    } else {
        // Consulta para insertar en la tabla usuarios
        $consulta_usuarios = "INSERT INTO usuarios (idUsuario, login, password, nombre) VALUES (null, '$login', SHA1('$password'), '$nombre')";

        // Ejecutar la consulta para la tabla usuarios
        $resultado_usuarios = mysqli_query($conexion, $consulta_usuarios);

        // Verificar si la consulta se ejecutó correctamente
        if ($resultado_usuarios) {
            // Recuperar los datos del usuario recién creado
            $consulta_usuario = "SELECT * FROM usuarios WHERE login = '$login'";
            $resultado_usuario = mysqli_query($conexion, $consulta_usuario);
            $usuario = mysqli_fetch_assoc($resultado_usuario);

            // Almacenar los datos del usuario en la sesión
            $_SESSION['login'] = $login;
            $_SESSION['usuario'] = $usuario;

            echo '<script>alert("Datos agregados correctamente"); window.location.href = "cuenta.php";</script>';
        } else {
            echo '<script>alert("Error al agregar datos"); window.location.href = "registro.html";</script>';
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>
