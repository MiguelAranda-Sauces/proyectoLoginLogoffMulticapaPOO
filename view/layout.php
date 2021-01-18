<!DOCTYPE html>
<!-- Generamos El cuerpo del html-->
<html>
    <head>
        <title>Proyecto Login Logoff Multicapa POO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="webroot/css/style_1.css">
        <?php
     
        if ($vistaEnCurso == 'view/vInicio.php') {
            echo '<link rel = "stylesheet" type = "text/css" href = "webroot/css/stylePrograma.css">';
        } else {
            echo '<link rel = "stylesheet" type = "text/css" href = "webroot/css/styleLogin.css">';
        }
        ?>

    </head>
    <body>
        <?php require_once $vistaEnCurso
        ?>
        <footer>
            <div class="pie">
                <a href="../../index.html" class="nombre">Miguel Ángel Aranda García</a>
                <a href="https://github.com/MiguelAranda-Sauces" class="git" ><img class="git" src="webroot/media/img/git.png"></a>
            </div>

        </footer>
    </body>
</html>