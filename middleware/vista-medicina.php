<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();



if ($_POST) {
    //DATOS GENERALES
    $id_estudiante = $_POST['id_estudiante'];

    $sql = "SELECT id_historia_medicina, id_estudiante FROM historia_medicina WHERE id_estudiante = $id_estudiante";

    //Peparar la sentencia SQL
    $stmt = $con->prepare($sql);

    //Ejecutar la sentencia SQL
    $stmt->execute();

    //Obtener los resultados de la consulta
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $id_historia_medicina = $resultado[0]['id_historia_medicina'];


    //HISTORIA CLINICA
    $sql4 = "SELECT * FROM exploracion_fisica WHERE id_historia_medicina = $id_historia_medicina";

    //Peparar la sentencia SQL
    $stmt4 = $con->prepare($sql4);

    //Ejecutar la sentencia SQL
    $stmt4->execute();

    //Obtener los resultados de la consulta
    $resultado4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);

    //DIGESTIVO
    $sql5 = "SELECT * FROM digestivo_detalle WHERE id_historia_medicina = $id_historia_medicina";

    //Peparar la sentencia SQL
    $stmt5 = $con->prepare($sql5);

    //Ejecutar la sentencia SQL
    $stmt5->execute();

    //Obtener los resultados de la consulta
    $resultado5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);

    //RESPIRATORIO
    $sql6 = "SELECT * FROM respiratorio_detalle WHERE id_historia_medicina = $id_historia_medicina";

    //Peparar la sentencia SQL
    $stmt6 = $con->prepare($sql6);

    //Ejecutar la sentencia SQL
    $stmt6->execute();

    //Obtener los resultados de la consulta
    $resultado6 = $stmt6->fetchAll(PDO::FETCH_ASSOC);

    //URINARIO
    $sql7 = "SELECT * FROM urinario_detalle WHERE id_historia_medicina = $id_historia_medicina";

    //Peparar la sentencia SQL
    $stmt7 = $con->prepare($sql7);

    //Ejecutar la sentencia SQL
    $stmt7->execute();

    //Obtener los resultados de la consulta
    $resultado7 = $stmt7->fetchAll(PDO::FETCH_ASSOC);


    //GINECOOBSTETRICOS
    $sql8 = "SELECT * FROM ginecoobstetricos WHERE id_historia_medicina = $id_historia_medicina";

    //Peparar la sentencia SQL
    $stmt8 = $con->prepare($sql8);

    //Ejecutar la sentencia SQL
    $stmt8->execute();

    //Obtener los resultados de la consulta
    $resultado8 = $stmt8->fetchAll(PDO::FETCH_ASSOC);

}
