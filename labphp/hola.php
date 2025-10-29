<!DOCTYPE html>
<html>

<head>

    <script type="text/javascript">
        //document.write("<a href='index2.html'>RETROCEDER</a>");
    </script>

</head>

<body>
    <?php
        include('header.php');
        include('ejemplo.inc');
        require('test/libreria.inc');
    ?>
    <h1>HOLA PRUEBA DE DATOS</h1>

    <hr>
    <H2>OPERADOR RECEPTOR DE DATOS</H2>
    <hr>
    <a href='index2.php'>RETROCEDER</a>

    <!--<script language="php">
        echo 'Algunos editores (como FrontPage) sólo entienden este
        delimitador ';
    </script>-->

    <?php

    //COMENTARIO

    $GET_[''];
    $GET_[''];
    
    if (isset($_GET["CAJA1"])) {  //isset VALIDA SI EXISTE
        if (!empty($_GET["CAJA1"])) // empty VALIDA SI ESTA VACIO ! = not
            echo "HOLA PHP, " . " PTY: " . $_GET["CAJA1"];
        else
            echo "NO HAY DATA";
            echo '';
    } else {
        echo "NO EXISTE";
    }

    ?>

</body>

</html>