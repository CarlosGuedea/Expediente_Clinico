<!-- HEADER PARA TODAS LAS ESTRUCTURAS DE CONTROL -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/user/vista_medicina/vista-medicina.css">
</head>

<body>



    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <h3>Datos Generales</h3>
        <form action="/nueva-historia-general" method="post">

            <strong><label for="nombre">Nombre:</label></strong><br>
            <p><?php echo $resultado[0]['nombre'] ?> </p>

            <strong><label for="numero_control">Número de Control:</label> </strong><br>
            <p><?php echo $resultado[0]['numero_control'] ?></p>

            <strong><label for="lugar_nacimiento">Lugar de Nacimiento:</label> </strong><br>
            <p><?php echo $resultado[0]['lugar_nacimiento'] ?></p>

            <strong><label for="enfermedades_actuales">Enfermedades Actuales:</label> </strong><br>
            <p><?php echo $resultado[0]['enfermedades_actuales']; ?></p>

            <strong><label for="id_estado_civil">Estado Civil:</label> </strong>
            <p> <?php if ($resultado[0]['id_estado_civil'] == 1) echo 'Soltero';
                else if ($resultado[0]['id_estado_civil'] == 2) echo 'Casado';
                else if ($resultado[0]['id_estado_civil'] == 3) echo 'Divordiado';
                else if ($resultado[0]['id_estado_civil'] == 4) echo 'Separado';
                else if ($resultado[0]['id_estado_civil'] == 5) echo 'Viudo';
                else if ($resultado[0]['id_estado_civil'] == 6) echo 'Concubinato'; ?></p>


            <strong><label for="id_carrera">Carrera:</label> </strong>
            <p>
                <?php if ($resultado[0]['id_carrera'] == 1) echo 'Arquitectura';
                else if ($resultado[0]['id_carrera'] == 2) echo 'Contador Público';
                else if ($resultado[0]['id_carrera'] == 3) echo 'Ingeniería Ambiental';
                else if ($resultado[0]['id_carrera'] == 4) echo 'Ingeniería Bioquímica';
                else if ($resultado[0]['id_carrera'] == 5) echo 'Ingeniería en Gestión Empresarial';
                else if ($resultado[0]['id_carrera'] == 6) echo 'Ingeniería Industrial';
                else if ($resultado[0]['id_carrera'] == 7) echo 'Ingeniería Informática';
                else if ($resultado[0]['id_carrera'] == 8) echo 'Ingeniería Mecatrónica';
                else if ($resultado[0]['id_carrera'] == 9) echo 'Ingeniería en Sistemas Computacionales';
                else if ($resultado[0]['id_carrera'] == 10) echo 'Licenciatura en Administración';
                else if ($resultado[0]['id_carrera'] == 11) echo 'Maestría en Sistemas Computacionales';
                else if ($resultado[0]['id_carrera'] == 12) echo 'Maestría en Arquitectura'; ?></p>


            <strong><label for="id_tipo_sangre">Tipo de Sangre:</label> </strong>
            <p>
                <?php if ($resultado[0]['id_tipo_sangre'] == 1) echo 'A+';
                else if ($resultado[0]['id_tipo_sangre'] == 2) echo 'A-';
                else if ($resultado[0]['id_tipo_sangre'] == 3) echo 'B+';
                else if ($resultado[0]['id_tipo_sangre'] == 4) echo 'B-';
                else if ($resultado[0]['id_tipo_sangre'] == 5) echo 'AB+';
                else if ($resultado[0]['id_tipo_sangre'] == 6) echo 'AB-';
                else if ($resultado[0]['id_tipo_sangre'] == 7) echo 'O+';
                else if ($resultado[0]['id_tipo_sangre'] == 8) echo 'O-'; ?></p>


            <strong><label for="lugar_residencia">Lugar de Residencia:</label> </strong><br>
            <p> <?php echo $resultado[0]['lugar_residencia'] ?></p>

            <strong><label for="id_tabaquismo">Tabaquismo:</label> </strong>
            <p>
                <?php if ($resultado[0]['id_tabaquismo'] == 1) echo '1 a 5 cigarrillos por día';
                else if ($resultado[0]['id_tabaquismo'] == 2) echo '5 a 10 cigarrillos por día';
                else if ($resultado[0]['id_tabaquismo'] == 3) echo 'Más de 10 cigarrillos por día';
                else if ($resultado[0]['id_tabaquismo'] == 4) echo 'Negativo';
                else if ($resultado[0]['id_tabaquismo'] == 5) echo 'Fumador pasivo'; ?> </p>


            <strong><label for="id_alcoholismo">Alcoholismo:</label> </strong>
            <p>
                <?php if ($resultado[0]['id_alcoholismo'] == 1) echo 'Ocasional'; ?>
                <option value="1" <?php if ($resultado[0]['id_alcoholismo'] == 1) echo 'selected'; ?>>Ocasional</option>
                <option value="2" <?php if ($resultado[0]['id_alcoholismo'] == 2) echo 'selected'; ?>>Cada semana</option>
                <option value="3" <?php if ($resultado[0]['id_alcoholismo'] == 3) echo 'selected'; ?>>3 o más veces por semana</option>
            </p>

            <strong><label for="toxicomanias">Toxicomanías:</label> </strong><br>
            <p><?php echo $resultado[0]['toxicomanias'] ?></p>


            <h3>Antecedentes Personales Patológicos</h3>
            <?php foreach ($resultado2 as $antecedente) : ?>

                <p><?php if ($antecedente['id_antecedente_patologico'] === 1) echo 'Diabetes';
                    else if ($antecedente['id_antecedente_patologico'] === 2) echo 'Hipertensión Arterial';
                    else if ($antecedente['id_antecedente_patologico'] === 3) echo 'Asma';
                    else if ($antecedente['id_antecedente_patologico'] === 4) echo 'Enfermedad Renal';
                    else if ($antecedente['id_antecedente_patologico'] === 5) echo 'Alergias';
                    else if ($antecedente['id_antecedente_patologico'] === 6) echo 'Cirugías';
                    else if ($antecedente['id_antecedente_patologico'] === 7) echo 'Cáncer';
                    else if ($antecedente['id_antecedente_patologico'] === 8) echo 'Afecciones Cardiovasculares';
                    else if ($antecedente['id_antecedente_patologico'] === 9) echo 'Enfermedad Psiquitrica';
                    else if ($antecedente['id_antecedente_patologico'] === 10) echo 'Transfución de Sangre';
                    else if ($antecedente['id_antecedente_patologico'] === 11) echo 'VIH';
                    else if ($antecedente['id_antecedente_patologico'] === 12) echo 'Ninguna'; ?>

                <?php endforeach; ?></p>

                <h3>Antecedentes Familiares Patológicos</h3>

                <?php foreach ($resultado3 as $antecedente_familiar) : ?>

                    <p><?php if ($antecedente_familiar['id_antecedente_familiar_patologico'] === 1) echo 'Diabetes';
                        else if ($antecedente_familiar['id_antecedente_familiar_patologico'] === 2) echo 'Hipertensión Arterial';
                        else if ($antecedente_familiar['id_antecedente_familiar_patologico'] === 3) echo 'Cáncer';
                        else if ($antecedente_familiar['id_antecedente_familiar_patologico'] === 4) echo 'Enfermedades Psiquitricas';
                        else if ($antecedente_familiar['id_antecedente_familiar_patologico'] === 5) echo 'Ninguno'; ?>

                    <?php endforeach; ?></p>

        </form>
    </div>
</body>

</html>