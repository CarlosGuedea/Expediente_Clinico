<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();

try {
    $numero_control = $_SESSION['numero_control'];

    $stmt = $con->prepare("SELECT id_estudiante FROM estudiante WHERE numero_control = $numero_control");
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    // Convertir el resultado a un string
    $resultado_str = strval($resultado['id_estudiante']);
    // Devolver una respuesta de éxito
    http_response_code(200);
} catch (PDOException $ex) {
    // Devolver una respuesta de error
    http_response_code(500);
    echo 'Error al consultar la tabla: ' . $ex->getMessage();
}

if ($_POST) {
    //ANTECEDENTES PERSONALES PATOLOGICOS
    // Obtener los valores seleccionados del select
    $antecedentes_seleccionados = $_POST['id_antecedente_patologico'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO estudiante_antecedente_patologico (id_estudiante, id_antecedente_patologico, create_time, update_time) VALUES (?,?, NOW(), NOW())";

    // Preparar la sentencia
    $stmt = $con->prepare($sql);

    $id_estudiante = $resultado_str;
    // Insertar cada antecedente seleccionado en la base de datos
    foreach ($antecedentes_seleccionados as $antecedente) {
        $id_antecedente_patologico = $antecedente;
        // Ejecutar la consulta preparada con los parámetros
        $stmt->execute([$id_estudiante, $id_antecedente_patologico]);
    }


    //ANTECEDENTES FAMILIARES PATOLOGICOS
    // Obtener los valores seleccionados del select
    $antecedentes_familiares_seleccionados = $_POST['id_antecedente_familiar_patologico'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO estudiante_antecedente_familiar_patologico (id_estudiante, id_antecedente_familiar_patologico, create_time, update_time) VALUES (?,?, NOW(), NOW())";

    // Preparar la sentencia
    $stmt2 = $con->prepare($sql);

    // Insertar cada antecedente seleccionado en la base de datos
    foreach ($antecedentes_familiares_seleccionados as $antecedente2) {
        $id_antecedente_familiar_patologico = $antecedente2;
        // Ejecutar la consulta preparada con los parámetros
        $stmt2->execute([$id_estudiante, $id_antecedente_familiar_patologico]);
    }



    if ($_SESSION['Campo_salud'] === 1) {
        header('Location: /nueva-historia-medicina');
    } else if ($_SESSION['Campo_salud'] === 2) {
        header('Location: /nueva-historia-nutricion');
    } else if ($_SESSION['Campo_salud'] === 3) {
        header('Location: /nueva-historia-psicologia');
    }
}
