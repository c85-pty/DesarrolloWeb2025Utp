<div style="width: 100%;background-color: green;">
    <div style="margin: auto;text-align: center;">
        <h1>
            HEADER UTP CLASS
        </h1>
    </div>
</div>

<hr>
<?php

function function1()
{
    echo "#$a#"; // does nothing, $a is out of scope
    global $a; // gain access to $a within function
    echo $a; // prints 4
}
// some code
$a = 4; // $a is a global variable
function1();

$ed = 42;
if(is_integer($ed))
    echo "<br/>El \"ed\" es $ed integer.<br/>";

?>