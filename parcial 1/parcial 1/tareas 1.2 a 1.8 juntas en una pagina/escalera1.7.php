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
                    <li><a href="1.8.php"></a></li>
                </ul>
            </div>

            <ul id="menu2">
                <li><a class="es" href="escalera1.7.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            
            <hr> 
        </header>

        <div class="descripcion">
            <h2>11338. Escalera de asteriscos</h2>

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
                    <p>Inés quiere llegar a su casa, pero accidentalmente, 
                        los arquitectos construyeron la puerta demasiado alta. 
                        Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura <i>N</i>
                        hecha de asteriscos.
                    </p>
                    <h3>Entrada</h3>
                    <p>
                        Se te darán como valor de entrada un numero entero <i>N</i>
                        el cuál representa la longitud y altura de la escalera.
                    </p>
                    <h3>Salida</h3>
                    <p>
                    Deberás imprimir como salida una escalera de dimensiones <i>N</i>
                    de largo y <i>N</i>de alto
                    </p>
                    <h3>Ejemplo</h3>

                <table border="1" class="ejemplo">
                    <tr>
                        <td colspan="3">2</td>
                        <td># <br>
                            ##
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">5</td>
                        <td># <br>
                            ## <br>
                            ### <br>
                            #### <br>
                            #####
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">1</td>
                        <td>#</td>
                    </tr>
                    <tr>
                        <td colspan="3">3</td>
                        <td># <br>
                            ## <br>
                            ### 
                        </td>
                    </tr>
                </table>
                <form  action="escalera1.7.php" method="post" style="text-align: center;">
                    <h2>Calcula:</h2>
                    numero:
                    <input type="text" name="txtnum"> <br>
                    <input type="submit" value="Enviar"> <br>
                </form>
                    <h3>Resultado</h3>
                    <?php
                        if($_POST)
                        {
                            $x=$_POST["txtnum"];
                            for($i=1; $i<=$x; $i++)
                            {
                                echo str_repeat("#",$i) . "<br>";
                            }
                        }
                    ?>
        </div>
<hr>
        <form action="">
            <table cellspacing="2" cellpadding="4">
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
