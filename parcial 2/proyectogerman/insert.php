<?php
    $matricula=$apellido=$nombre=$fech_nac=$direccion=$tutor=$correo=$telefono='';
    
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $matricula = $_POST['txtmatric'];
        $apellido = $_POST['txtapellido'];
        $nombre = $_POST['txtname'];
        $fech_nac = $_POST['txtfech'];
        $direccion = $_POST['txtdirec'];
        $tutor = $_POST['txttutor'];
        $correo = $_POST['txtcorreo'];
        $telefono = $_POST['txttel'];

        // Conexión a la base de datos
        $conexion = mysqli_connect('localhost', 'root', '', 'sistema', 3306);

        if (!$conexion) {
            die("Conexión fallida: " . mysqli_connect_error());
        }

        // Consulta para insertar en la tabla alumnos
        $consulta_alumnos = "INSERT INTO alumnos VALUES ($matricula,'$apellido','$nombre','$fech_nac','$direccion','$telefono','$correo','$tutor')"; 

        // Ejecutar la consulta para la tabla alumnos
        $resultado_alumnos = mysqli_query($conexion, $consulta_alumnos);

        // Verificar si la consulta se ejecutó correctamente
        if ($resultado_alumnos) {
            echo '<script>alert("Datos agregados correctamente"); window.location.href = "cuenta.php";</script>';
        } else {
            echo '<script>alert("Error al agregar datos"); window.location.href = "cuenta.php";</script>';
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
    }
?>
