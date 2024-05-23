<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión y si la variable de sesión $_SESSION['usuario'] está definida
if(isset($_SESSION['usuario'])) 
{
    // Accede a los datos del usuario desde la variable de sesión
    $usuario = $_SESSION['usuario'];
    
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f0f2f3, #bbd3ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .settings-container {
            display: flex;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1200px;
            width: 100%;
        }
        .sidebar {
            width: 300px;
            background: #f4f4f4;
            padding: 20px;
            box-sizing: border-box;
        }
        .sidebar img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: block;
            margin: 0 auto 10px;
        }
        .sidebar h3 {
            text-align: center;
            margin: 0 0 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            margin-bottom: 15px;
        }
        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background: #70a0e9;
            color: #fff;
        }
        .content {
            flex: 1;
            padding: 40px;
            box-sizing: border-box;
            overflow-x: auto;
        }
        .content h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #99bef7;
            outline: none;
        }
        .form-group textarea {
            height: 100px;
            resize: none;
        }
        .buttons {
            display: flex;
            justify-content: flex-start;
            gap: 10px;
        }
        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #b4d1fd;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }
        .buttons button:hover {
            background: #1a58d6;
        }
        .buttons .cancel-btn {
            background: #ccc;
            color: #333;
        }
        .buttons .cancel-btn:hover {
            background: #aaa;
        }
        .content-section {
            display: none;
        }
        .content-section.active {
            display: block;
        }
        .table-container {
            overflow-x: hidden;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 5px;
        }

        th {
            background-color: #f2f2f2;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #ddd;
        }

        .form-inline {
            display: flex;
            flex-wrap: wrap;
        }

        .form-inline input[type="text"],
        .form-inline input[type="date"],
        .form-inline input[type="email"],
        .form-inline input[type="tel"] {
            border: 1px solid #ccc;
            border-radius: 9px;
            flex: 1;
        }

        .form-inline button {
            border: none;
            border-radius: 3px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            padding: 5px 10px;
        }

        .form-inline button:hover {
            background-color: #45a049;
        }

        .delete-btn {
            background-color: #f44336;
        }

        .delete-btn:hover {
            background-color: #e53935;
        }

    </style>
