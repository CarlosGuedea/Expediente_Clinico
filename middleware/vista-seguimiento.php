<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();


$id_estudiante = $_POST['id_estudiante'];

//DATOOS DE SEGUIMIENTO
$sql = "SELECT * FROM resumen_consulta WHERE id_estudiante = $id_estudiante";

//Peparar la sentencia SQL
$stmt = $con->prepare($sql);

//Ejecutar la sentencia SQL
$stmt->execute();

//Obtener los resultados de la consulta
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

