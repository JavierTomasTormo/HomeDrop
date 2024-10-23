<?php
    require_once("config.php");
    //var_dump(urlsite); #Comprobar URL del sitio
    require_once("controller/modeloController.php");
        if(isset($_GET['m'])):
            if(method_exists("modeloController",$_GET['m'])):
                modeloController::{$_GET['m']}();
            endif;
        else:
            modeloController::index();
        endif;
?>