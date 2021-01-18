<!-- Generamos El contenido de la pagina de login en html-->
<div id="cabecera">
    <div id="titulo">
        <h1>Login</h1>
    </div>
    <div class="nav">
        <a href="../../proyectoDWES/indexProyectoDWES.html" class="boton volver"><img class="icoBoton" src="webroot/media/img/volver-flecha-izquierda.png"><span class="texto">Volver</span></a>
    </div>
</div>
<div id="contenedor"> 
    <div id="form">
        <form class="descript" action= "<?php echo $_SERVER["PHP_SELF"]
?>" method= "POST">
            <div class="campos">
                <label class="labelTitle" for="usuario">Usuario: </label>
                <input  class="inputText" type="text" name="usuario" placeholder="Introduzca el nombre del usuario">
            </div>
            <div class="campos">
                <label class="labelTitle" for="password">Password: </label>
                <input  class="inputText" type="password" name="password">
                <?php echo isset($aError["password"]) || isset($aError["usuario"]) ? "<span class='error'>" . "<br>Error de credenciales</span>" : null ?>

            </div>
            <div class="botonSend">
                <input class="botonEnvio" type="submit" value="Entrar" name="login">
               <!--<a class="botonEnvio" href="codigoPHP/registro.php">Registro</a>-->
            </div>
        </form>

    </div>
</div>
