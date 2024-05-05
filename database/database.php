<?php
class Base {
    function ConexionBD(){
        $host = 'localhost';
        $dbname = 'Expediente_TECNM';
        $username = 'root';
        $password = 'Particionar22';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

        try {
            $con = new PDO($dsn, $username, $password);
            // Configura PDO para que lance excepciones en caso de error
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch(PDOException $e) {
            // Manejar el error de conexión de alguna manera apropiada
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    }
}



