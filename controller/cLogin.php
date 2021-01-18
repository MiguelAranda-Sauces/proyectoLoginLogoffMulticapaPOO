<?php

define("OBLIGATORIO", 1); //definimos e inicializamos la constante obligatorio a 1

$entradaOK = true; //declaramos y inicializamos la variable  entradaOk, esta variable decidira si es correcta la entrada de datos de los campos


$aError = [//declaramos y inicializamos el array de los errores de los campos del formulario a null
    "CodUsuario" => null,
    "Password" => null
];
if (isset($_REQUEST["login"])) {
    $aError["usuario"] = validacionFormularios::comprobarAlfabetico($_REQUEST["usuario"], 15, 1, OBLIGATORIO); //Validamos la entrada del formulario para el campo textfieldObligatorio siendo este alfabetico
    $aError['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 1, 1, OBLIGATORIO); //Validamos la entrada del formulario para el campo password siendo este alfabetico de tamaño max 8 minimo 1
//creamos el objeto PDO y lo almacenamos


    $oUsuario = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']); // validamos que el usuario introducido y la contraseÃ±a son correctos

    if (!isset($oUsuario)) {//si no devulve resultado devolvemos un error
        $aError['usuario'] = 'Error de credenciales';
    }
    foreach ($aError as $errores => $value) { //Recorremos todos los campos del array $aError
        if ($value != null) { //Si algun campo de $aError tiene un valor diferente null entonces entra
            $entradaOK = false; // asignamos el valor a false en caso de que entre
        }
    }
} else { // si el usuario no le ha dado al boton de enviar
    $entradaOK = false; // le doy el valor false a $entradaOK
}

if ($entradaOK) { // si la entrada esta bien recojo los valores introducidos y hago su tratamiento
    $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'] = $oUsuario; // guarda en la session el objeto usuario

    header('Location: index.php');
    exit;
}
$vistaEnCurso = $vistas['login']; // asignamos a la variable vistaEnCurso la vista del login
require_once $vistas['layout']; // cargamos el layout
?>