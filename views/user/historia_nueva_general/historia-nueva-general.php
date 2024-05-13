<!-- HEADER PARA TODAS LAS ESTRUCTURAS DE CONTROL -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/user/historia_nueva_general/historia-nueva-general.css">
</head>

<body>
    <div style="text-align:center; padding-bottom:2rem; background-color:gainsboro;">
        <h1>Datos Generales</h1>
    </div>
    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <form action="/nueva-historia-general" method="post">

            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="numero_control">Número de Control:</label><br>
            <input type="text" id="numero_control" name="numero_control" maxlength="25" required><br><br>

            <label for="genero">Género:</label>
            <select name="genero" id="genero">
                <option value="0">Masculino</option>
                <option value="1">Femenino</option>
            </select><br><br>

            <label for="lugar_nacimiento">Lugar de Nacimiento:</label><br>
            <input type="text" id="lugar_nacimiento" name="lugar_nacimiento" required><br><br>

            <label for="enfermedades_actuales">Enfermedades Actuales:</label><br>
            <textarea id="enfermedades_actuales" name="enfermedades_actuales" required></textarea><br><br>

            <label for="id_estado_civil">Estado Civil:</label>
            <select id="id_estado_civil" name="id_estado_civil" required>
                <option value="1">Soltero</option>
                <option value="2">Casado</option>
                <option value="3">Divorciado</option>
                <option value="4">Separado</option>
                <option value="5">Viudo</option>
                <option value="6">Concubinato</option>
            </select><br><br>

            <label for="id_carrera">Carrera:</label>
            <select id="id_carrera" name="id_carrera" required>
                <option value="1">Arquitectura</option>
                <option value="2">Contador Público</option>
                <option value="3">Ingeniería Ambiental</option>
                <option value="4">Ingeniería Bioquímica</option>
                <option value="5">Ingeniería en Gestión Empresarial</option>
                <option value="6">Ingeniería Industrial</option>
                <option value="7">Ingeniería Informática</option>
                <option value="8">Ingeniería Mecatrónica</option>
                <option value="9">Ingeniería en Sistemas Computacionales</option>
                <option value="10">Licenciatura en Administración</option>
                <option value="11">Maestría en Sistemas Computacionales</option>
                <option value="12">Maestría en Arquitectura</option>
            </select><br><br>

            <label for="id_tipo_sangre">Tipo de Sangre:</label>
            <select id="id_tipo_sangre" name="id_tipo_sangre" required>
                <option value="1">A+</option>
                <option value="2">A-</option>
                <option value="3">B+</option>
                <option value="4">B-</option>
                <option value="5">AB+</option>
                <option value="6">AB-</option>
                <option value="7">O+</option>
                <option value="8">O-</option>
            </select><br><br>

            <label for="lugar_residencia">Lugar de Residencia:</label><br>
            <input type="text" id="lugar_residencia" name="lugar_residencia" required><br><br>

            <label for="id_tabaquismo">Tabaquismo:</label>
            <select id="id_tabaquismo" name="id_tabaquismo" required>
                <option value="1">1 a 5 cigarrillos por día</option>
                <option value="2">5 a 10 cigarrillos por día</option>
                <option value="3">Más de 10 cigarrillos por día</option>
                <option value="4">Negativo</option>
                <option value="5">Fumador pasivo</option>
            </select><br><br>

            <label for="id_alcoholismo">Alcoholismo:</label>
            <select id="id_alcoholismo" name="id_alcoholismo" required>
                <option value="1">Ocasional</option>
                <option value="2">Cada semana</option>
                <option value="3">3 o más veces por semana</option>
            </select><br><br>

            <label for="toxicomanias">Toxicomanías:</label><br>
            <textarea id="toxicomanias" name="toxicomanias" required></textarea><br><br>

            <input class="btn btn-primary" type="submit" value="Siguiente">

        </form>
    </div>
</body>

</html>