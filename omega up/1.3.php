<!DOCTYPE html>
<html lang="en">
   <body>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li><a href="1.4.php">p</a></li>
                </ul>
            </div>

            <ul id="menu2">
                <li><a class="es" href="1.3.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            <hr> 
        </header>

     <h2>5630. Colegiatura</h2>

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
     La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero
     le preocupa cuanto vaya a pagar, <br> y te pide ayuda para que hagas un programa que le diga
     cuanto tenga que pagar. <br> El esquema que maneja la prepa es este: <br> Plan de pagos.
     </p>
        <p>
        *La colegiatura de los alumnos se determina según el numero <br> de materias que cursan. 
         El costo de cada una de las materias es de $1600. <br>
        *Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo
         siguiente: <br>  si el promedio obtenido por un alumno en el ultimo periodo es mayor
         o igual que 9, se le hará un <br>  descuento del 30% sobre la colegiatura y no se le cobrara
         IVA; si el promedio obtenido es menor que 9 <br>  deberá pagar la colegiatura completa, mas el IVA del 16%.
        </p>
    <h3>Entrada</h3>
    <p>
    El numero de materias A que Esteban va a cursar. Y un numero con decimales B que es el promedio de Esteban.
    </p>
    <h3>Salida</h3>
    <p>
    Un numero entero C con el precio a pagar. Debe de ir con un $.
    </p>
    <h3>Ejemplo</h3>

    <table border="1" class="ejemplo">
        <tr>
            <td colspan="4">5 <br> 9.6</td>
            <td>$5600</td>
        </tr>
        <tr>
            <td colspan="4">8 <br> 7.8</td>
            <td>$14848</td>
        </tr>
        <tr>
            <td colspan="4">2 <br> 8</td>
            <td>$3712</td>
        </tr>
    </table>

    <h3>Resultados</h3>
    <?php
                $a=5;
                $b=9.6;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", "$",$e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
                $a=8;
                $b=7.8;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", $e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
                $a=2;
                $b=8;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", $e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
            ?>
</body>
</html>