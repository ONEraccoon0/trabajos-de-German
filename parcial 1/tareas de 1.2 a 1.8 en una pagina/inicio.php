<!DOCTYPE html>
<html lang="es"> 
<body>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
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
    </header>

            <div class="imagen"> 
                <img src="cbtis217.png" alt="cbtis">
                <img class="dgeti" src="dgeti.png" alt="dgeti">
            </div>
            <div class="contenedor">
                <input type="checkbox" id="menu" style="display: none;">
                <label for="menu" class="toggle-menu">Tarea 1.2</label>
                <ul class="menu">
                    <li><a href="1.2.php">12618. Practicando con formulas</a></li>
                </ul>
            </div>
            <br>
            <div class="contenedor">
                <input type="checkbox" id="men" style="display: none;">
                <label for="men" class="toggle-menu">Tarea 1.3</label>
                <ul class="men">
                    <li><a href="1.3.php">5630. Colegiatura</a></li>
                </ul>
            </div>
            <br>
            <div class="contenedor">
                <input type="checkbox" id="menu1-4" style="display: none;">
                <label for="menu1-4" class="toggle-menu">Tarea 1.4</label>
                <ul class="menu1-4">
                    <li><a href="1.4.php">3 problemas</a></li>
                </ul>
            </div>
            <br>
            <div class="contenedor">
                <input type="checkbox" id="menu1-5" style="display: none;">
                <label for="menu1-5" class="toggle-menu">Tarea 1.5</label>
                <ul class="menu1-5">
                    <li><a href="1.5.php"problemas>Manejo de arreglos</a></li>
                </ul>
            </div>
            <br>
            <div class="contenedor">
                <input type="checkbox" id="menu1-6" style="display: none;">
                <label for="menu1-6" class="toggle-menu">Tarea 1.6</label>
                <ul class="menu1-6">
                    <li><a href="1.6.php"problemas>2765. Sumando dos conjuntos</a></li>
                </ul>
            </div>
            <br>
            <div class="contenedor">
                <input type="checkbox" id="menu1-7" style="display: none;">
                <label for="menu1-7" class="toggle-menu">Tarea 1.7</label>
                <ul class="menu1-7">
                    <li><a href="formulotas1.7.php"problemas>18710. Formulota</a></li>
                    <li><a href="ladocorto1.7.php"problemas>7093. El lado más corto</a></li>
                    <li><a href="escalera1.7.php"problemas>11338. Escalera de asteriscos </a></li>
                    <li><a href="calculos1.7.php"problemas>7050. Cálculos condicionales</a></li>
                </ul>
            </div>
            <br>
            <div class="contenedor">
                <input type="checkbox" id="menu1-8" style="display: none;">
                <label for="menu1-8" class="toggle-menu">Tarea 1.8</label>
                <ul class="menu1-8">
                    <li><a href="bit1.8.php"problemas>4352. Bit de paridad</a></li>
                    <li><a href="autores1.8.php"problemas>4886. Autores</a></li>
                    <li><a href="letras1.8.php"problemas>3991. Adquisición de Letras</a></li>
                </ul>
            </div>
    </body>
</html>
