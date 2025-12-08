<?php

    require_once "controller/controladorProfesores.php";

    $idProfesor=$_GET["id"];

    $objControlador=new ControladorProfesores();

    try{
        $objControlador->eliminarProfesor($idProfesor);
        require_once "views/vistaBorrar.php";
    }catch(mysqli_sql_exception $e){
        $mensajeError="ERROR AL BORRAR PROFESORES: ".$e->getMessage();
        require_once "views/vistaError.php";
        exit(); //Para que deje de ejecutarse el codigo
    }

?>