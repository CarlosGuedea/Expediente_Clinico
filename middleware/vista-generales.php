<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();



if ($_POST) {
    //DATOS GENERALES
    $id_estudiante = $_POST['id_estudiante'];

    // Preparar la consulta SQL para buscar los datos
    $sql = "SELECT * FROM estudiante WHERE id_estudiante = $id_estudiante";

    // Preparar la sentencia SQL
    $stmt = $con->prepare($sql);

    //Ejecutar la consulta
    $stmt->execute();

    //Obtener los resultados de la consulta
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //ANTECEDENTES PERSONALES PATOLOGICOS
    //Variable de id_estudiante para el siguiente proceso
    $id_estudiante = $resultado[0]['id_estudiante'];

    $sql2 = "SELECT * FROM estudiante_antecedente_patologico WHERE id_estudiante = $id_estudiante";

    //Prreparar la sentencia SQL para obtener el resultado
    $stmt2 = $con->prepare($sql2);

    //Ejecutar la instruccion
    $stmt2->execute();

    //Obtener los resultados de la consulta
    $resultado2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);




    //ANTECEDENTES FAMILIARES PATOLOGICOS
    $sql3 = "SELECT * FROM estudiante_antecedente_familiar_patologico WHERE id_estudiante = $id_estudiante";

    //Preparar la sentencia SQL
    $stmt3 = $con->prepare($sql3);

    //Ejecutar la sentencia SQL
    $stmt3->execute();

    //Obtener los resultados de la consulta
    $resultado3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
}
