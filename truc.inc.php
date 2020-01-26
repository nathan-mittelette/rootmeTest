<?php

echo myExec("ls");

echo "Start :<br/>";
echo file_get_contents("index.php");
echo "<br/>End";

function myExec($cmd) {
    $output = "";
    exec($cmd , $output);
    return $output;
}