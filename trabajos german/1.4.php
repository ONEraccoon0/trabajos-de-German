<html>
    <body>
        <h1>Problemas de Omegaup</h1>
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
        <h1>El mayor de tres números</h1>
        <h3>Descripción</h3>
        <p>Realiza un problema que imprima el mayor de tres números.</p>
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

    </body>
</html>
