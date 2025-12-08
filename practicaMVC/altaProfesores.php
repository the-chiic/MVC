<?php

    require_once "controller/controladorProfesores.php";

    $nombre=isset($_POST["nombreProfesor"]) ? $_POST["nombreProfesor"] : null;

    $objControlador=new ControladorProfesores();

    try{
        $resultado=$objControlador->añadirProfesor($nombre);

        if(!$nombre){
            require_once "views/vistaAltaProfesores.php";
            exit();
        }
        header("Location: listarProfesores.php");
    }catch(mysqli_sql_exception $e){
        $mensajeError="ERROR AL INSERTAR PROFESORES: ".$e->getMessage();
        require_once "views/vistaError.php";
        exit(); //Para que deje de ejecutarse el codigo
    }

?>