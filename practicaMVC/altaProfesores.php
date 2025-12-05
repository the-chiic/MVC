<?php

    require_once "controller/controladorProfesores.php";

    $nombre=isset($_GET["nombreProfesor"]) ? $_GET["nombreProfesor"] : null;

    $objControlador=new ControladorProfesores();

    $objControlador->añadirProfesor($nombre);

    require_once "views/".$objControlador->vista;

?>