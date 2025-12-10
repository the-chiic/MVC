<?php

    require_once "controller/controladorProfesores.php";

    $objControlador=new ControladorProfesores();
    $profesor=$objControlador->modificarProfesores();

    require_once "views/vistaModificado.php";

?>