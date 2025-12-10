<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Listar Profesores</title>
    </head>
    <body>
        <main>
            <?php

                foreach($profesores as $profesor){
                    echo "<h3>".$profesor["nombre"]."</h3>";
                    echo "<a href='cargarDatosModificar.php?id=".$profesor["idProfesor"]."'>MODIFICAR</a> ";
                    echo "<a href='borrar.php?id=".$profesor["idProfesor"]."'>BORRAR</a>";
                    echo "<br/><br/>";
                }
            
            ?>
            <a href="views/vAltaProfesores.php">AÑADIR PROFESORES</a>
        </main>
    </body>
</html>