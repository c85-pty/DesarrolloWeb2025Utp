<?php //INICIA

header('Cache-Control: max-age=3600, public');

/* set the cache limiter to 'private' */

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

echo "The cache limiter is now set to $cache_limiter<br />";

//FIN
?>


<!DOCTYPE html>
<html>

<head>
    <title>MI PAGINA PHP WEB</title>
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />


    <link rel="stylesheet" href="../ClaseHTML/estilo.css">
</head>

<body>

<div class="info">
    This report details a comprehensive VAPT conducted on the web application hosted at http://testphp.vulnweb.com/, a deliberately vulnerable site designed for security testing. The assessment identified multiple vulnerabilities, including SQL injection, cross-site scripting (XSS), and weak authentication mechanisms. Simulated exploitation confirmed the presence of these issues, highlighting significant risks such as unauthorized data access and potential system compromise. Recommendations are provided to mitigate these vulnerabilities and enhance the application’s security posture.
</div>

<center>p</center>

    <div style="display: flex;
  justify-content: center;
  align-items: center;">
        <div class="caja">
            <h1>MI PRIMERA PAGINA PHP</h1>
            <hr>
            <?php
            $RESULTADO = "CALCULADORA";
            $RESULTADO = 5;
            if($RESULTADO==0){
                
            }
            echo "HOLA MUNDO: $RESULTADO <br/>";
            echo 'HOLA'.$RESULTADO;
            //$RESULTADO = 5;
            //echo "<br/>RESULTADO: $RESULTADO";

            if (isset($_POST['num1'])) {
                if (empty($_POST['num1'])) {
            ?>

                    <script>
                        alert('USUARIO, TE FALTAN DATOS');
                    </script>

            <?php
                } else {
                    echo "<span>";
                    SUMAPHP($_POST['num1'], $_POST['num2']);
                    echo "</span>";
                }
                echo "EL VALOR ES: " . $_POST['num1'];
            }

            function SUMAPHP($a, $b)
            {
                $suma = $a + $b;
                echo "ESTOY RETORNANDO EL RESULTADO: $suma";
            }
            ?>
            <div class="suma">
                <form method="POST" action="index.php">
                    <input type="text" id="num1" name="num1">
                    <input type="text" id="num2" name="num2">
                    <input type="submit" value="SUMAR">
                </form>
            </div>

        </div>
    </div>

    <div style="background-color:lavender; height: 300px; display: grid; place-items: center;">
        <div style="background-color: lightgreen; width: 200px; height: 100px;padding:20px;text-align:center">
            I'm grid-centered!
        </div>
    </div>

    <?php
        include('foot.php');
    ?>


</body>

</html>