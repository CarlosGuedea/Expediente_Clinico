<!-- HEADER PARA TODAS LAS ESTRUCTURAS DE CONTROL -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/user/vista_psicologia/vista-psicologia.css">
</head>

<body>



    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 10rem;">
        <form action="/nueva-historia-general" method="post">

            <h3>Historia Psicologica</h3>

            <strong><label for="derivacion">Derivación:</label></strong>
            <p><?php echo $resultado4[0]['derivacion']; ?></p>


            <strong><label for="problematica">Problematica:</label></strong>
            <p><?php echo $resultado4[0]['problematica']; ?></p>


            <strong><label for="comportamiento">Comportamiento:</label></strong>
            <p><?php echo $resultado4[0]['comportamiento']; ?></p>


            <strong><label for="tono_voz">Tono de voz:</label></strong>
            <p><?php echo $resultado4[0]['tono_voz']; ?></p>


            <strong><label for="imagen_personal">Imagen personal:</label></strong>
            <p><?php echo $resultado4[0]['imagen_personal']; ?></p>


            <strong><label for="dificultad_academica">Dificultad Academica:</label></strong>
            <p>
                <?php if ($resultado4[0]['dificultad_academica'] == 0) echo 'No';
                else if ($resultado4[0]['dificultad_academica'] == 1) echo 'Sí'; ?></p>


            <strong><label for="areas_mejora">Areas de mejora:</label></strong>
            <p><?php echo $resultado4[0]['areas_mejora']; ?></p>


            <strong><label for="trabajo">¿Trabaja?</label></strong>
            <p>
                <?php if ($resultado4[0]['trabajo'] == 0) echo 'No';
                else if ($resultado4[0]['trabajo'] == 1) echo 'Sí'; ?></p>


            <strong><label for="fecha_inicio_trabajo">Fecha de inicio del trabajo:</label></strong>
            <p><?php echo $resultado4[0]['fecha_inicio_trabajo']; ?> </p>


            <strong><label for="fecha_inicio_trabajo">¿Cómo ha sido tu experiencia laboral?</label></strong>
            <p><?php echo $resultado4[0]['experiencia_laboral']; ?> </p>

            <strong><label for="fecha_inicio_trabajo">¿Cómo te describirías a ti mismo?</label></strong>
            <p><?php echo $resultado4[0]['experiencia_laboral']; ?> </p>


            <h3>Aspectos relacionales</h3>

            <strong><label for="pareja">¿Tiene o ha tenido pareja?</label></strong>
            <p>
                <?php if ($resultado4[0]['pareja'] == 0) echo 'No';
                else if ($resultado4[0]['pareja'] == 1) echo 'Sí'; ?></p>


            <strong><label for="tiempo_relacion">¿Tiempo de relación y duración de las relaciones anteriores?</label></strong>
            <p><?php echo $resultado4[0]['tiempo_relacion']; ?> </p>


            <strong><label for="importancia_relacion">¿Importancia de la relación?</label></strong>
            <p><?php echo $resultado4[0]['importancia_relacion']; ?> </p>


            <strong><label for="descripcion_relacion">Descripción de la relación:</label></strong>
            <p><?php echo $resultado4[0]['descripcion_relacion']; ?> </p>


            <strong><label for="descripcion_pareja">Descripción de la pareja:</label></strong>
            <p><?php echo $resultado4[0]['descripcion_pareja']; ?> </p>



            <h3>Amistades</h3>

            <strong><label for="amistades">¿Tiene amigos?</label></strong>
            <p>
                <?php if ($resultado4[0]['amistades'] == 0) echo 'No';
                else if ($resultado4[0]['amistades'] == 1) echo 'Sí'; ?></p>


            <strong><label for="relaciones_significativas">Relaciones siginificativas:</label></strong>
            <p><?php echo $resultado4[0]['relaciones_significativas']; ?> </p>


            <strong><label for="apoyo_amigos">¿De qué manera te has apoyado en ellos?</label></strong>
            <p><?php echo $resultado4[0]['apoyo_amigos']; ?> </p>


            <strong><label for="opinion_amigos_problema">¿Qué dicen de la problemática que estas viviendo?</label></strong>
            <p><?php echo $resultado4[0]['opinion_amigos_problema']; ?> </p>


            <h3>Familiograma</h3>

            <!-- Comienza un bucle foreach para iterar sobre los resultados -->
            <?php foreach ($resultado2 as $row) : ?>
                <div>
                    <!-- Muestra los datos de cada fila -->
                    <strong>Nombre: </strong><?php echo $row['nombre']; ?><br>
                    <strong>Parentesco: </strong><?php echo $row['parentesco']; ?><br>
                    <strong>Relación: </strong><?php echo $row['relacion']; ?><br><br>
                    <!-- Agrega más campos según sea necesario -->
                </div>
            <?php endforeach; ?>


    <input class="btn btn-primary" type="submit" value="Siguiente">

    </form>
    </div>
</body>

</html>