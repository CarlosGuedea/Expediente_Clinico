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

                    <h3>Historia Clinica</h3>

                    <strong><label for="exploracion_física">Presión Arterial:</label></strong>
                    <p><?php echo $resultado4[0]['presion_arterial'] ?> mmHg</p>

                    <strong><label for="exploracion_física">Frecuencia Cardiaca:</label></strong>
                    <p><?php echo $resultado4[0]['frecuencia_cardiaca'] ?> lpm</p>

                    <strong><label for="exploracion_física">Temperatura:</label></strong>
                    <p><?php echo $resultado4[0]['temperatura'] ?> °C</p>

                    <strong><label for="peso">Peso:</label></strong>
                    <p><?php echo $resultado4[0]['peso'] ?> kilogramos</p>

                    <strong><label for="talla">Talla:</label></strong>
                    <p><?php echo $resultado4[0]['talla'] ?> m</p>

                    <strong><label for="exploracion_física">IMC:</label></strong>
                    <p><?php echo $resultado4[0]['imc'] ?> </p>


                    <h4>Aparato Digestivo:</h4>

                    <?php foreach ($resultado5 as $digestivo) : ?>

                        <p><?php if ($digestivo['id_digestivo'] === 1) echo 'Disfagia';
                            else if ($digestivo['id_digestivo'] === 2) echo 'Odinofagia';
                            else if ($digestivo['id_digestivo'] === 3) echo 'Pirosis';
                            else if ($digestivo['id_digestivo'] === 3) echo 'Regurgitación';
                            else if ($digestivo['id_digestivo'] === 3) echo 'Constipación'; ?>

                        <?php endforeach; ?></p>

                        <h4>Aparato Respiratorio</h4>
                        <?php foreach ($resultado6 as $respiratorio) : ?>

                            <p><?php if ($respiratorio['id_respiratorio'] === 1) echo 'Obtrucción Nasal';
                                else if ($respiratorio['id_respiratorio'] === 2) echo 'Tos';
                                else if ($respiratorio['id_respiratorio'] === 3) echo 'Disfonia'; ?>

                            <?php endforeach; ?></p>

                            <h4>Aparato Urinario:</h4>

                            <?php foreach ($resultado7 as $urinario) : ?>

                                <p><?php if ($urinario['id_urinario'] === 1) echo 'Disuria';
                                    else if ($urinario['id_urinario'] === 2) echo 'Hematuria';
                                    else if ($urinario['id_urinario'] === 3) echo 'Pujo o tenesmo vesical'; ?>

                                <?php endforeach; ?></p>


                                <h3>Ginecoobstetricos</h3>

                                <strong><label for="edad_menarca">Edad menarca:</label></strong>
                                <p><?php echo $resultado8[0]['edad_menarca'] ?> años</p>

                                <strong><label for="ultima_regla">Fecha de Ultima Regla:</label></strong>
                                <p><?php echo $resultado8[0]['ultima_regla'] ?> </p>

                                <strong><label for="edad_inicio_vida_sexual">Edad de inicio de la vida sexual:</label></strong>
                                <p><?php echo $resultado8[0]['edad_inicio_vida_sexual'] ?> </p>

                                <strong><label for="embarazos">Embarazos:</label></strong>
                                <p><?php echo $resultado8[0]['embarazos'] ?> </p>

                                <strong><label for="partos">Partos:</label></strong>
                                <p><?php echo $resultado8[0]['partos'] ?> </p>

                                <strong><label for="abortos">Abortos:</label></strong>
                                <p><?php echo $resultado8[0]['abortos'] ?> </p>

                                <strong><label for="cesareas">Cesareas:</label></strong>
                                <p><?php echo $resultado8[0]['cesareas'] ?> </p>

                                <strong><label for="lactancia_materna">Lactancia Materna:</label></strong>
                                <p><?php echo $resultado8[0]['lactancia_materna'] ?> </p>

                                <strong><label for="papanicolaou">Papanicolaou:</label></strong>
                                <p><?php echo $resultado8[0]['papanicolaou'] ?> </p>

                                <strong><label for="parejas_sexuales">Número de parejas sexuales:</label></strong>
                                <p><?php echo $resultado8[0]['parejas_sexuales'] ?> </p>

                                <input class="btn btn-primary" type="submit" value="Siguiente">

        </form>
    </div>
</body>

</html>