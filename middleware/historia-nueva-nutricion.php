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
    // Recibir y limpiar los datos del formulario
    $id_estudiante = $resultado_str;
    $fecha = $_POST["fecha"];
    $realiza_ejercicio = $_POST["realiza_ejercicio"];
    $id_lugar_ejercicio = $_POST["id_lugar_ejercicio"];
    $id_tiempo_ejercicio = $_POST["id_tiempo_ejercicio"];
    $id_frecuencia_comida = $_POST["id_frecuencia_comida"];
    $plan_nutricional = $_POST["plan_nutricional"];
    $comida_chatarra = $_POST["comida_chatarra"];
    $id_objetivo_nutricional = $_POST["id_objetivo_nutricional"];
    $tiempo_objetivo = $_POST["tiempo_objetivo"];
    $dias_ejercicio = $_POST["dias_ejercicio"];
    $id_intensidad_ejercicio = $_POST["id_intensidad_ejercicio"];

    // Preparar la consulta SQL para la inserción
    $stmt = $con->prepare("INSERT INTO historia_nutricion (id_estudiante, fecha, id_lugar_ejercicio, id_tiempo_ejercicio,id_frecuencia_comida, 
    plan_nutricional, comida_chatarra, id_objetivo_nutricional, tiempo_objetivo, realiza_ejercicio, dias_ejercicio, id_intensidad_ejercicio, 
    create_time, update_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");

    // Ejecutar la consulta con los datos recibidos del formulario
    $stmt->execute([$id_estudiante, $fecha, $id_lugar_ejercicio, $id_tiempo_ejercicio, $id_frecuencia_comida, $plan_nutricional, $comida_chatarra,
    $id_objetivo_nutricional, $tiempo_objetivo, $realiza_ejercicio, $dias_ejercicio, $id_intensidad_ejercicio]);

    header('Location: /historias');
}