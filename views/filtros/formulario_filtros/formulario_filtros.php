<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/filtros/filtros.css">
</head>

<body>
<div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 30rem;">
    <h3>Filtros</h3>

    <form action="/vista-filtros" method="post">
        <label for="campo_salud">Selecciona el campo de Salud:</label>
        <select name="campo_salud" id="campo_salud">
            <option value="historia_medicina">Medicina</option>
            <option value="historia_nutricion">Nutrición</option>
            <option value="historia_psicologica">Psicología</option>
        </select><br><br>

        <label for="fecha_inicio">Selecciona la fecha de inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio"><br><br>

        <label for="fecha_fin">Selecciona la fecha de fin:</label>
        <input type="date" name="fecha_fin" id="fecha_fin"><br><br>

        <input class="btn btn-primary" type="submit" value="Buscar"><br><br>
    </form>

</div>


</body>

</html>