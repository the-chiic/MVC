<?php

    require_once "controller/controladorProfesores.php";

    $nombre=isset($_POST["nombreProfesor"]) ? $_POST["nombreProfesor"] : null;

    $objControlador=new ControladorProfesores();
    $profesor=$objControlador->añadirProfesor($nombre);

    if($profesor && $nombre){
        header("Location: listarProfesores.php");
        exit();
    }

    require_once "views/vistaAltaProfesores.php";
    exit();

?>