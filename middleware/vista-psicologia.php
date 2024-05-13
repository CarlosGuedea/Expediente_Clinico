<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();



if ($_POST) {

    $id_estudiante = $_POST['id_estudiante'];

    //DATOS GENERALES
    $id_estudiante = $_POST['id_estudiante'];

    $sql = "SELECT id_historia_psicologica, id_estudiante FROM historia_psicologica WHERE id_estudiante = $id_estudiante";

    //Peparar la sentencia SQL
    $stmt = $con->prepare($sql);

    //Ejecutar la sentencia SQL
    $stmt->execute();

    //Obtener los resultados de la consulta
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $id_historia_psicologica = $resultado[0]['id_historia_psicologica'];


    //FAMILIOGRAMA
    // Preparar la sentencia SQL
    $sql2="SELECT * FROM familia WHERE id_historia_psicologica = $id_historia_psicologica";

    $stmt2 = $con->prepare($sql2);

    //Ejecutar la consulta
    $stmt2->execute();

    //Obtener los resultados de la consulta
    $resultado2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);


    //HISTORIA PSICOLOGICA
    $sql4 = "SELECT * FROM historia_psicologica WHERE id_estudiante = $id_estudiante";

    //Peparar la sentencia SQL
    $stmt4 = $con->prepare($sql4);

    //Ejecutar la sentencia SQL
    $stmt4->execute();

    //Obtener los resultados de la consulta
    $resultado4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);


}
