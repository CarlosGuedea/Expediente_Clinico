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
        <form action="/nueva-historia-general" method="post">

            <h3>Historia Nutricional</h3>

            <strong><label for="realiza_ejercicio">¿Realiza ejercicio?</label></strong>
            <p>
                <?php if ($resultado4[0]['realiza_ejercicio'] == 0) echo 'No';
                else if ($resultado4[0]['realiza_ejercicio'] == 1) echo 'Sí'; ?></p>


            <strong><label for="id_lugar_ejercicio">Lugar de ejercicio:</label></strong>
            <p>
                <?php if ($resultado4[0]['id_lugar_ejercicio'] == 1) echo 'Casa';
                else if ($resultado4[0]['id_lugar_ejercicio'] == 2) echo 'Parque o Unidad deportiva';
                else if ($resultado4[0]['id_lugar_ejercicio'] == 3) echo 'Gimnasio';
                else if ($resultado4[0]['id_lugar_ejercicio'] == 4) echo 'Ninguno'; ?> </p>


            <strong><label for="id_tiempo_ejercicio">Tiempo de ejercicio:</label></strong>
            <p>
                <?php if ($resultado4[0]['id_tiempo_ejercicio'] == 1) echo '30 minutos';
                else if ($resultado4[0]['id_tiempo_ejercicio'] == 2) echo '1 hora';
                else if ($resultado4[0]['id_tiempo_ejercicio'] == 3) echo '1 hora y media';
                else if ($resultado4[0]['id_tiempo_ejercicio'] == 4) echo '2 horas';
                else if ($resultado4[0]['id_tiempo_ejercicio'] == 4) echo 'Más de 2 horas';
                else if ($resultado4[0]['id_tiempo_ejercicio'] == 4) echo 'N/A'; ?> </p>


            <strong><label for="dias_ejercicio">Dias de ejercicio a la semana:</label></strong>
            <p><?php echo $resultado4[0]['dias_ejercicio']; ?> dias</p>


            <strong><label for="id_frecuencia_comida">Frecuencia Comida:</label></strong>
            <p>
                <?php if ($resultado4[0]['id_frecuencia_comida'] == 1) echo '1 vez';
                else if ($resultado4[0]['id_frecuencia_comida'] == 2) echo '2 veces';
                else if ($resultado4[0]['id_frecuencia_comida'] == 3) echo '3 veces';
                else if ($resultado4[0]['id_frecuencia_comida'] == 4) echo '4 veces';
                else if ($resultado4[0]['id_frecuencia_comida'] == 4) echo '5 o más veces'; ?> </p>


            <strong><label for="plan_nutricional">Tiene plan nutricional:</label></strong>
            <p>
                <?php if ($resultado4[0]['plan_nutricional'] == 0) echo 'No';
                else if ($resultado4[0]['plan_nutricional'] == 1) echo 'Sí'; ?></p>


            <strong><label for="comida_chatarra">Consume comida chatarra:</label></strong>
            <p>
                <?php if ($resultado4[0]['comida_chatarra'] == 0) echo 'No';
                else if ($resultado4[0]['comida_chatarra'] == 1) echo 'Sí'; ?></p>


            <strong><label for="id_frecuencia_comida">Objetivo Nutricional:</label></strong>
            <p>
                <?php if ($resultado4[0]['id_objetivo_nutricional'] == 1) echo 'Control de peso';
                else if ($resultado4[0]['id_objetivo_nutricional'] == 2) echo 'Salud';
                else if ($resultado4[0]['id_objetivo_nutricional'] == 3) echo 'Aumnento de masa muscular';
                else if ($resultado4[0]['id_objetivo_nutricional'] == 4) echo 'Apoyo en el embarazo o lactancia';
                else if ($resultado4[0]['id_objetivo_nutricional'] == 4) echo 'Condición en específico'; ?> </p>


            <strong><label for="tiempo_objetivo">Tiempo para alcanzar el objetivo:</label></strong>
            <p><?php echo $resultado4[0]['tiempo_objetivo']; ?> </p>

            <input class="btn btn-primary" type="submit" value="Siguiente">

        </form>
    </div>
</body>

</html>