<html>
    <body>
        <head>
            <title>Tarea 1.5</title>
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
                <li><a class="es" href="1.5.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            
            <hr> 
        </header>


        <h2>MANEJO DE ARREGLOS</h2>
            <h3>-Generar un arreglo de entre 1 y 1000 elementos.
                <br>
                -Cada uno de los elementos representa la calificación de todos los alumnos del CBTis  (va entre 0 y 10).
                <br>
                -Obtener el promedio de todas las calificaciones (2 decimales)
                <br>
                -Obtener la cantidad de alumnos que tienen calificaciones mayores o iguales al promedio.
                <br>
                -Indicar la cantidad y porcentaje de alumnos reprobados.
                <br>
                -Indicar la cantidad y porcentaje de alumnos aprobados.
                <br>
                -Calcular la desviación estándar de todos los números.
                <br>
                -Imprimir todos los números generados en una tabla HTML  de 30 columnas de ancho y los renglones que sean necesarios.        
            </h3>
            <br>
            <?php
                $cali=array();
                $x=rand(1,1000);
                for ($i=1; $i<=$x ; $i++)
                {
                    array_push($cali, rand(0,10));
                }
                $pro=0;
                for($i=0; $i<$x; $i++)
                {
                    $pro=$pro+$cali[$i];
                }
                $pro=$pro/$x;
                echo "el promedio es: ". round($pro,2). "<br>";
                #SACANDO EL PROMEDIO DE LAS CALAFIVICACIONES CON DOS DECIMALES.
                echo "calificaciones iguales o mayores al promedio:". "<br>";
                for($i=0; $i<$x; $i++)
                {
                    if($cali[$i]>=$pro)
                    {
                        echo $cali[$i]. ", ";
                    }
                }
                echo "<br>";
                $apro=0;
                $contuno=0;
                $repro=0;
                $contdos=0;
                for($i=0; $i<$x; $i++)
                {
                    if($cali[$i]<6)
                    {
                        $contdos++;
                        $repro=$repro+$cali[$i];
                    }
                    else
                    {
                        $contuno++;
                        $apro=$apro+$cali[$i];
                    }
                }
                $apro=($apro/$x)*100;
                $repro=($repro/$x)*100;
                echo "Alumnos reprobrados: ". $contdos." Y "."Porcentaje: ".round($repro,2). "<br>";
                echo "Alumnos aprobados: ". $contuno." Y "."Porcentaje: ".round($apro,2). "<br>";
                $sum=0;
                for($i=0; $i<$x; $i++)
                {
                    $sum=$sum+abs(($cali[$i]-$pro)*($cali[$i]-$pro));
                }
                $div=$sum/$x;
                $raiz=sqrt($div);
                echo "desviación estandar: ". round($raiz,2), "<br>";
                echo "<table border='1' cellspacing='3' cellpadign='3';>";
                for($i=0; $i<$x; $i++)
                {
                    if($i%30==0)
                    {
                        echo "<tr>";
                    }
                    else
                    {
                        echo "<th  style='text-align: left;'>". $cali[$i]. "</th>";
                    }
                }
                echo "</tr>";
                echo "</table>";
            ?>
        </div>
<hr>
        

        <span class="fa-solid fa-calendar-days"><i></i></span>
            <span class="fa-brands fa-facebook"><i></i></span>
            <a href="https://www.facebook.com/maytegasca.10?mibextid=JRoKGi">ir a perfil</a>
            <span class="fa-brands fa-discord"><i></i></span>
            <span class="fa-solid fa-clock"><i></i></span>
            <span class="fa-solid fa-database"></span>
        <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    </body>
</html>
