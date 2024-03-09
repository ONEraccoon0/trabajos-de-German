<html>
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
                <li><a class="es" href="1.4.php">Problema</a></li> 
                <li><a href="">Ver Solución</a></li>
            </ul>
            <hr> 
        </header>
    
             <hr>
              <h2>Estaciones del Año</h2>
              <h3>Descripción</h3>
              <p>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las 
                estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar 
                un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha
                en especifico compuesta por un día A y B un mes según lo siguiente:</p>
               <p>*Winter del 21 de diciembre al 20 de marzo <br>
                 *Spring del 21 de marzo al 21 de junio <br>
                 *Summer del 22 de junio al 22 de septiembre <br>
                 *Fall del 23 de septiembre al 20 de diciembre</p>

                 <h3>Resultado:</h3>
        <?php
            $a=31;
            $b=21;

            if($a==21 and $b==20)
            {
                echo "Winter";
            }
            elseif($a==21 and $b==21)
            {
                echo "Spring";
            }
            elseif($a==22 and $b==22)
            {
                echo "Summer";
            }
            elseif($a==23 and $b==20)
            {
                echo "Fall";
            }
            else
            {
                echo "no existe la fecha";
            }            
        ?>
        <hr>
            <h2>¿Cuántos valen 7?</h2>
            <h3>Descripción</h3>
            <p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.</p>
            <h3>Resultado:</h3>
        <?php
            $a=7;
            $b=7;
            $c=0;
            if($a==7)
            {
                $c++;
            }
            if($b==7)
            {
                $c++;
            }
            echo  $c;
        ?>
        <hr>
        <h2>El mayor de tres números</h2>
        <h3>Descripción</h3>
        <p>Realiza un problema que imprima el mayor de tres números.</p>
        <h3>Resultado:</h3>
        <?php
             $a=9;
             $b=7;
             $c=0;
             if($a>=$b)
             {
                echo $a;
             }
             elseif($b>=$c)
             {
                echo $a;
             }
             elseif($c>=$a)
             {
                echo $a;
             }
        ?>
        <br>
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
