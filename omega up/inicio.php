<!DOCTYPE html>
<html lang="es"> 
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
                    <li><a href="1.4.php">3 problemas</a></li>
                    <li><a href="1.5.php">p</a></li>
                </ul>
            </div>
    </header>

                <div class="imagen"> 
                    <img src="cbtis217.png" alt="cbtis">
                    <img class="dgeti" src="dgeti.png" alt="dgeti">
                </div>
                <div class="contenedor">
    <input type="checkbox" id="menu" style="display: none;">
    <label for="menu" class="toggle-menu">1.2</label>
    <ul class="menu">
        <li><a href="1.2.php">12618. Practicando con formulas</a></li>

    </ul>
  </div>
  <br>
  <div class="contenedor">
    <input type="checkbox" id="men" style="display: none;">
    <label for="men" class="toggle-menu">1.3</label>
    <ul class="men">
        <li><a href="1.3.php">5630. Colegiatura</a></li>

    </ul>
    </div>
    <br>
    <div class="contenedor">
    <input type="checkbox" id="menu1-4" style="display: none;">
    <label for="menu1-4" class="toggle-menu">1.4</label>
    <ul class="menu1-4">
        <li><a href="1.4.php">3 problemas</a></li>

    </ul>
    
    </div>

    </body>
</html>
