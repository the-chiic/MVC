<?php

    require_once "controller/controladorProfesores.php";

    $idProfesor=empty($_GET["id"]) ? $_POST["id"] : $_GET["id"];
    $nombre=isset($_POST["nombreProfesorNuevo"]) ? $_POST["nombreProfesorNuevo"] : null;

    $objControlador=new ControladorProfesores();

    $profesor=$objControlador->modificarProfesores($idProfesor, $nombre);

?>