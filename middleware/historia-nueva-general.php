<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();

if ($_POST) {

    $stmt = $con->prepare("INSERT INTO estudiante (nombre, numero_control, lugar_nacimiento, enfermedades_actuales, id_estado_civil, id_carrera, id_tipo_sangre, lugar_residencia, id_tabaquismo, id_alcoholismo,toxicomanias, create_time, update_time, genero) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW(), ?)");

    //Recuperar los valores del POST
    $nombre = $_POST['nombre'];
    $numero_control = $_POST['numero_control'];
    $lugar_nacimiento = $_POST['lugar_nacimiento'];
    $enfermades_actuales = $_POST['enfermedades_actuales'];
    $id_estado_civil = $_POST['id_estado_civil'];
    $id_carrera = $_POST['id_carrera'];
    $id_tipo_sangre = $_POST['id_tipo_sangre'];
    $lugar_residencia = $_POST['lugar_residencia'];
    $id_tabaquismo = $_POST['id_tabaquismo'];
    $id_alcoholismo = $_POST['id_alcoholismo'];
    $toxicomanias = $_POST['toxicomanias'];
    $genero = $_POST['genero'];

    // asignación de valores a la consulta SQL
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $numero_control);
    $stmt->bindParam(3, $lugar_nacimiento);
    $stmt->bindParam(4, $enfermades_actuales);
    $stmt->bindParam(5, $id_estado_civil);
    $stmt->bindParam(6, $id_carrera);
    $stmt->bindParam(7, $id_tipo_sangre);
    $stmt->bindParam(8, $lugar_residencia);
    $stmt->bindParam(9, $id_tabaquismo);
    $stmt->bindParam(10, $id_alcoholismo);
    $stmt->bindParam(11, $toxicomanias);
    $stmt->bindParam(12, $genero);

    // ejecución de la consulta SQL
    $stmt->execute();

    $_SESSION['numero_control'] = $numero_control;

    // Redireccionar a la página historia-nueva-antecedentes
    header("Location: /nueva-historia-antecedentes");
}
