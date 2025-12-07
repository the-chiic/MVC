<?php

    require_once "controller/controladorProfesores.php";

    $nombre=isset($_POST["nombreProfesor"]) ? $_POST["nombreProfesor"] : null;

    $objControlador=new ControladorProfesores();

    $objControlador->añadirProfesor($nombre);

?>