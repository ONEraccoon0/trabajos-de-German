<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Cuenta Seleccionada</title>
        <style>
            body 
            {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }
            .account-container 
            {
                border: 2px solid #333;
                padding: 20px;
                width: 300px;
                margin: 20px auto;
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            .account-container img 
            {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                margin-bottom: 20px;
            }
            .account-container h2 
            {
                color: #444;
                margin-bottom: 20px;
            }
            .account-container p 
            {
                font-size: 16px;
                color: #555;
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <?php
            if ($_POST) 
            {
                $login = $_POST['txtlogin'];
                $pass = $_POST['txtpaswod'];

                $conexion = mysqli_connect('localhost', 'root', '', 'sistema', '3306');

                if (!$conexion) 
                {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                $consulta = "SELECT * FROM usuarios WHERE login='$login' AND password=SHA1('$pass')";
                $resultado = mysqli_query($conexion, $consulta);

                if (mysqli_num_rows($resultado) > 0) 
                {
                    while ($mostrar = mysqli_fetch_assoc($resultado)) {
                        $userImage = "luffy2.jpg";

                        echo "<div class='account-container'>";
                        echo "<img src='" . htmlspecialchars($userImage) . "' alt='User Image'>";
                        echo "<h2>Cuenta Seleccionada</h2>";
                        echo "<p><strong>Login:</strong> " . htmlspecialchars($mostrar['login']) . "</p>";
                        echo "<p><strong>Password (sha1):</strong> " . htmlspecialchars($mostrar['password']) . "</p>";
                        echo "</div>";
                    }
                } 
                else 
                {
                    echo "<script>alert('Usuario o contraseña incorrectos.'); window.location.href = 'login.html';</script>";
                }

                mysqli_close($conexion);
            }
        ?>

    </body>
</html>
