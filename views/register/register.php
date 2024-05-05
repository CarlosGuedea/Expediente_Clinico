<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/register/register.css">
</head>

<body>
    <article id="content">
        <div class="login-container">
            <h2>Registrarse</h2>
            <div style="color:red">
                <p> <?php error_reporting(0);
                    echo $Error; ?> </p>
            </div>

            <form method="Post" action="/registro">
                <div class="form-group">
                    <label for="usuario">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required />
                </div>
                <div class="form-group">
                    <label for="usuario">Correo:</label>
                    <input type="email" id="correo" name="correo" required />
                </div>
                <div class="form-group">
                    <label for="campo_salud">Campo de Salud:</label>
                    <select id="campo_salud" name="campo_salud" required>
                        <option value="Medicina">Medicina</option>
                        <option value="Nutrición">Nutrición</option>
                        <option value="Psicología">Psicología</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required />
                </div>
                <button type="submit">Registrarse</button>
            </form>

        </div>
    </article>
</body>

</html>