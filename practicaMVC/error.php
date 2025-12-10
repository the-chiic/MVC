<?php

    $mensajeError=isset($_GET["mensaje"]) ? $_GET["mensaje"] : null;
    require_once "views/vError.php";

?>