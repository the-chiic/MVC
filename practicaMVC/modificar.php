<?php

    require_once "controller/cProfesores.php";

    $objControlador=new CProfesores();
    $profesor=$objControlador->modificarProfesores();

    require_once "views/vModificado.php";

?>