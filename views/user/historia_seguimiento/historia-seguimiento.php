<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <form action="/historia-seguimiento" method="post">
            <h3>Historia de Seguimiento</h3>
            <!-- Formulario específico para el campo de salud 2 -->
            <input type="hidden" name="id" value="<?php echo $id_estudiante ?>">

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"><br><br>

            <label for="realiza_ejercicio">Resumen de la consulta:</label> <br>
            <textarea name="resumen_consulta" id="resumen_consulta" cols="30" rows="10"></textarea><br><br>

            <label for="diagnostico">Diagnóstico:</label> <br>
            <textarea name="diagnostico" id="diagnostico" cols="30" rows="10"></textarea><br><br>

            <label for="pronostico">Pronostico:</label> <br>
            <textarea name="pronostico" id="pronostico" cols="30" rows="10"></textarea><br><br>

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