<?php
// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'sistema', 3306);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $apellidos = $_POST['apellidos'];
    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tutor = $_POST['tutor'];

    // Consulta para actualizar el alumno
    $consulta_actualizar = "UPDATE alumnos SET apellidos='$apellidos', nombre='$nombre', fecha_nacimiento='$fecha_nacimiento', direccion='$direccion', telefono='$telefono', correo='$correo', tutor='$tutor' WHERE matricula='$matricula'";

    if (mysqli_query($conexion, $consulta_actualizar)) {
        echo "Alumno actualizado exitosamente";
    } else {
        echo "Error actualizando al alumno: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Redirigir de nuevo a la página principal
header("Location: cuenta.php");
exit();
?>
