<?php

    require_once "controller/cProfesores.php";

    $objControlador=new CProfesores();
    $profesor=$objControlador->cargarProfesores();

    require_once "views/vModificar.php";

?>