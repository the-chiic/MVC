<?php

    require_once "../controller/controlador.php";

    $idProfesor=$_GET["id"];

    $objControlador=new Controlador();
    $profesor=$objControlador->eliminarProfesor($idProfesor);

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Borrar Profesor</title>
    </head>
    <body>
        <main>
            <?php

                if($profesor){
                    echo   "<h3>BORRADO</h3>
                            <h3><a href='../views/vistaListarProfesores.php'>VOLVER</a></h3>";
                }

            ?>
        </main>
    </body>
</html>