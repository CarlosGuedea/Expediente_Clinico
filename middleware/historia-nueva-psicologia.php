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
    // Recuperar los datos del formulario
    $id_estudiante = $resultado_str;
    $fecha = $_POST['fecha'];
    $derivacion = $_POST['derivacion'];
    $problematica = $_POST['problematica'];
    $comportamiento = $_POST['comportamiento'];
    $tono_voz = $_POST['tono_voz'];
    $imagen_personal = $_POST['imagen_personal'];
    $dificultad_academica = $_POST['dificultad_academica'];
    $areas_mejora = $_POST['areas_mejora'];
    $trabajo = $_POST['trabajo'];
    $tipo_trabajo = $_POST['tipo_trabajo'];
    $fecha_inicio_trabajo = $_POST['fecha_inicio_trabajo'];
    $experiencia_laboral = $_POST['experiencia_laboral'];
    $descripcion_personal = $_POST['descripcion_personal'];
    $pareja = $_POST['pareja'];
    $tiempo_relacion = $_POST['tiempo_relacion'];
    $importancia_relacion = $_POST['importancia_relacion'];
    $descripcion_relacion = $_POST['descripcion_relacion'];
    $descripcion_pareja = $_POST['descripcion_pareja'];
    $amistades = $_POST['amistades'];
    $relaciones_significativas = $_POST['relaciones_significativas'];
    $apoyo_amigos = $_POST['apoyo_amigos'];
    $opinion_amigos_problema = $_POST['opinion_amigos_problema'];


    //Preparar la consulta
    $stmt = $con->prepare(// Preparar la consulta SQL
        $sql = "INSERT INTO historia_psicologica (id_estudiante, fecha, derivacion, problematica, 
        comportamiento, tono_voz, imagen_personal, dificultad_academica, areas_mejora, trabajo, 
        tipo_trabajo, fecha_inicio_trabajo, experiencia_laboral, descripcion_personal, pareja, 
        tiempo_relacion, importancia_relacion, descripcion_relacion, descripcion_pareja, 
        amistades, relaciones_significativas, apoyo_amigos, opinion_amigos_problema, create_time, update_time)
        VALUES ('$id_estudiante', '$fecha', '$derivacion', '$problematica', '$comportamiento', '$tono_voz', 
        '$imagen_personal', '$dificultad_academica', '$areas_mejora', '$trabajo', '$tipo_trabajo', 
        '$fecha_inicio_trabajo', '$experiencia_laboral', '$descripcion_personal', '$pareja', '$tiempo_relacion', 
        '$importancia_relacion', '$descripcion_relacion', '$descripcion_pareja', '$amistades', 
        '$relaciones_significativas', '$apoyo_amigos', '$opinion_amigos_problema', NOW(), NOW())");


    //Ejecutar la consulta
    $stmt->execute();


    //Redireccionar a familiograma
    header('Location: /historia-familiograma');
}