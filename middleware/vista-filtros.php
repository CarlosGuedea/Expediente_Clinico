<?php
error_reporting(0);

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();

$campo_salud = $_POST['campo_salud'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

if ($campo_salud === 'historia_medicina') {
    // Recupera los valores enviados desde el formulario
    $campo_salud = $_POST['campo_salud'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    $stmt = $con->prepare("SELECT carrera.nombre AS carrera,
    estudiante.genero AS genero,
        COUNT(DISTINCT estudiante.id_estudiante) AS cantidad_personas
    FROM estudiante
    LEFT JOIN historia_medicina ON estudiante.id_estudiante = historia_medicina.id_estudiante
    LEFT JOIN carrera ON estudiante.id_carrera = carrera.id_carrera
    WHERE historia_medicina.fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
    GROUP BY carrera.nombre, estudiante.genero;
    ");

    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Consulta seguimiento
    $stmt2 = $con->prepare("SELECT carrera.nombre AS carrera,
    estudiante.genero AS genero,
    COUNT(DISTINCT estudiante.id_estudiante) AS cantidad_personas
    FROM estudiante
    LEFT JOIN resumen_consulta ON estudiante.id_estudiante = resumen_consulta.id_estudiante
    LEFT JOIN campo_salud ON resumen_consulta.campo_salud = campo_salud.id_campo_salud
    LEFT JOIN carrera ON estudiante.id_carrera = carrera.id_carrera
    WHERE resumen_consulta.fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
    AND campo_salud.nombre = 'Medicina'
    GROUP BY carrera.nombre, estudiante.genero;");

    $stmt2->execute();
    $resultado2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

} else if ($campo_salud === 'historia_nutricion') {
    // Recupera los valores enviados desde el formulario
    $campo_salud = $_POST['campo_salud'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    $stmt = $con->prepare("SELECT carrera.nombre AS carrera,
    estudiante.genero AS genero,
        COUNT(DISTINCT estudiante.id_estudiante) AS cantidad_personas
    FROM estudiante
    LEFT JOIN historia_nutricion ON estudiante.id_estudiante = historia_nutricion.id_estudiante
    LEFT JOIN carrera ON estudiante.id_carrera = carrera.id_carrera
    WHERE historia_nutricion.fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
    GROUP BY carrera.nombre, estudiante.genero;
    ");

    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //Consulta seguimiento
    $stmt2 = $con->prepare("SELECT carrera.nombre AS carrera,
    estudiante.genero AS genero,
    COUNT(DISTINCT estudiante.id_estudiante) AS cantidad_personas
    FROM estudiante
    LEFT JOIN resumen_consulta ON estudiante.id_estudiante = resumen_consulta.id_estudiante
    LEFT JOIN campo_salud ON resumen_consulta.campo_salud = campo_salud.id_campo_salud
    LEFT JOIN carrera ON estudiante.id_carrera = carrera.id_carrera
    WHERE resumen_consulta.fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
    AND campo_salud.nombre = 'Nutrición'
    GROUP BY carrera.nombre, estudiante.genero;");

    $stmt2->execute();
    $resultado2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

} else if ($campo_salud === 'historia_psicologica') {
    // Recupera los valores enviados desde el formulario
    $campo_salud = $_POST['campo_salud'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    $stmt = $con->prepare("SELECT carrera.nombre AS carrera,
    estudiante.genero AS genero,
        COUNT(DISTINCT estudiante.id_estudiante) AS cantidad_personas
    FROM estudiante
    LEFT JOIN historia_psicologica ON estudiante.id_estudiante = historia_psicologica.id_estudiante
    LEFT JOIN carrera ON estudiante.id_carrera = carrera.id_carrera
    WHERE historia_psicologica.fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
    GROUP BY carrera.nombre, estudiante.genero;
    ");

    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Consulta seguimiento
    $stmt2 = $con->prepare("SELECT carrera.nombre AS carrera,
    estudiante.genero AS genero,
    COUNT(DISTINCT estudiante.id_estudiante) AS cantidad_personas
    FROM estudiante
    LEFT JOIN resumen_consulta ON estudiante.id_estudiante = resumen_consulta.id_estudiante
    LEFT JOIN campo_salud ON resumen_consulta.campo_salud = campo_salud.id_campo_salud
    LEFT JOIN carrera ON estudiante.id_carrera = carrera.id_carrera
    WHERE resumen_consulta.fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
    AND campo_salud.nombre = 'Psicología'
    GROUP BY carrera.nombre, estudiante.genero;");

    $stmt2->execute();
    $resultado2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}
