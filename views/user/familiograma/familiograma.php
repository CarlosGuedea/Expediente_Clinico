<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div style="padding-left: 35%; background-color:gainsboro; padding-bottom: 20rem;">
        <h2>Familiograma</h2>
        <form id="formulario" action="/historia-familiograma" method="post">
            <div id="campos">
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre[]" required>
                </div>
                <div>
                    <label for="parentesco">Parentesco:</label>
                    <input type="text" name="parentesco[]" required>
                </div>
                <div>
                    <label for="relacion">Relación:</label><br>
                    <textarea name="relacion[]" rows="4" cols="50" required></textarea>
                </div>
            </div>
            <button type="button" id="agregarCampo">Agregar otro miembro de la familia</button>
            <br><br>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </form>
    </div>
    <script>
        $(document).ready(function() {
            // Manejador de evento para agregar un nuevo campo al hacer clic en el botón
            $("#agregarCampo").click(function() {
                $("#campos").append(`
                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre[]" required>
                    </div>
                    <div>
                        <label for="parentesco">Parentesco:</label>
                        <input type="text" name="parentesco[]" required>
                    </div>
                    <div>
                        <label for="relacion">Relación:</label><br>
                        <textarea name="relacion[]" rows="4" cols="50" required></textarea>
                    </div>
                `);
            });
        });
    </script>
</body>

</html>