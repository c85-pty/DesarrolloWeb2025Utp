<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Bienvenida</title>
</head>
<body>
    <h2>Ingresa tus datos</h2>
    <form action="welcome.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo electr&oacute;nico:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>