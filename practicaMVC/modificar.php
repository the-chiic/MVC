<?php

    require_once "controller/controladorProfesores.php";

    $idProfesor=$_GET["id"];
    $nombre=isset($_GET["nombreProfesorNuevo"]) ? $_GET["nombreProfesorNuevo"] : null;

    $objControlador=new ControladorProfesores();

    $profesor=$objControlador->modificarProfesores($idProfesor, $nombre);

    require_once "views/".$objControlador->vista;

?>