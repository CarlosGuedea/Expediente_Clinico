<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <form action="/nueva-historia-psicologia" method="post">
            <h3>Historia Clínica de Psicología</h3>
            <!-- Formulario específico para el campo de salud 2 -->
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"><br><br>

            <label for="derivacion">¿Quien lo deriva o cómo se enteró del servicio?</label><br>
            <textarea id="derivacion" name="derivacion" cols="30" rows="10" required></textarea><br><br>

            <label for="problematica">Breve descripción de la problematica:</label><br>
            <textarea id="problematica" name="problematica" cols="30" rows="10" required></textarea><br><br>

            <label for="comportamiento">Comportamiento durante la sesión:</label><br>
            <textarea id="comportamiento" name="comportamiento" cols="30" rows="10" required></textarea><br><br>

            <label for="tono_voz">Tono de voz durante la sesión:</label><br>
            <textarea id="tono_voz" name="tono_voz" cols="30" rows="10" required></textarea><br><br>

            <label for="imagen_personal">Imagen personal:</label><br>
            <textarea id="imagen_personal" name="imagen_personal" cols="30" rows="10" required></textarea><br><br>

            <label for="dificultad_academica">¿Has percibido alguna dificultad académica?</label>
            <select id="dificultad_academica" name="dificultad_academica" required>
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select><br><br>

            <label for="areas_mejora">¿Consideras que puede haber área de mejora?</label><br>
            <textarea id="areas_mejora" name="areas_mejora" cols="30" rows="10" required></textarea><br><br>

            <h4>Aspectos laborales</h4><br>

            <label for="trabajo">¿Trabaja?</label>
            <select id="trabajo" name="trabajo" required>
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select><br><br>

            <label for="tipo_trabajo">¿Tipo de trabajo?</label><br>
            <textarea id="tipo_trabajo" name="tipo_trabajo" cols="30" rows="10"></textarea><br><br>

            <label for="fecha_inicio_trabajo">Fecha de inicio del trabajo:</label><br>
            <input type="text" id="fecha_inicio_trabajo" name="fecha_inicio_trabajo"><br><br>

            <label for="experiencia_laboral">¿Cómo ha sido tu experiencia laboral?</label><br>
            <textarea id="experiencia_laboral" name="experiencia_laboral" cols="30" rows="10"></textarea><br><br>

            <label for="desripcion_personal">¿Cómo te describirías a ti mismo?</label><br>
            <textarea id="descripcion_perosonal" name="descripcion_personal" cols="30" rows="10" required></textarea><br><br>

            <h4>Aspectos relacionales</h4><br>

            <label for="pareja">¿Tiene o ha tenido pareja?</label>
            <select id="pareja" name="pareja" required>
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select><br><br>

            <label for="tiempo_relacion">¿Tiempo de relación y duración de sus relaciones anteriores?</label><br>
            <textarea id="tiempo_relacion" name="tiempo_relacion" cols="30" rows="10" required></textarea><br><br>

            <label for="importancia_relacion">¿Importancia de la relación?</label><br>
            <textarea id="importancia_relacion" name="importancia_relacion" cols="30" rows="10" required></textarea><br><br>

            <label for="descripcion_relacion">Descripción de la relación:</label><br>
            <textarea id="descripcion_relacion" name="descripcion_relacion" cols="30" rows="10" required></textarea><br><br>

            <label for="descripcion_pareja">Descripción de su pareja:</label><br>
            <textarea id="descripcion_pareja" name="descripcion_pareja" cols="30" rows="10" required></textarea><br><br>

            <h4>Amistades</h4><br>

            <label for="amistades">¿Tiene amigos?</label>
            <select id="amistades" name="amistades" required>
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select><br><br>

            <label for="relaciones_significativas">Relaciones significativas:</label><br>
            <textarea id="relaciones_significativas" name="relaciones_significativas" cols="30" rows="10" required></textarea><br><br>

            <label for="apoyo_amigos">¿De qué manera te has apoyado en ellos?</label><br>
            <textarea id="apoyo_amigos" name="apoyo_amigos" cols="30" rows="10" required></textarea><br><br>

            <label for="opinion_amigos_problema">¿Qué dicen de la problemática que estas viviendo?</label><br>
            <textarea id="opinion_amigos_problema" name="opinion_amigos_problema" cols="30" rows="10" required></textarea><br><br>

            <button class="btn btn-primary" type="submit">Siguiente</button>
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