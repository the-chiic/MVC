<?php

    require_once "../controller/controlador.php";

    $objControlador=new Controlador();
    $profesores=$objControlador->mostrarProfesores();

?>

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

                while($fila=$profesores->fetch_assoc()){
                    echo "<h3>".$fila["nombre"]."</h3>";
                    echo "<a href='../procesar.php?idProfesor=".$fila["idProfesor"]."&accion=modificar'>MODIFICAR</a> ";
                    echo "<a href='../procesar.php?idProfesor=".$fila["idProfesor"]."&accion=borrar'>BORRAR</a>";
                    echo "<br/><br/>";
                }
            
            ?>
            <a href="altaProfesores.php">AÑADIR PROFESORES</a>
        </main>
    </body>
</html>