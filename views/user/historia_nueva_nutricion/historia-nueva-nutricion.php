<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <form action="/nueva-historia-nutricion" method="post">
            <h3>Historia Clínica Nutricional</h3>
            <!-- Formulario específico para el campo de salud 2 -->
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"><br><br>

            <label for="realiza_ejercicio">Realiza ejercicio:</label>
            <select id="realiza_ejercicio" name="realiza_ejercicio" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select><br><br>

            <label for="id_lugar_ejercicio">Lugar de Ejercicio:</label>
            <select id="id_lugar_ejercicio" name="id_lugar_ejercicio" required>
                <option value="1">Casa</option>
                <option value="2">Parque o Unidad deportiva</option>
                <option value="3">Gimnasio</option>
                <option value="4">Ninguno</option>
            </select><br><br>

            <label for="id_tiempo_ejercicio">Tiempo de Ejercicio:</label>
            <select id="id_tiempo_ejercicio" name="id_tiempo_ejercicio" required>
                <option value="1">30 minutos</option>
                <option value="2">1 hora</option>
                <option value="3">1 hora y media</option>
                <option value="4">2 horas</option>
                <option value="5">Más de 2 horas</option>
                <option value="6">N/A</option>
            </select><br><br>

            <label for="id_frecuencia_comida">Frecuencia de Comidas:</label>
            <select id="id_frecuencia_comida" name="id_frecuencia_comida" required>
                <option value="1">1 vez</option>
                <option value="2">2 veces</option>
                <option value="3">3 veces</option>
                <option value="4">4 veces</option>
                <option value="5">5 o más veces</option>
            </select><br><br>

            <label for="plan_nutricional">Tiene plan nutricional:</label>
            <select id="plan_nutricional" name="plan_nutricional" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select><br><br>

            <label for="comida_chatarra">Consume comida chatarra:</label>
            <select id="comida_chatarra" name="comida_chatarra" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select><br><br>

            <label for="id_objetivo_nutricional">Objetivo Nutriconal:</label>
            <select id="id_objetivo_nutricional" name="id_objetivo_nutricional" required>
                <option value="1">Control de peso</option>
                <option value="2">Salud</option>
                <option value="3">Aumento de masa muscular</option>
                <option value="4">Apoyo en el embarazo o lactancia</option>
                <option value="5">Condición en específico</option>
            </select><br><br>


            <label for="tiempo_objetivo">Tiempo para alcanzar el Objetivo:</label>
            <input type="text" id="tiempo_objetivo" name="tiempo_objetivo"><br><br>

            <label for="dias_ejercicio">Días de ejercicio por semana:</label>
            <select id="dias_ejercicio" name="dias_ejercicio" required>
                <option value="0">Ninguno</option>
                <option value="1">1 día</option>
                <option value="2">2 días</option>
                <option value="3">3 días</option>
                <option value="4">4 días</option>
                <option value="5">5 días</option>
                <option value="6">6 días</option>
                <option value="7">7 días</option>
            </select><br><br>

            <label for="id_intensidad_ejercicio">Intensidad del ejercicio:</label>
            <select id="id_intensidad_ejercicio" name="id_intensidad_ejercicio" required>
                <option value="1">Ligera</option>
                <option value="2">Moderada</option>
                <option value="3">Dura</option>
                <option value="4">N/A</option>
            </select><br><br>

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