<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente Clínico</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/views/user/historias/historias.css">

    <!-- CSS de DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

</head>
</head>

<body>

    <div style="padding-bottom: 10rem;">
        <div>
            <a href="/cerrar-sesion">Cerrar sesión</a>
        </div>

        <div style="text-align:center">
            <h1>Tabla de historias clínicas</h1>
        </div>

        <div class="container">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>ID estudiante</th>
                        <th>Número de control</th>
                        <th>Nombre</th>
                        <th>Carrera</th>
                        <th>Generales</th>
                        <th>Medicina</th>
                        <th>Nutrición</th>
                        <th>Psicología</th>
                        <th>Seguimiento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $row) :
                        $general = consultarGeneral($row['id_estudiante']);
                        $medicina = consultarMedicina($row['id_estudiante']);
                        $nutricion = consultarNutricion($row['id_estudiante']);
                        $psicologia = consultarPsicologia($row['id_estudiante']);
                        $id_estudiante = $row['id_estudiante'];
                        $seguimiento = consultarSeguimiento($row['id_estudiante']);
                    ?>
                        <tr>
                            <td><?php echo $row['id_estudiante']; ?></td>
                            <td><?php echo $row['numero_control']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['carrera']; ?></td>
                            <td>
                                <form action="<?php echo 'vista-' . 'Generales' ?>" method="post">
                                    <!-- Agrega un campo oculto para enviar el ID de la historia -->
                                    <input type="hidden" name="id_estudiante" value="<?php echo $general; ?>">
                                    <!-- Agrega un botón de envío que parezca un enlace -->
                                    <button type="submit" class="btn btn-submit" style="background-color:cornflowerblue;"">Consultar</button>
                                </form>
                            </td>
                            <td> <!--  MEDICINA -->
                                <!-- Verifica si hay un registro de historia de medicina -->
                                <?php if ($medicina > 0) : ?>
                                    <!-- Si hay un registro, muestra un mensaje -->
                                    <form action=" <?php echo 'vista-' . 'Medicina' ?>" method="post">
                                        <!-- Agrega un campo oculto para enviar el ID de la historia -->
                                        <input type="hidden" name="id_estudiante" value="<?php echo $general; ?>">
                                        <!-- Agrega un botón de envío que parezca un enlace -->
                                        <button type="submit" class="btn btn-submit" style="background-color:cornflowerblue;"">Consultar</button>
                                    </form>
                                <?php else : ?>
                                    <!-- Si no hay un registro, muestra otro mensaje -->
                                    No existe registro
                                <?php endif; ?>
                            </td>
                            <td> <!--  Nutricion -->
                                <!-- Verifica si hay un registro de historia de medicina -->
                                <?php if ($nutricion > 0) : ?>
                                    <!-- Si hay un registro, muestra un mensaje -->
                                    <form action=" <?php echo 'vista-' . 'Nutrición' ?>" method="post">
                                            <!-- Agrega un campo oculto para enviar el ID de la historia -->
                                            <input type="hidden" name="id_estudiante" value="<?php echo $general; ?>">
                                            <!-- Agrega un botón de envío que parezca un enlace -->
                                            <button type="submit" class="btn btn-submit" style="background-color:cornflowerblue;">Consultar</button>
                                </form>
                            <?php else : ?>
                                <!-- Si no hay un registro, muestra otro mensaje -->
                                No existe registro
                            <?php endif; ?>
                            </td>
                            <td><!--  Psicologia -->
                                <!-- Verifica si hay un registro de historia de medicina -->
                                <?php if ($psicologia > 0) : ?>
                                    <!-- Si hay un registro, muestra un mensaje -->
                                    <form action="<?php echo 'vista-' . 'Psicologia' ?>" method="post">
                                        <!-- Agrega un campo oculto para enviar el ID de la historia -->
                                        <input type="hidden" name="id_estudiante" value="<?php echo $general; ?>">
                                        <!-- Agrega un botón de envío que parezca un enlace -->
                                        <button type="submit" class="btn btn-submit" style="background-color:cornflowerblue;">Consultar</button>
                                    </form>
                                <?php else : ?>
                                    <!-- Si no hay un registro, muestra otro mensaje -->
                                    No existe registro
                                <?php endif; ?>
                            </td>
                            <td>
                                 <!-- Verifica si hay un registro de historia de medicina -->
                                 <?php if ($seguimiento > 0) : ?>
                                    <!-- Si hay un registro, muestra un mensaje -->
                                    <form action="<?php echo 'vista-' . 'Seguimiento' ?>" method="post">
                                        <!-- Agrega un campo oculto para enviar el ID de la historia -->
                                        <input type="hidden" name="id_estudiante" value="<?php echo $row['id_estudiante'] ?>">
                                        <!-- Agrega un botón de envío que parezca un enlace -->
                                        <button type="submit" class="btn btn-submit" style="background-color:cornflowerblue;">Consultar</button>
                                    </form>
                                <?php else : ?>
                                    <!-- Si no hay un registro, muestra otro mensaje -->
                                    No existe registro
                                <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>



        <div>
            <a href="/nueva-historia-credenciales"><button class="btn btn-primary">Crear historia</button></a>
            <a href="/formulario-filtros"><button class="btn btn-secondary">Filtros</button></a>
        </div>
    </div>

    <!-- JavaScript de DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>