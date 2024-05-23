<?php
// Inicia la sesión
session_start();

// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'sistema', 3306);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];

    // Consulta para eliminar el alumno
    $consulta_eliminar = "DELETE FROM alumnos WHERE matricula='$matricula'";

    if (mysqli_query($conexion, $consulta_eliminar)) {
        // Redirigir a la sección de "Modificar y eliminar alumnos"
        header("Location: cuenta.php?section=security&matricula=$matricula");
        exit();
    } else {
        echo "Error eliminando al alumno: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
