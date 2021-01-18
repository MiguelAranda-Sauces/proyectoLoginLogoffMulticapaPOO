<?php

require_once "core/libreriaValidacion.php"; //importamos el archivo de libreria de validacion

//importortamos los modelos
require_once "model/Usuario.php";
require_once "model/UsuarioPDO.php";
require_once "model/DBPDO.php";


//creamos el objeto controladores y le asignamos las rutas
$controladores = [
    "login" => "controller/cLogin.php",
    "inicio" => "controller/cInicio.php"
];

//creamos el objeto vistas y le asignamos las rutas
$vistas = [
    "layout" => "view/layout.php",
    "login" => "view/vLogin.php",
    "inicio" => "view/vInicio.php"
];
?>