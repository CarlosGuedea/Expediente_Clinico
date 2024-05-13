<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();



if ($_POST) {
    //DATOS GENERALES
    $id_estudiante = $_POST['id_estudiante'];

    // Preparar la consulta SQL para buscar los datos
    $sql = "SELECT 
    CONCAT('Nutricion-', hm.id_historia_nutricion) AS id_tipo_historia,
            e.*
        FROM 
            estudiante e
        INNER JOIN 
            historia_nutricion hm ON e.id_estudiante = hm.id_estudiante
        INNER JOIN 
            carrera c ON e.id_carrera = c.id_carrera
        WHERE 
            hm.id_estudiante = $id_estudiante";

    // Preparar la sentencia SQL
    $stmt = $con->prepare($sql);

    //Ejecutar la consulta
    $stmt->execute();

    //Obtener los resultados de la consulta
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //HISTORIA NUTRICIONAL
    $sql4 = "SELECT * FROM historia_nutricion WHERE id_estudiante = $id_estudiante";

    //Peparar la sentencia SQL
    $stmt4 = $con->prepare($sql4);

    //Ejecutar la sentencia SQL
    $stmt4->execute();

    //Obtener los resultados de la consulta
    $resultado4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);


}
