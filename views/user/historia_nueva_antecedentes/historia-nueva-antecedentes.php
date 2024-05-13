<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/user/historia_nueva_nutricion/historia-nueva-nutricion.css">
    
</head>

<body>

    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <form action="/nueva-historia-antecedentes" method="post">
            <h3>Antecedente Personal Patológico</h3>
            <input type="hidden" id="id_estudiante" name="id_estudiante" value="<?php echo $resultado_str ?>" required>

            <input type="checkbox" id="id_antecedente_patologico_1" name="id_antecedente_patologico[]" value="1">
            <label for="id_antecedente_patologico_1">Diabetes</label><br>
            <input type="checkbox" id="id_antecedente_patologico_2" name="id_antecedente_patologico[]" value="2">
            <label for="id_antecedente_patologico_2">Hipertensión Arterial</label><br>
            <input type="checkbox" id="id_antecedente_patologico_3" name="id_antecedente_patologico[]" value="3">
            <label for="id_antecedente_patologico_3">Asma</label><br>
            <input type="checkbox" id="id_antecedente_patologico_4" name="id_antecedente_patologico[]" value="4">
            <label for="id_antecedente_patologico_4">Enfermedad Renal</label><br>
            <input type="checkbox" id="id_antecedente_patologico_5" name="id_antecedente_patologico[]" value="5">
            <label for="id_antecedente_patologico_5">Alergias</label><br>
            <input type="checkbox" id="id_antecedente_patologico_6" name="id_antecedente_patologico[]" value="6">
            <label for="id_antecedente_patologico_6">Cirugías</label><br>
            <input type="checkbox" id="id_antecedente_patologico_7" name="id_antecedente_patologico[]" value="7">
            <label for="id_antecedente_patologico_7">Cáncer</label><br>
            <input type="checkbox" id="id_antecedente_patologico_8" name="id_antecedente_patologico[]" value="8">
            <label for="id_antecedente_patologico_8">Afecciones Cardiovasculares</label><br>
            <input type="checkbox" id="id_antecedente_patologico_9" name="id_antecedente_patologico[]" value="9">
            <label for="id_antecedente_patologico_9">Enfermedad Psiquitrica</label><br>
            <input type="checkbox" id="id_antecedente_patologico_10" name="id_antecedente_patologico[]" value="10">
            <label for="id_antecedente_patologico_10">Transfución de Sangre</label><br>
            <input type="checkbox" id="id_antecedente_patologico_11" name="id_antecedente_patologico[]" value="11">
            <label for="id_antecedente_patologico_11">VIH</label><br>
            <input type="checkbox" id="id_antecedente_patologico_12" name="id_antecedente_patologico[]" value="12">
            <label for="id_antecedente_patologico_12">Ninguno</label><br><br>


            <h3>Antecedente Familiar Patológico</h3>
            <input type="checkbox" id="id_antecedente_familiar_patologico_1" name="id_antecedente_familiar_patologico[]" value="1">
            <label for="id_antecedente_familiar_patologico_1">Diabetes</label><br>
            <input type="checkbox" id="id_antecedente_familiar_patologico_2" name="id_antecedente_familiar_patologico[]" value="2">
            <label for="id_antecedente_familiar_patologico_2">Hipertensión Arterial</label><br>
            <input type="checkbox" id="id_antecedente_familiar_patologico_3" name="id_antecedente_familiar_patologico[]" value="3">
            <label for="id_antecedente_familiar_patologico_3">Cáncer</label><br>
            <input type="checkbox" id="id_antecedente_familiar_patologico_4" name="id_antecedente_familiar_patologico[]" value="4">
            <label for="id_antecedente_familiar_patologico_4">Enfermedades psiquitricas</label><br>
            <input type="checkbox" id="id_antecedente_familiar_patologico_5" name="id_antecedente_familiar_patologico[]" value="5">
            <label for="id_antecedente_familiar_patologico_5">Ninguno</label><br><br>

            <input class="btn btn-primary" type="submit" value="Siguiente">
        </form>
    </div>

</body>

</html>