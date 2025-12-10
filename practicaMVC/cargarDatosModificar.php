<?php

    require_once "controller/controladorProfesores.php";

    $objControlador=new ControladorProfesores();
    $profesor=$objControlador->cargarProfesores();

    require_once "views/vistaModificar.php";

?>