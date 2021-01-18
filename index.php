<?php

require_once 'config/config.php';// para poder cargar la vista tenemos que importar el archivo de config

session_start();

require_once 'config/configDB.php';


//si la session esta iniciada entonces cargara inicio si no, cargara login
if (isset($_SESSION["usuarioDAW2LoginLogoffMulticapaPOO"])){
    require_once $controladores["inicio"];
} else {
    require_once $controladores["login"];
}
?>