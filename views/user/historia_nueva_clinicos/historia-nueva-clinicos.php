<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <form action="/nueva-historia-clinicos" method="post">
            <h3>Historia Clínica Medica</h3>

            <h4>Exploración Fisica</h4><br>

            <label for="presion_arterial">Presión Arterial:</label>
            <div style="display: inline-flex;">
                <input type="text" name="presion_arterial" id="presion_arterial" style="margin-right: 5px;">
                <p style="margin: 0;">mmHg</p>
            </div><br><br>

            <label for="frecuencia_cardiaca">Frecuencia Cardiaca:</label>
            <div style="display: inline-flex;">
                <input type="number" name="frecuencia_cardiaca" id="frecuencia_cardiaca" step="any" style="margin-right: 5px;">
                <p style="margin: 0;">lpm</p>
            </div><br><br>

            <label for="temperatura">Temperatura:</label>
            <div style="display: inline-flex;">
                <input type="number" name="temperatura" id="temperatura" step="any" style="margin-right: 5px;">
                <p style="margin: 0;">°C</p>
            </div><br><br>

            <label for="peso">Peso:</label>
            <div style="display: inline-flex;">
                <input type="number" name="peso" id="peso" step="any" style="margin-right: 5px;">
                <p style="margin: 0;">kg</p>
            </div><br><br>

            <label for="talla">Talla (Estatura en metros):</label>
            <div style="display: inline-flex;">
                <input type="number" name="talla" id="talla" step="any" style="margin-right: 5px;">
                <p style="margin: 0;">m</p>
            </div><br><br>

            <label for="talla">IMC (Indice de Masa Corporal):</label>
            <input type="number" name="imc" id="imc" step="any"><br><br>

            <h4>Exploración por aparatos y sistemas</h4><br>

            <label for="id_sistema_digestivo">Aparato digestivo:</label><br>
            <input type="checkbox" id="id_digestivo_1" name="id_digestivo[]" value="1">
            <label for="id_digestivo_1">Disfagia</label><br>
            <input type="checkbox" id="id_digestivo_2" name="id_digestivo[]" value="2">
            <label for="id_digestivo_2">Odinofagia</label><br>
            <input type="checkbox" id="id_digestivo_3" name="id_digestivo[]" value="3">
            <label for="id_digestivo_3">Pirosis</label><br>
            <input type="checkbox" id="id_digestivo_4" name="id_digestivo[]" value="4">
            <label for="id_digestivo_4">Regurgitación</label><br>
            <input type="checkbox" id="id_digestivo_5" name="id_digestivo[]" value="5">
            <label for="id_digestivo_5">Constipación</label><br><br>


            <label for="id_sistema_digestivo">Aparato respiratorio:</label><br>
            <input type="checkbox" id="id_respiratorio_1" name="id_respiratorio[]" value="1">
            <label for="id_respiratorio_1">Obstrucción nasal</label><br>
            <input type="checkbox" id="id_respiratorio_2" name="id_respiratorio[]" value="2">
            <label for="id_respiratorio_2">Tos</label><br>
            <input type="checkbox" id="id_respiratorio_3" name="id_respiratorio[]" value="3">
            <label for="id_respiratorio_3">Disfonia</label><br>
            <input type="checkbox" id="id_respiratorio_4" name="id_respiratorio[]" value="4">
            <label for="id_respiratorio_4">Disnea</label><br><br>


            <label for="id_sistema_digestivo">Aparato urinario:</label><br>
            <input type="checkbox" id="id_urinario_1" name="id_urinario[]" value="1">
            <label for="id_urinario_1">Disuria</label><br>
            <input type="checkbox" id="id_urinario_2" name="id_urinario[]" value="2">
            <label for="id_urinario_2">Hematuria</label><br>
            <input type="checkbox" id="id_urinario_3" name="id_urinario[]" value="3">
            <label for="id_respiratorio_3">Pujo o tenesmo vesical</label><br><br>


            <h4>Gineco-obstetricos</h4>

            <label for="edad_menarca">Edad de menarca: </label>
            <input type="number" id="edad_menarca" name="edad_menarca"><br><br>

            <label for="ultima_regla">Fecha de Ultima Regla: </label>
            <input type="text" id="ultima_regla" name="ultima_regla"><br><br>

            <label for="ultima_regla">Ritmo (Frecuencia y duración de la menstruación): </label><br>
            <textarea id="ritmo_menstrual" name="ritmo_menstrual" cols="30" rows="10"></textarea><br><br>

            <label for="edad_inicio_vida_sexual">Edad de inicio de vida sexual activa: </label>
            <input type="number" id="edad_inicio_vida_sexual" name="edad_inicio_vida_sexual"><br><br>

            <label for="embarazos">Embarazos:</label>
            <input type="number" id="embarazos" name="embarazos"><br><br>

            <label for="partos">Partos:</label>
            <input type="number" id="partos" name="partos"><br><br>

            <label for="abortos">Abortos:</label>
            <input type="number" id="abortos" name="abortos"><br><br>

            <label for="cesareas">Cesareas:</label>
            <input type="number" id="cesareas" name="cesareas"><br><br>

            <label for="lactancia_materna">Lactancia Materna:</label>
            <select name="lactancia_materna" id="lactancia_materna">
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select><br><br>

            <label for="papanicolaou">Te has realizado el papanicolaou:</label>
            <select name="papanicolaou" id="papanicolaou">
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select><br><br>

            <label for="parejas_sexuales">Numero de parejas sexuales:</label>
            <input type="number" id="parejas_sexuales" name="parejas_sexuales"><br><br>


            <button class="btn btn-primary" type="submit">Enviar</button>


    </div>
    </form>
</body>

<script>
    // Obtener la fecha actual
    var fechaActual = new Date();

    // Formatear la fecha para que sea aceptada por el input de tipo date (YYYY-MM-DD)
    var fechaFormateada = fechaActual.getFullYear() + '-' + ('0' + (fechaActual.getMonth() + 1)).slice(-2) + '-' + ('0' + fechaActual.getDate()).slice(-2);

    // Establecer la fecha actual como valor predeterminado del input de fecha
    document.getElementById('fecha').value = fechaFormateada;
</script>

</html>