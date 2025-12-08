<?php

    require_once "controller/controladorProfesores.php";

    $idProfesor=empty($_GET["id"]) ? $_POST["id"] : $_GET["id"];
    $nombreNuevo=isset($_POST["nombreProfesorNuevo"]) ? $_POST["nombreProfesorNuevo"] : null;

    $objControlador=new ControladorProfesores();

    try{
        $resultado=$objControlador->modificarProfesores($idProfesor, $nombreNuevo);

        if(!$nombreNuevo){
            $profesor=$resultado;
            require_once "views/vistaModificar.php";
            exit();
        }
        header("Location: listarProfesores.php");
    }catch(mysqli_sql_exception $e){
        $mensajeError="ERROR AL MODIFICAR PROFESORES: ".$e->getMessage();
        require_once "views/vistaError.php";
        exit(); //Para que deje de ejecutarse el codigo
    }

?>