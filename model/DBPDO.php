<?php

//Creamos la clase DBPDO
//Creamos la funciones ejecutarConsulta que es publica y estatica a la cual le pasaermos la sentencia SQL (consulta preparada) y los parametros para esta

class DBPDO {
    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $miDB = new PDO(DNS, USER, PASSWORD); //iniciamos la session con la bd
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //asignamos los atributos de la clase PDO
            $consulta = $miDB->prepare($sentenciaSQL); //preparamos la consulta pasada a la función
            $consulta->execute($parametros); //ejecutamos la consulta
        } catch (PDOException $miExcepcionPDO) {
            echo "<div class = 'contenedorError'>";
            echo "<div class = 'box'>";
            echo "<p class = 'error'>Error " . $miExcepcionPDO->getMessage() . "</p>";
            echo "<p class = 'error'>Cod.Error " . $miExcepcionPDO->getCode() . "</p>";
            echo "<h2 class = 'error'>Error en la conexión con la base de datos</h2>";
            echo "</div>";
            $consulta = null; //destruimos la consulta
            unset($miDB); //cerramos la conxion con la base de datos
        }
        //en caso de que todo sea correcto hace el return del resultado de la consulta
        return $consulta;
    }
}
