<?php

$string = "ls ";
$i = 0;

while($i < 7) {
echo "-----------------<br/>";
    echo exec($string);
    $i++;
    $string = $string . "../";
}

?>
