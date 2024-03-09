<html>
    <body>
        <head>
            <title>Problema-omegaup</title>
            <link rel="stylesheet" href="style.css">
            <style>
                .dropdown 
                {
                    display: none;
                }
                .dropdown:target 
                {
                    display: block;
                }
            </style>
        </head>

        <header>
            <div class="parte-arriba">
                <div class="espacio logo">

                    <div class="logo-omega">
                        <h1><a href="inicio.php">omega<span>Up</span></a></h1>
                    </div>

                    <ul class="menu1">
                        <li><a href="#">Concursos</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#dropdown">Problemas</a></li>
                        <li><a href="#">Ranking</a></li>
                        <li><a href="#">Ayuda</a></li>
                    </ul>

                    <div class="incio-registro">
                        <span class="text">Iniciar sesión/</span>
                        <span class="number">Registrarse</span>
                    </div>
                </div>
            </div>

            <div id="dropdown" class="dropdown">
                <ul>
                    <li><a href="">Problema 1</a></li>
                    <li><a href="1.2.php">12618. Practicando con formulas</a></li>
                    <li><a href="1.3.php">5630. Colegiatura</a></li>
                    <li><a href="1.4.php">3 Problemas</a></li>
                    <li><a href="1.5.php">Manejos de arreglos</a></li>
                    <li><a href="1.6.php">2765. Sumando dos conjuntos</a></li>
                    <li><a href="formulotas1.7.php">18710. Formulota</a></li>
                    <li><a href="ladocorto1.7.php">7093. El lado más corto</a></li>
                    <li><a href="escalera1.7.php">11338. Escalera de asteriscos </a></li>
                    <li><a href="calculos1.7.php">7050. Cálculos condicionales</a></li>
                    <li><a href="bit1.8.php">4352. Bit de paridad</a></li>
                    <li><a href="autores1.8.php">4886. Autores</a></li>
                    <li><a href="letras1.8.php">3991. Adquisición de Letras</a></li>
                </ul>
            </div>

            <ul id="menu2">
                <li><a class="es" href="autores1.8.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            
            <hr> 
        </header>

        <div class="descripcion">
            <h2>4886. Autores</h2>

            <table border="1" cellspacing="1"  class="puntos">
                    <tr>
                        <td rowspan="2" colspan="1" class="titulo">puntos</td>
                        <td rowspan="2" colspan="1" class="titulo">10.71</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="titulo">Límite de memoria</td>
                        <td colspan="1">32 MiB</td>
                    </tr>
                    <tr>
                        <td rowspan="2" colspan="1" class="titulo">Límite de tiempo (caso)</td>
                        <td rowspan="2" colspan="1">1s</td>
                    </tr>
                    <tr>
                        <td>Límite de tiempo (total)</td>
                        <td>1m0s</td>
                    </tr>
                    <tr>
                        <td colspan="1">Tamaño límite de entrada (bytes)</td>
                        <td>10 KiB</td>
                    </tr>
            </table>

                    <h3>Descripción</h3>
                    <p>
                       Encontramos que la mezcla de dos convenciones en un papel 
                       es estéticamente desagradable y quisiera que usted escribiera 
                       un programa que transformara variaciones largas en cortas
                    </p>
 
                    <h3>Entrada</h3>
                    <p>
                        La primera y única línea de entrada contendrá como máximo 100 caracteres, 
                        letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45). 
                        El primer carácter siempre será una letra mayúscula. Los guiones siempre serán 
                        seguidos por una letra mayúscula. Todos los demás caracteres serán letras minúsculas.
                    </p>
                    <h3>Salida</h3>
                    <p>
                        La primera y única línea de salida debe contener la variación corta apropiada.
                    </p>
                    <h3>Ejemplo</h3>

                <table class="ejemplo" >
                    <tr>
                        <td>Knuth-Morris-Pratt</td>
                        <td>KMP</td>
                    </tr>
                    <tr>
                        <td>Mirko-Slavko</td>
                        <td>MS</td>
                    </tr>
                    <tr>
                        <td>Pasko-Patak</td>
                        <td>PP</td>
                    </tr>
                </table>

                <form action="autores1.8.php" method="post">
                    <label for="campo1">Numero 1:</label>
                    <input type="text" name="txtnum1"> <br>
                    <input type="submit" value="Enviar"> <br>
                </form>

                    <h3>Resultado:</h3>
                    <?php
                        if($_POST)
                        { 
                            $aut=$_POST['txtnum1'];
                            $a=array();
                            $b=strlen($aut);
                            for($i=0;$i<$b;$i++)
                            {
                                if(ord($aut[$i])>=65 and ord($aut[$i])<=90)
                                {
                                    echo $aut[$i];
                                }
                            }
                        }
                    ?>
        </div>
<hr>
        <form action="">
            <table class="from" cellspacing="2" cellpadding="4">
                <tr>
                  <td class="titulo">omegaUp ephemeral graderα</td>
                  <td></td>
                  <td colspan="2" c="text-align: right;">
                  <input type="submit" class="botton" value="Run"></td>
                </tr>
                <tr>
                  <td colspan="2" c="text-align: center;">
                  <textarea name="" id="" cols="100" rows="30" class="texto"></textarea>
                  </td>
                </tr>
            </table>
        </form>

        <span class="fa-solid fa-calendar-days"><i></i></span>
            <span class="fa-brands fa-facebook"><i></i></span>
            <a href="https://www.facebook.com/maytegasca.10?mibextid=JRoKGi">ir a perfil</a>
            <span class="fa-brands fa-discord"><i></i></span>
            <span class="fa-solid fa-clock"><i></i></span>
            <span class="fa-solid fa-database"></span>
        <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    </body>
</html>
