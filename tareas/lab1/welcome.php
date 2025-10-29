<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h2>Datos recibidos</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST["nombre"]);
            $correo = htmlspecialchars($_POST["correo"]);

            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Correo electr&oacute;nico:</strong> $correo</p>";
        } else {
            echo "<p>No se han recibido datos.</p>";
        }
    ?>
</body>
</html>