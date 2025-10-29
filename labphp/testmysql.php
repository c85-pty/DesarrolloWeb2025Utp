

 <?php
    $servername = "localhost";
    $username = "root";!
    $password = "my-secret-pw.";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";


    /*
    // Create connection
    $conn1 = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn1) {
        die("Connection failed mysqli_connect : " . mysqli_connect_error());
    }
    echo "Connected successfully mysqli_connect";*/


    $conn->close();
    //$conn1->close();

    ?> 