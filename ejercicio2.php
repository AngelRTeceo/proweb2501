<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<style>
    div {
        border: 2px solid black; 
    }
</style>
<body>
    
    <div>
        Encabezado
    </div>

    <div>
            <ul>
                <li><a href="ejercicio2.php?opcion=proweb">Proweb</a></li>
                <li><a href="ejercicio2.php?opcion=bases">Base de datos</a></li>
            </ul>
    </div>

    <div>
        <?php
        if (isset($_REQUEST['opcion'])) {

            if ($_REQUEST['opcion']=="proweb"){
                include "materias/proweb.html";
            }

            if ($_REQUEST['opcion']=="bases"){
                include "materias/bases.html";
            }
        }
        ?>

        <h3><a href="index.html">Regresar</a></h3>
    </div>

    <div>
        Pie de pagina
    </div>


</body>
</html>