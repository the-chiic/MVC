<?php

    require_once "controller/controladorProfesores.php";

    $idProfesor=empty($_GET["id"]) ? $_POST["id"] : $_GET["id"];
    $nombreNuevo=isset($_POST["nombreProfesorNuevo"]) ? $_POST["nombreProfesorNuevo"] : null;

    $objControlador=new ControladorProfesores();
    $profesor=$objControlador->modificarProfesores($idProfesor, $nombreNuevo);

    if($profesor && $nombreNuevo){
        header("Location: listarProfesores.php");
        exit();
    }

    require_once "views/vistaModificar.php";
    exit();

?>