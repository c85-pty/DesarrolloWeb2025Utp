<?php
require('config.php');
include('style.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>HOLA FORMULARIO</title>

    <style>
        div.main {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <div>
        <?php
        echo $USER;
        echo "<br/>";
        echo usuario;
        ?>
        <h1>OPERADOR ENVIADOR DE DATOS</h1>
        <form action="hola.php" method="GET">
            <label for="CAJA1">DATO</label>
            <input type="text" id="CAJA1" name="CAJA1" />
            <input type="submit" value="ENVIAR" />
        </form>
    </div>

    <?php
    include('foot.php');
    ?>

</body>

</html>