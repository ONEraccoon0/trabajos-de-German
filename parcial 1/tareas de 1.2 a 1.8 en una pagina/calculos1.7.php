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
                <li><a class="es" href="calculos1.7.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            
            <hr> 
        </header>

        <div class="descripcion">
            <h2>7050. Cálculos condicionales</h2>

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
                    <p>Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta 
                        trabajo decidir en qué situaciones se deben hacer qué operaciones. Un compañero te 
                        sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial 
                        <i>N</i>, realizar las siguientes operaciones en el orden indicado y con aritmética entera:
                    </p>
                    <p>
                        Si el valor actual de <i>N</i> es par, divídelo entre 2. En caso contrario, súmale 1.
                        Si el valor actual de <i>N</i> tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.
                        Si el valor actual de <i>N</i> es un múltiplo de tres, réstale uno.
                    </p>
                    <p>
                        Escribe un programa que te ayude a calcular el valor final de <i>N</i>
                         y el número de veces que <i>N</i>fue modificado.
                    </p>
                    <h3>Entrada</h3>
                    <p>
                        Un entero <i>N</i>. Puedes suponer que . 1< N < 1000.
                    </p>
                    <h3>Salida</h3>
                    <p>
                        Dos enteros que correspondan con el valor final de <i>N</i>
                        y el número de veces que <i>N</i> fue modificado respectivamente.
                    </p>
                    <h3>Ejemplo</h3>

                <table class="ejemplo" >
                    <tr>
                        <td>7</td>
                        <td>8 1</td>
                    </tr>
                </table>

                <form action="calculos1.7.php" method="post">
                    <label for="campo1">Numero 1:</label>
                    <input type="text" name="txtnum1"> <br>
                    <input type="submit" value="Enviar"> <br>
                </form>

                    <h3>Resultado:</h3>
                    <?php
                           if($_POST)
                           {
                               $n=$_POST["txtnum1"];
                               $c=0;
                               if ($n%2==0)
                               {
                                   $n/=2;
                                   $c++;    
                               }
                               else
                               {
                                   $n+=1;
                                   $c++;
                               }
           
                               if($n%3==0)
                               {
                                   $n-=1;
                                   $c++;
                               }
                               echo $n . " " . $c;
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
