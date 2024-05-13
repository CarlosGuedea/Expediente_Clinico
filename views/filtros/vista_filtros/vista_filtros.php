
<div class="container">
        <h2>Resultados de Filtros</h2><br><br>
        <h2>Consultas de primera vez</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Carrera</th>
                    <th>Género</th>
                    <th>Cantidad de Personas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $row) : ?>
                    <tr>
                        <td><?php echo $row['carrera']; ?></td>
                        <td><?php if($row['genero']=== 0 ) echo 'Masculino';
                                    else if ($row['genero']=== 1 ) echo 'Femenino';?></td>
                        <td><?php echo $row['cantidad_personas']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Consultas de seguimiento</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Carrera</th>
                    <th>Género</th>
                    <th>Cantidad de Personas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado2 as $row) : ?>
                    <tr>
                        <td><?php echo $row['carrera']; ?></td>
                        <td><?php if($row['genero']=== 0 ) echo 'Masculino';
                                    else if ($row['genero']=== 1 ) echo 'Femenino';?></td>
                        <td><?php echo $row['cantidad_personas']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>