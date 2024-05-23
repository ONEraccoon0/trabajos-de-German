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
                        <h1><a href="inicio.html">omega<span>Up</span></a></h1>
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
                <li><a class="es" href="letras1.8.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            
            <hr> 
        </header>

        <div class="descripcion">
            <h2>17663. Practicando Funciones</h2>

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
                        Dados tres números enteros <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>,</mo><mi>y</mi><mo>,</mo><mi>z</mi></math>
                        ,calcula el valor de h(x,y,z), si las funciones<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>f</mi><mo>,</mo><mi>g</mi></math>
                        y están definidas así:
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mi>f</mi>
                            <mo stretchy="false">(</mo>
                            <mi>a</mi>
                            <mo stretchy="false">)</mo>
                            <mo>=</mo>
                            <mn>4</mn>
                            <msup>
                                <mi>a</mi>
                                <mn>3</mn>
                            </msup>
                            <mo>+</mo>
                            <mi>g</mi>
                            <mo stretchy="false">(</mo>
                            <mn>2</mn>
                            <mi>a</mi>
                            <mo>,</mo>
                            <mo>&#x2212;</mo>
                            <mn>3</mn>
                            <mi>a</mi>
                            <mo stretchy="false">)</mo>
                            <mo>,</mo>
                        </math>
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mi>g</mi>
                            <mo stretchy="false">(</mo>
                            <mi>b</mi>
                            <mo>,</mo>
                            <mi>c</mi>
                            <mo stretchy="false">)</mo>
                            <mo>=</mo>
                            <mo stretchy="false">(</mo>
                            <mn>7</mn>
                            <mi>b</mi>
                            <mo>&#x2212;</mo>
                            <mn>3</mn>
                            <mo stretchy="false">)</mo>
                            <mspace width="1em"></mspace>
                            <mi>mod</mi>
                            <mstyle scriptlevel="0">
                                <mspace width="thinmathspace"></mspace>
                            </mstyle>
                            <mstyle scriptlevel="0">
                                <mspace width="thinmathspace"></mspace>
                            </mstyle>
                            <mo stretchy="false">(</mo>
                            <msup>
                                <mi>c</mi>
                                <mn>2</mn>
                            </msup>
                            <mo>+</mo>
                            <mn>1</mn>
                            <mo stretchy="false">)</mo>
                            <mo>,</mo>
                        </math>
                        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                            <mi>h</mi>
                            <mo stretchy="false">(</mo>
                            <mi>x</mi>
                            <mo>,</mo>
                            <mi>y</mi>
                            <mo>,</mo>
                            <mi>z</mi>
                            <mo stretchy="false">)</mo>
                            <mo>=</mo>
                            <mi>f</mi>
                            <mrow data-mjx-texclass="INNER">
                                <mo data-mjx-texclass="OPEN">(</mo>
                                <mfrac>
                                <mi>x</mi>
                                <mi>y</mi>
                                </mfrac>
                                <mo data-mjx-texclass="CLOSE">)</mo>
                            </mrow>
                            <mo>+</mo>
                            <mn>3</mn>
                            <mstyle scriptlevel="0">
                                <mspace width="thickmathspace"></mspace>
                            </mstyle>
                            <mi>g</mi>
                            <mrow data-mjx-texclass="INNER">
                                <mo data-mjx-texclass="OPEN">(</mo>
                                <mfrac>
                                <mi>z</mi>
                                <mi>y</mi>
                                </mfrac>
                                <mo>,</mo>
                                <mi>x</mi>
                                <mo data-mjx-texclass="CLOSE">)</mo>
                            </mrow>
                            <mo>.</mo>
                        </math>
                    </p>
                    <p>
                        Usa enteros para realizar los cálculos, y  mod
                        es la operación residuo de la división (también llamada módulo). 
                        Los resultados de las operaciones deben coincidir con aquellos del lenguaje C.
                    </p>

                    <h3>Entrada</h3>
                    <p>
                        Tres números enteros <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>,</mo><mi>y</mi><mo>,</mo><mi>z</mi></math>, 
                        separados por un espacio. Puedes suponer que 1< x,y,z < 100
                        y que no se producirán divisiones entre cero
                    </p>
                    <h3>Salida</h3>
                    <p>
                    El entero obtenido de evaluar h(x,y,z).
                    </p>
                    <h3>Ejemplo</h3>

                <table class="ejemplo" >
                    <tr>
                        <td>-10 -4 18</td>
                        <td>-36</td>
                    </tr>
                </table>

                <form action="tarea2.1.php" method="post">
                    <label for="campo1">Entrada</label>
                    <input type="text" name="txtnum1"> <br>
                    <input type="submit" value="Enviar"> <br>
                </form>

                    <h3>Resultado:</h3>
                    <?php
                       if($_POST)
                       {
                           $input = $_POST["txtnum1"];
                           $nums = explode(" ", $input);
                           
                           function f ($a, $b)
                           {
                               $f = (4*pow((int)$a, 3)) + g(2*(int)$a, -3*(int)$a);
                               return $f;
                           }
                           
                           function g ($a, $b)
                           {
                               $g = (7 * (float)$b - 3) % (($a * $a) + 1);
                               return $g;
                           }
                       
                           function h ($nums)
                           {
                               $x = $nums[0];
                               $y = $nums[1];
                               $z = $nums[2];
                               $h = ($x / $y) + (3 * g($z / $y, $x));
                               return $h;
                           }
                       
                           $resul = h($nums);
                       
                           echo $resul;
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
