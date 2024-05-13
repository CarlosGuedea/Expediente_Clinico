<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/user/vista_seguimiento/vista-seguimiento.css">
</head>

<body>
    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <h1>Historial de Seguimiento</h1>

        <?php
        $consulta = 1;
        foreach ($resultado as $row) :
        ?>

            <div style=" white-space: nowrap;">
                <h3>Número de consulta: <?php echo $consulta; ?> </h3>
            </div>

            <strong><label for="fecha">Fecha de consulta</label></strong>
            <p><?php echo $row['fecha']; ?></p>


            <strong><label for="campo_salud">Campo de Salud:</label></strong>
            <p><?php if ($row['campo_salud'] == 1) echo 'Medicina';
                else if ($row['campo_salud'] == 2) echo 'Nutrición';
                else if ($row['campo_salud'] == 3) echo 'Psicología' ?></p>


            <strong><label for="resumen_consulta">Resumen consulta:</label></strong>
            <p><?php echo $row['resumen_consulta']; ?></p>


            <strong><label for="diagnostico">Diagnóstico:</label></strong>
            <p><?php echo $row['diagnostico']; ?></p>


            <strong><label for="pronostico">Pronostico:</label></strong>
            <p><?php echo $row['pronostico']; ?></p><br>

        <?php
            // Incrementa el número de consulta para la siguiente iteración
            $consulta++;
        endforeach; ?>


    </div>
</body>

</html>