<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/views/login/login.css">
</head>
<body>


<article id="content">
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <div style="color:red">
            <p> <?php error_reporting(0);
                echo $Error; ?> </p>
        </div>
        <form action="/login-admin" method="post">
            <div class="form-group">
                <label for="usuario">Email:</label>
                <input type="text" id="usuario" name="nombre_usuario" required />
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contrasena" name="contraseña" required />
            </div>
            <button type="submit">Ingresar</button>
        </form>
        
    </div>
</article>

</body>
</html>