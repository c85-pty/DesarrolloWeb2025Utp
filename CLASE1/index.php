<?php
include('config.php')
?>

<!DOCTYPE html>
<html>

<head></head>

<body>

    <h1> <?php echo "HOLA MUNDO"; ?> </h1>
    <?php //echo '<h1>"HOLA MUNDO"</h1>'; 
    ?>
    <hr>

    <?php

    //echo SERVIDORBD;

    $servername = SERVIDORBD;
    $username = usuario;
    $password = pass;
    $db = DBNAME;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully!<br/>";
    //print_r($conn);


    $sql = "SELECT id, nombre, cid FROM tb_estudiante";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table border=\"1\">";
        echo "<tr>   
        <td>ID</td>  
        <td>NOMBRE</td>  
        <td>CID</td>  
        <td>BOTON</td>    
        </tr>";

        while ($row = $result->fetch_assoc()) {
        ?>
                <form action="test.php" method="post">
                    <?php
                    echo "<tr>";
                    
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["cid"] . "</td>";
                    
                    echo "<td>";

                    ?>
                    <input type="hidden" 
                    id="javascript" 
                    class="css"
                    name="nombre" 
                    value="<?php echo $row["nombre"]; ?>">

                    <input type="hidden" name="cid" 
                    value="<?php echo $row["cid"]; ?>">

                    <input type="hidden" name="id" 
                    value="<?php echo $row["id"]; ?>">
                    
                    <input type="submit" value="VER">
                    <?php
                    echo "</td>";
                    echo "</tr>";
                    ?>
                </form>
        <?php
        }

        echo "</table>";
    } else {
        echo "0 results<br/>";
    }
    $conn->close();

    ?>
</body>

</html>