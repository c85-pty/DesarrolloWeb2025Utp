<html>

<head>

</head>

<body>
    <div>
        <form action="update.php" method="post">
            <?php //echo $_POST['id']; ?>

            <input type="hidden" name="id" 
                    value="<?php echo $_POST['id']; ?>">

            <label for="nombre">Nombre:</label>
            <?php echo '<input type="text" name="nombre" value="' . $_POST['nombre'] . '" />'; ?>

            <br />
            <label for="cid">CID:</label>
            <?php echo '<input type="text" name="cid" value="' . $_POST['cid'] . '" />'; ?>

            <br />
            <input type="submit" value="ACTUALIZAR">

        </form>
    </div>

</body>

</html>