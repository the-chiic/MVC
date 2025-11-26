<?php

    require_once "../controller/controlador.php";

    $objControlador=new Controlador();

    $profesor=false;
    if(isset($_GET["nombreProfesor"]) && !empty($_GET["nombreProfesor"])){
        $nombre=$_GET["nombreProfesor"];
        $profesor=$objControlador->añadirProfesor($nombre);
    }

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Añadir Profesor</title>
    </head>
    <body>
        <main>
            <?php
                if($profesor==false){
                    echo   "<form action='altaProfesores.php' method='GET'>
                                <label>Nombre Profesor:</label>
                                <input type='text' name='nombreProfesor'>

                                <input type='submit' value='Enviar'>
                            </form>
                            <h3><a href='../views/vistaListarProfesores.php'>VOLVER</a></h3>";
                }else{
                    echo "<h3>AÑADIDO</h3>";
                    echo "<h3><a href='../views/vistaListarProfesores.php'>VOLVER</a></h3>";
                }
            ?>
        </main>
    </body>
</html>