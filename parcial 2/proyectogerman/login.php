<?php
session_start();

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $login = $_POST['txtlogin'];
    $pass = $_POST['txtpaswod'];

    // Conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'sistema', 3306);

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Consulta SQL para verificar las credenciales del usuario
    $consulta = "SELECT * FROM usuarios WHERE login='$login' AND password=SHA1('$pass')"; 

    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        // Las credenciales son correctas, iniciar sesión y redirigir al perfil del usuario
        $row = mysqli_fetch_assoc($resultado); // Recuperar los datos del usuario
        $_SESSION['login'] = $login; // Almacenar el login en la sesión si lo necesitas
        $_SESSION['usuario'] = $row; // Almacenar los datos del usuario en la sesión
        header("Location: cuenta.php"); // Redirigir a la página de configuración
        exit(); // Detener lai ejecución del script
    } else {
        // Las credenciales son incorrectas, mostrar mensaje de error con JavaScript
        echo '<script>alert("Correo electrónico o contraseña incorrectos"); window.location.href = "login.html";</script>';
        exit(); // Detener la ejecución del script
    }

    mysqli_close($conexion);
}
?>

