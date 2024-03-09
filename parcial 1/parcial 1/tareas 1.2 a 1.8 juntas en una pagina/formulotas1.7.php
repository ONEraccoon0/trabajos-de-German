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
                <li><a class="es" href="formulotas1.7.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            
            <hr> 
        </header>

        <div class="descripcion">
            <h2>18710. Formulota</h2>

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
                    <p>Diseñar un programa que pregunte los valores de las
                        variables x,y,z y evalue la función f(x,y,z).
                    </p>
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                        <mi>f</mi>
                        <mo stretchy="false">(</mo>
                        <mi>x</mi>
                        <mo>,</mo>
                        <mi>y</mi>
                        <mo>,</mo>
                        <mi>z</mi>
                        <mo stretchy="false">)</mo>
                        <mo>=</mo>
                        <mfrac>
                            <mrow>
                            <mfrac>
                                <mrow>
                                <mi>x</mi>
                                <mo>+</mo>
                                <mi>y</mi>
                                </mrow>
                                <mrow>
                                <mn>2</mn>
                                <mi>x</mi>
                                </mrow>
                            </mfrac>
                            <mo>+</mo>
                            <mfrac>
                                <mrow>
                                <msup>
                                    <mi>x</mi>
                                    <mn>3</mn>
                                </msup>
                                <mo>+</mo>
                                <msup>
                                    <mi>y</mi>
                                    <mn>3</mn>
                                </msup>
                                </mrow>
                                <mrow>
                                <msup>
                                    <mi>x</mi>
                                    <mn>2</mn>
                                </msup>
                                <mo>+</mo>
                                <msup>
                                    <mi>y</mi>
                                    <mn>2</mn>
                                </msup>
                                </mrow>
                            </mfrac>
                            </mrow>
                            <mrow>
                            <msup>
                                <mi>x</mi>
                                <mn>2</mn>
                            </msup>
                            <mo>+</mo>
                            <msup>
                                <mi>y</mi>
                                <mn>2</mn>
                            </msup>
                            <mo>+</mo>
                            <msup>
                                <mi>z</mi>
                                <mn>2</mn>
                            </msup>
                            </mrow>
                        </mfrac>
                        </math>

                    <h3>Entrada</h3>
                    <p>
                        El programa pedirá tres números, uno por renglón, estos podrán ser positivos, 
                        negativos o cero, y pudieran tener decimales.
                    </p>
                    <h3>Salida</h3>
                    <p>
                       La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.
                       <br>
                       Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida
                    </p>
                    <h3>Ejemplo</h3>

                <table border="1" class="ejemplo">
                    <tr>
                        <td colspan="2">1 <br>2 <br>3</td>
                        <td>0.235714</td>
                        <td>0.235714285714286</td>
                    </tr>
                    <tr>
                        <td  colspan="2">4 <br>5 <br>6</td>
                        <td >0.074477</td>
                        <td>0.0744773519163764</td>
                    </tr>
                    <tr>
                        <td>7 <br>8 <br>9</td>
                        <td>0.044525</td>
                        <td>0.0445247435713634</td>
                    </tr>
                </table>

                <form action="formulotas1.7.php" method="post">
                    <label for="campo1">Numero 1:</label>
                    <input type="text" name="txtnum1"> <br>
                    <label for="campo1">Numero 2:</label>
                    <input type="text" name="txtnum2"> <br>
                    <label for="campo1">Numero 3:</label>
                    <input type="text" name="txtnum3"> <br>
                    <input type="submit" value="Enviar"> <br>
                </form>

                    <h3>Resultado:</h3>
                    <?php
                          if($_POST)
                          {
                            $x=$_POST["txtnum1"];
                            $y=$_POST["txtnum2"];
                            $z=$_POST["txtnum3"];
              
                            $f1=($x+$y)/(2*$x);
                            $f2=(pow($x,3)+pow($y,3))/(($x*$x)+($y*$y));
                            $f3=($x*$x)+($y*$y)+($z*$z);
                            $ft=($f1+$f2)/($f3);
                            echo round($ft,6);
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
