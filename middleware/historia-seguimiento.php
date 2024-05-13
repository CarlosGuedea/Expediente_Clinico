<?php
error_reporting(0);
// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();

$id_estudiante = $_SESSION['id_estudiante'];

if ($_POST['fecha']) {

    $id = $_POST['id'];
    $campo_salud = $_SESSION['Campo_salud'];
    $fecha = $_POST["fecha"];
    $resumen_consulta = $_POST['resumen_consulta'];
    $diagnostico = $_POST['diagnostico'];
    $pronostico = $_POST['pronostico'];

    // Preparar la consulta SQL para la inserción
    $stmt = $con->prepare("INSERT INTO resumen_consulta (id_estudiante, campo_salud, fecha, resumen_consulta, diagnostico, pronostico, create_time, update_time) VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW())");

    // Ejecutar la consulta con los datos recibidos del formulario
    $stmt->execute([$id, $campo_salud, $fecha, $resumen_consulta, $diagnostico, $pronostico]);

    header('Location: /historias');
}
?>

