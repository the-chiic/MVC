<?php

    require_once "controller/controladorProfesores.php";

    $objControlador= new ControladorProfesores();

    try{
        $profesores=$objControlador->mostrarProfesores();
        require_once "views/vistaListarProfesores.php";
    }catch(mysqli_sql_exception $e){
        //Llamamos a una vista de error
        $mensajeError="ERROR AL RECOGER DATOS DE LOS PROFESORES: ".$e->getMessage();
        require_once "views/vistaError.php";
        exit(); //Para que deje de ejecutarse el codigo
    }

?>