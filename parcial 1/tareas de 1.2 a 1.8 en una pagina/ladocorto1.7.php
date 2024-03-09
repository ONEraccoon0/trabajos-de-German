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
                <li><a class="es" href="ladocorto1.7.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            
            <hr> 
        </header>

        <div class="descripcion">
            <h2>7093. El lado más corto</h2>

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
                    <p>Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, 
                        calcule la longitud de su lado más corto.
                    </p>
                    <img src="lado mas corto.png" alt="lado corto">
                    <h3>Entrada</h3>
                    <p>
                        Ocho reales <i>x1,y1,x2,y2,x3,y3,x4,y4</i>. Puedes suponer que 0< x1,y1 < 100
                        y que los vértices se listan ordenados en el sentido de las manecillas del reloj.
                    </p>
                    <h3>Salida</h3>
                    <p>
                        Un real que sea la longitud del lado más corto del cuadrilátero. 
                        Tu programa se considerará correcto si el valor calculado es razonablemente 
                        cercano a la respuesta exacta
                    </p>
                    <h3>Ejemplo</h3>

                <table border="1" class="ejemplo">
                    <tr>
                        <td >10.1 10.2 <br>
                            20.2 10.3 <br>
                            22.3 4.1 <br>
                            7.5 0.9
                        </td>
                        <td>6.545991</td>
                    </tr>
                </table>

                <form action="ladocorto1.7.php" method="post" style="text-align: center;">
                    <div>
                        numero 1:
                        <input type="text" name="txtnum11"> <br>
                        numero 2:
                        <input type="text" name="txtnum22"> <br>
                        numero 3:
                        <input type="text" name="txtnum33"> <br>
                        numero 4:
                        <input type="text" name="txtnum4"> <br>
                        numero 5:
                        <input type="text" name="txtnum5"> <br>
                        numero 6:
                        <input type="text" name="txtnum6"> <br>
                        numero 7:
                        <input type="text" name="txtnum7"> <br>
                        numero 8:
                        <input type="text" name="txtnum8"> <br>
                        <input type="submit" value="Enviar"> <br>
                    </div>
                </form>
                    <h3>Resultado</h3>
                    <?php
                        if($_POST)
                        {
                        $x1=$_POST["txtnum11"];
                        $y1=$_POST["txtnum22"];
                        $x2=$_POST["txtnum33"];
                        $y2=$_POST["txtnum4"];
                        $x3=$_POST["txtnum5"];
                        $y3=$_POST["txtnum6"];
                        $x4=$_POST["txtnum7"];
                        $y4=$_POST["txtnum8"];
        
                        $c=sqrt(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
                        $d=sqrt(($x3-$x2)*($x3-$x2)+($y3-$y2)*($y3-$y2));
                        $f=sqrt(($x4-$x3)*($x4-$x3)+($y4-$y3)*($y4-$y3));
                        $g=sqrt(pow($x1-$x4,2)+pow($y1-$y4,2));
                        if($c<$d and $c<$f and $c<$g)
                        {
                            echo round($c,6);
                        }
                        else if($d<$f and $d<$g)
                        {
                            echo round($d,6);
                        }
                        else if($f<$g)
                        {
                            echo round($f,6);
                        }
                        else
                        {
                            echo round($g,6);
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
