<?php

    require_once "../controller/controlador.php";

    $idProfesor=$_GET["id"];

    $objControlador=new Controlador();

    $profesor=false;
    if(isset($_GET["nombreProfesorNuevo"]) && !empty($_GET["nombreProfesorNuevo"]) && trim($_GET["nombreProfesorNuevo"])){
        $nombre=$_GET["nombreProfesorNuevo"];
        $profesor=$objControlador->modificarProfesores($idProfesor, $nombre);
    }

    $filaProfesorAntiguo=$objControlador->seleccionarProfesor($idProfesor);
    $profesorAntiguo=$filaProfesorAntiguo->fetch_assoc();

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Modificar Profesor</title>
    </head>
    <body>
        <main>
            <?php
                if($profesor==false){
                    echo   "<form action='modificar.php' method='GET'>
                                <label>Profesor Antiguo:</label>
                                <input type='text' value='".$profesorAntiguo["nombre"]."' readonly>
                                <br/><br/>
                                <label>Nombre Profesor Nuevo:</label>
                                <input type='text' name='nombreProfesorNuevo'>
                                <input type='hidden' name='id' value=".$idProfesor.">

                                <input type='submit' value='Enviar'>
                            </form>
                            <h3><a href='../views/vistaListarProfesores.php'>VOLVER</a></h3>";
                }else{
                    echo "<h3>MODIFICADO</h3>";
                    echo "<h3><a href='../views/vistaListarProfesores.php'>VOLVER</a></h3>";
                }
            ?>
        </main>
    </body>
</html>