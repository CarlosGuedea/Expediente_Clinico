<?php

// Realizar la eliminación del usuario
$db = new Base;
$con = $db->ConexionBD();


if ($_POST) {

    $numero_control = $_POST['numero_control'];
    $_SESSION['numero_control'] = $numero_control;
    $stmt = $con->prepare("SELECT id_estudiante, numero_control FROM estudiante WHERE numero_control = $numero_control");
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    // Convertir el resultado a un string
    $resultado_control = strval($resultado['numero_control']);
    $resultado_estudiante = strval($resultado['id_estudiante']);
    $_SESSION['id_estudiante'] = $resultado_estudiante;


    if ($resultado_estudiante !== '') {
        //Consultar si existe una historia clínica previamente hecha de medicina
        $stmt2 = $con->prepare("SELECT id_estudiante FROM historia_medicina WHERE id_estudiante = $resultado_estudiante");
        $stmt2->execute();
        $resultado2 = $stmt2->fetch(PDO::FETCH_ASSOC);
        $resultado_medicina = strval($resultado2['id_estudiante']);
        //Consultar si existe una historia clínica previamente hecha de nutricion
        $stmt3 = $con->prepare("SELECT id_estudiante FROM historia_nutricion WHERE id_estudiante = $resultado_estudiante");
        $stmt3->execute();
        $resultado3 = $stmt3->fetch(PDO::FETCH_ASSOC);
        $resultado_nutricion = strval($resultado3['id_estudiante']);
        //Consultar si existe una historia clínica previamente hecha de psicología
        $stmt4 = $con->prepare("SELECT id_estudiante FROM historia_psicologica WHERE id_estudiante = $resultado_estudiante");
        $stmt4->execute();
        $resultado4 = $stmt4->fetch(PDO::FETCH_ASSOC);
        $resultado_psicologia = strval($resultado4['id_estudiante']);
    }

    // Devolver una respuesta de éxito
    http_response_code(200);

    if ($resultado_control === '') {
        header('Location: /nueva-historia-general');
    } else {
        if ($_SESSION['Campo_salud'] === 1) {
            //Si el estudiante ya tiene una historia medicina
            if ($resultado_medicina === '') {
                header('Location: /nueva-historia-medicina');
            } else {
                header('Location: /historia-seguimiento');
            }
        } else if ($_SESSION['Campo_salud'] === 2) {
            //Si el estudiante ya tiene una historia nutricional
            if ($resultado_nutricion === '') {
                header('Location: /nueva-historia-nutricion');
            } else {
                header('Location: /historia-seguimiento');
            }
        } else if ($_SESSION['Campo_salud'] === 3) {
            //Si el estudiante ya tiene una historia psicologia
            if ($resultado_psicologia === '') {
                header('Location: /nueva-historia-pisologia');
            } else {
                header('Location: /historia-seguimiento');
            }
        }
    }
}
