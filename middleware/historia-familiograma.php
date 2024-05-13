<?php
error_reporting(0);

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


    //Obtner el id_historia_psicologica
    $stmt = $con->prepare("SELECT id_historia_psicologica FROM historia_psicologica WHERE id_estudiante = $resultado_str");
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    // Convertir el resultado a un string
    $resultado_str2 = strval($resultado['id_historia_psicologica']);

    // Devolver una respuesta de éxito
    http_response_code(200);
} catch (PDOException $ex) {
    // Devolver una respuesta de error
    http_response_code(500);
    echo 'Error al consultar la tabla: ' . $ex->getMessage();
}

if ($_POST) {
    // Preparar la consulta SQL para insertar los datos en la tabla familia
    $sql = "INSERT INTO familia (id_historia_psicologica, nombre, parentesco, relacion, create_time, update_time) VALUES (:id_historia_psicologica, :nombre, :parentesco, :relacion, NOW(), NOW())";

    // Preparar la sentencia SQL
    $stmt = $con->prepare($sql);

    // ID de la historia psicológica, puedes obtenerlo de donde corresponda
    $id_historia_psicologica = $resultado_str2; // Por ejemplo, aquí se establece como 1, debes ajustarlo según tu lógica

    // Iterar sobre los datos recibidos y ejecutar la consulta para cada uno
    foreach ($_POST['nombre'] as $index => $nombre) {
        $parentesco = $_POST['parentesco'][$index];
        $relacion = $_POST['relacion'][$index];
        // Vincular los parámetros de la consulta
        $stmt->bindParam(':id_historia_psicologica', $id_historia_psicologica, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':parentesco', $parentesco, PDO::PARAM_STR);
        $stmt->bindParam(':relacion', $relacion, PDO::PARAM_STR);
        $stmt->execute();
    }


    header('Location: /historias');
}
