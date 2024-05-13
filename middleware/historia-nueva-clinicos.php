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
    $id_historia_medicina = $resultado_str;
    //EXPLORACION FISICA
    // Obtener los datos del formulario de exploración física
    $presion_arterial = $_POST['presion_arterial'];
    $frecuencia_cardiaca = $_POST['frecuencia_cardiaca'];
    $temperatura = $_POST['temperatura'];
    $peso = $_POST['peso'];
    $talla = $_POST['talla'];
    $imc = $_POST['imc'];

    // Preparar la consulta SQL
    $stmt = $con->prepare("INSERT INTO exploracion_fisica (id_historia_medicina, presion_arterial, frecuencia_cardiaca, temperatura, peso, talla, imc, create_time, update_time) VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");

    // Ejecutar la consulta con los parámetros
    $stmt->execute([$id_historia_medicina, $presion_arterial, $frecuencia_cardiaca, $temperatura, $peso, $talla, $imc]);


    //GINECOOBSTETRICOS
    // Obtener los datos del formulario
    // Verificar si se proporcionó un valor para la edad de menarca
    $edad_menarca = !empty($_POST['edad_menarca']) ? intval($_POST['edad_menarca']) : null;
    $ultima_regla = $_POST['ultima_regla'];
    $ritmo_menstrual = $_POST['ritmo_menstrual'];
    $edad_inicio_vida_sexual = !empty($_POST['edad_inicio_vida_sexual']) ? intval($_POST['edad_inicio_vida_sexual']) : null;
    $embarazos = !empty($_POST['embarazos']) ? intval($_POST['embarazos']) : null;
    $partos = !empty($_POST['partos']) ? intval($_POST['partos']) : null;
    $abortos = !empty($_POST['abortos']) ? intval($_POST['abortos']) : null;
    $cesareas = !empty($_POST['cesareas']) ? intval($_POST['cesareas']) : null;
    $lactancia_materna = $_POST['lactancia_materna'];
    $papanicolaou = $_POST['papanicolaou'];
    $parejas_sexuales = !empty($_POST['parejas_sexuales']) ? intval($_POST['parejas_sexuales']) : null;

    // Preparar la consulta SQL
    $stmt2 = $con->prepare("INSERT INTO ginecoobstetricos (id_historia_medicina, edad_menarca, ultima_regla, ritmo_menstrual, edad_inicio_vida_sexual, embarazos, partos, abortos, cesareas, lactancia_materna, papanicolaou, parejas_sexuales, create_time, update_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,NOW(), NOW())");

    // Ejecutar la consulta con los parámetros
    $stmt2->execute([$id_historia_medicina, $edad_menarca, $ultima_regla, $ritmo_menstrual, $edad_inicio_vida_sexual, $embarazos, $partos, $abortos, $cesareas, $lactancia_materna, $papanicolaou, $parejas_sexuales]);


    //SISTEMA_DETALLE
    // Obtener los valores seleccionados para el aparato digestivo
    $digestivo_seleccionado = $_POST['id_digestivo'];

    // Insertar los datos seleccionados del aparato digestivo en la tabla digestivo_detalle
    foreach ($digestivo_seleccionado as $id_digestivo) {
        $sql = "INSERT INTO digestivo_detalle (id_historia_medicina, id_digestivo, create_time, update_time) VALUES (?, ?, NOW(), NOW())";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $id_historia_medicina, PDO::PARAM_INT);
        $stmt->bindParam(2, $id_digestivo, PDO::PARAM_INT);
        // Aquí debes asignar el valor adecuado para $id_historia_medicina
        // Ejemplo: $id_historia_medicina = $_POST['id_historia_medicina'];
        $stmt->execute();
    }

    // Obtener los valores seleccionados para el aparato respiratorio
    $respiratorio_seleccionado = $_POST['id_respiratorio'];

    // Insertar los datos seleccionados del aparato respiratorio en la tabla respiratorio_detalle
    foreach ($respiratorio_seleccionado as $id_respiratorio) {
        $sql = "INSERT INTO respiratorio_detalle (id_historia_medicina, id_respiratorio, create_time, update_time) VALUES (?, ?, NOW(), NOW())";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $id_historia_medicina, PDO::PARAM_INT);
        $stmt->bindParam(2, $id_respiratorio, PDO::PARAM_INT);
        // Aquí debes asignar el valor adecuado para $id_historia_medicina
        // Ejemplo: $id_historia_medicina = $_POST['id_historia_medicina'];
        $stmt->execute();
    }

    // Obtener los valores seleccionados para el aparato urinario
    $urinario_seleccionado = $_POST['id_urinario'];

    // Insertar los datos seleccionados del aparato urinario en la tabla urinario_detalle
    foreach ($urinario_seleccionado as $id_urinario) {
        $sql = "INSERT INTO urinario_detalle (id_historia_medicina, id_urinario, create_time, update_time) VALUES (?, ?, NOW(), NOW())";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $id_historia_medicina, PDO::PARAM_INT);
        $stmt->bindParam(2, $id_urinario, PDO::PARAM_INT);
        // Aquí debes asignar el valor adecuado para $id_historia_medicina
        // Ejemplo: $id_historia_medicina = $_POST['id_historia_medicina'];
        $stmt->execute();
    }

    //Redirigir a las historias
    header('Location: /historias');
}
