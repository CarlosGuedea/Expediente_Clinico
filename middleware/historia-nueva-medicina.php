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


if($_POST){

    //Recuperar id_estudiante
    $id_estudiante = $resultado_str;

    // Preparar la consulta SQL para insertar datos en la tabla historia_medicina
    $sql = "INSERT INTO historia_medicina (id_estudiante, fecha, create_time, update_time) VALUES (:id_estudiante, :fecha, NOW(), NOW())";

    // Preparar la sentencia SQL
    $stmt = $con->prepare($sql);

    // Vincular los parámetros de la consulta
    $stmt->bindParam(':id_estudiante', $id_estudiante, PDO::PARAM_INT);
    $stmt->bindParam(':fecha', $_POST['fecha'], PDO::PARAM_STR);

    //Ejecutar la consulta
    $stmt->execute();

    //Redirigir a la siguiente página
    header('Location: /nueva-historia-clinicos');
}

