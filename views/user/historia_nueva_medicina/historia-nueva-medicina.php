<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 30rem;">
        <form action="/nueva-historia-medicina" method="post">
            <h3>Historia Clínica Medica</h3>
            <!-- Formulario específico para el campo de salud 2 -->
            <div style="padding-top:10rem;">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"><br><br>
            </div>

            
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