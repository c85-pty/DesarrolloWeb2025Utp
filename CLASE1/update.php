<?php
include('config.php');

$servername = SERVIDORBD;
$username = usuario;
$password = pass;
$db = DBNAME;

//echo $servername;

$conn = new mysqli($servername
, $username, $password
, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully!<br/>";

//PAGINA DE UPDATE 

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cid = $_POST['cid'];

$queryUpdate = "UPDATE tb_estudiante 
SET nombre = '$nombre' 
, cid = '$cid' 
WHERE id = $id";

$ElResultadoDelUpdate = $conn->query($queryUpdate);

echo $queryUpdate;
echo "<br/>";
echo $ElResultadoDelUpdate;

if($ElResultadoDelUpdate){
    echo "El registro ha sido actualizado exitosamente!";
    echo '<a href="index.php"> IR AL MENU </a>';
} else {
    echo "Error, no se pudo actualizar";
}

$conn->close();

?>