</head>
<body>
    <div class="settings-container">
        <div class="sidebar">
            <h3>Administrador</h3>
            <img src="https://via.placeholder.com/80" alt="Profile Picture">
            <h3><?php echo $_SESSION['usuario']['login']; ?></h3>
            <ul>
                <li><a href="#" data-section="perfil" class="active">Perfil</a></li>
                <li><a href="#" data-section="account">Ingresar datos</a></li>
                <li><a href="cuenta.php?section=security" data-section="security">Modificar y eliminar alumnos</a></li>
                <li><a href="#" data-section="password">Contraseña</a></li>
                <li><a href="#" data-section="application">Aplicaciones</a></li>
                <li><a href="#" data-section="notification">Notificaciones</a></li>
            </ul>
        </div>

        <div class="content">
            <div id="perfil" class="content-section active">
                <h2>Perfil</h2>
                <div class="form-group">
                    <label class="form-label"><i class="fa-regular fa-user"></i> Username</label>
                    <input type="text" class="form-control mb-1" value="<?php echo $_SESSION['usuario']['login']; ?>">
                </div>
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['usuario']['nombre']; ?>">
                </div>
                <div class="buttons">
                    <button type="submit">Actualizar</button>
                    <button type="button" class="cancel-btn">Cancelar</button>
                </div>
            </div>

            <div id="account" class="content-section ">
                <h2>Datos Personales</h2>
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-id-badge input-icon"></i> Matrícula</label>
                        <input type="text" name="txtmatric" class="form-control" placeholder="Matrícula" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-user input-icon"></i>  Apellidos</label>
                        <input type="text" name="txtapellido" class="form-control" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label"> <i class="fas fa-user input-icon"></i> Nombre</label>
                        <input type="text" name="txtname" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-calendar-alt input-icon"></i> Fecha de nacimiento</label>
                        <input type="date" name="txtfech" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-home input-icon"></i> Dirección</label>
                        <input type="text" name="txtdirec" class="form-control" placeholder="Dirección" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label"> <i class="fas fa-user-tie input-icon"></i> Tutor</label>
                        <input type="text" name="txttutor" class="form-control" placeholder="Tutor" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-phone input-icon"></i> Teléfono</label>
                        <input type="text" name="txttel" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Formato: 123-456-7890">
                    </div>
                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-envelope input-icon"></i> Correo</label>
                        <input type="email" name="txtcorreo" class="form-control" placeholder="Correo">
                    </div>
                    <div class="buttons">
                        <button type="submit">Guardar</button>
                        <button type="button" class="cancel-btn">cancelar</button>
                    </div>
                </form>
            </div>
            
            <div id="password" class="content-section">
                <h2>Ajustes de contraseña</h2>
                <form>
                    <div class="form-group">
                        <label for="current-password">Contraseña anterior</label>
                        <input type="password" id="current-password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="new-password">Contraseña nueva</label>
                        <input type="password" id="new-password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirma contraseña</label>
                        <input type="password" id="confirm-password" class="form-control">
                    </div>
                    <div class="buttons">
                        <button type="submit">Update</button>
                        <button type="button" class="cancel-btn">Cancel</button>
                    </div>
                </form>
            </div>
            
            <div id="security" class="content-section">
                <h2>Alumnos Agregados</h2>
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">Matricula</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha De nacimiento</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Padre/Tutor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Conexión a la base de datos
                        $conexion = mysqli_connect('localhost', 'root', '', 'sistema', 3306);

                        // Verificar la conexión
                        if (!$conexion) {
                            die("Conexión fallida: " . mysqli_connect_error());
                        }

                        // Consulta para seleccionar todos los alumnos
                        $consulta_alumnos = "SELECT * FROM alumnos";
                        $resultado_alumnos = mysqli_query($conexion, $consulta_alumnos);

                        // Verificar si se encontraron alumnos
                        if (mysqli_num_rows($resultado_alumnos) > 0) {
                            // Iterar sobre cada alumno y mostrarlo en la tabla
                            while ($fila = mysqli_fetch_assoc($resultado_alumnos)) {
                                echo "<tr>";
                                echo "<form class='form-inline' action='update.php' method='post'>";
                                echo "<td><input type='text' name='matricula' value='" . $fila['matricula'] . "' readonly></td>";
                                echo "<td><input type='text' name='apellidos' value='" . $fila['apellidos'] . "'></td>";
                                echo "<td><input type='text' name='nombre' value='" . $fila['nombre'] . "'></td>";
                                echo "<td><input type='date' name='fecha_nacimiento' value='" . $fila['fecha_nacimiento'] . "'></td>";
                                echo "<td><input type='text' name='direccion' value='" . $fila['direccion'] . "'></td>";
                                echo "<td><input type='tel' name='telefono' value='" . $fila['telefono'] . "'></td>";
                                echo "<td><input type='email' name='correo' value='" . $fila['correo'] . "'></td>";
                                echo "<td><input type='text' name='tutor' value='" . $fila['tutor'] . "'></td>";
                                echo "<td><button action='update.php' type='submit'>Actualizar</button></td>";
                                echo "</form>";
                                echo "<td><form action='delete.php' method='post' onsubmit='return confirm(\"¿Estás seguro de que quieres eliminar este alumno?\");'>";
                                echo "<input type='hidden' name='matricula' value='" . $fila['matricula'] . "'>";
                                echo "<button type='submit' class='delete-btn'>Eliminar</button>";
                                echo "</form></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9'>No se encontraron alumnos</td></tr>";
                        }

                        // Cerrar la conexión a la base de datos
                        mysqli_close($conexion);
                        ?>
                    </tbody>
                </table>
            </div>

            <div id="application" class="content-section">
                <h2>Redes Sociales</h2>
                <div class="form-group">
                    <label class="form-label">Twitter</label>
                    <input type="text" class="form-control" value="https://twitter.com/user">
                </div>
                <div class="form-group">
                    <label class="form-label">Facebook</label>
                    <input type="text" class="form-control" value="https://www.facebook.com/user">
                </div>
                <div class="form-group">
                    <label class="form-label">Google+</label>
                    <input type="text" class="form-control" value>
                </div>
                <div class="form-group">
                    <label class="form-label">LinkedIn</label>
                    <input type="text" class="form-control" value>
                </div>
                <div class="form-group">
                    <label class="form-label">Instagram</label>
                    <input type="text" class="form-control" value="https://www.instagram.com/user">
                </div>
            </div>
            <div id="notification" class="content-section">
                <h2>Notificaciones</h2>
            </div>
        </div>
    </div>

    <script>
    document.querySelectorAll('.sidebar ul li a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.sidebar ul li a.active').classList.remove('active');
            this.classList.add('active');
            const section = this.getAttribute('data-section');
            document.querySelector('.content-section.active').classList.remove('active');
            document.getElementById(section).classList.add('active');
        });
    });

    // Función para manejar la redirección a la sección "Modificar y eliminar alumnos"
    function handleRedirection() 
    {
        const urlParams = new URLSearchParams(window.location.search);
        const section = urlParams.get('section');
        if (section) 
        {
            document.querySelector('.sidebar ul li a.active').classList.remove('active');
            const activeLink = document.querySelector(`.sidebar ul li a[data-section="${section}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
            document.querySelector('.content-section.active').classList.remove('active');
            const activeSection = document.getElementById(section);
            if (activeSection) {
                activeSection.classList.add('active');
            }
        }
    }

    // Llamar a la función cuando se carga la página
    window.onload = handleRedirection;
</script>


</body>
</html>
<?php
} else {
    // Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
    header("Location: login.html");
    exit();
}
?>