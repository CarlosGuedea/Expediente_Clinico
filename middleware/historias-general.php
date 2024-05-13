<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();

try {
    $stmt = $con->prepare("SELECT 
    e.id_estudiante,
    e.numero_control,
    e.nombre,
    c.nombre AS carrera,
    hm.id_historia_medicina,
    hn.id_historia_nutricion,
    hp.id_historia_psicologica
FROM 
    estudiante e
LEFT JOIN 
    historia_medicina hm ON e.id_estudiante = hm.id_estudiante
LEFT JOIN 
    historia_nutricion hn ON e.id_estudiante = hn.id_estudiante
LEFT JOIN 
    historia_psicologica hp ON e.id_estudiante = hp.id_estudiante
LEFT JOIN 
    carrera c ON e.id_carrera = c.id_carrera;");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //FUNCIONES
    //Funión para consultar general
    function consultarGeneral($id_estudiante)
    {
        $db = new Base;
        $con = $db->ConexionBD();

        $sql2 = "SELECT * FROM estudiante WHERE id_estudiante = $id_estudiante";

        $stmt2 = $con->prepare($sql2);

        $stmt2->execute();

        $resultado = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        // Devuelve el resultado
        return $resultado[0]['id_estudiante'];
    }

    //Función para saber si existe un registro de historia medicina
    function consultarMedicina($id_estudiante)
    {
        $db = new Base;
        $con = $db->ConexionBD();

        $sql2 = "SELECT COUNT(*) AS existe_registro FROM historia_medicina WHERE id_estudiante = $id_estudiante";

        $stmt2 = $con->prepare($sql2);

        $stmt2->execute();

        $resultado = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        // Devuelve el resultado
        return $resultado[0]['existe_registro'];
    }


    //Función para saber si existe un registro de historia nutricion
    function consultarNutricion($id_estudiante)
    {
        $db = new Base;
        $con = $db->ConexionBD();

        $sql2 = "SELECT COUNT(*) AS existe_registro FROM historia_nutricion WHERE id_estudiante = $id_estudiante";

        $stmt2 = $con->prepare($sql2);

        $stmt2->execute();

        $resultado = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        // Devuelve el resultado
        return $resultado[0]['existe_registro'];
    }


    //Función para saber si existe un registro de historia psicología
    function consultarPsicologia($id_estudiante)
    {
        $db = new Base;
        $con = $db->ConexionBD();

        $sql2 = "SELECT COUNT(*) AS existe_registro FROM historia_psicologica WHERE id_estudiante = $id_estudiante";

        $stmt2 = $con->prepare($sql2);

        $stmt2->execute();

        $resultado = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        // Devuelve el resultado
        return $resultado[0]['existe_registro'];
    }


    //Función para saber si existe un registro de historia psicología
    function consultarSeguimiento($id_estudiante)
    {
        $db = new Base;
        $con = $db->ConexionBD();

        $sql2 = "SELECT COUNT(*) AS existe_registro FROM resumen_consulta WHERE id_estudiante = $id_estudiante";

        $stmt2 = $con->prepare($sql2);

        $stmt2->execute();

        $resultado = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        // Devuelve el resultado
        return $resultado[0]['existe_registro'];
    }

    // Devolver una respuesta de éxito
    http_response_code(200);
} catch (PDOException $ex) {
    // Devolver una respuesta de error
    http_response_code(500);
    echo 'Error al consultar la tabla: ' . $ex->getMessage();
}
