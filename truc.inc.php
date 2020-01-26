<?php

echo myExec("ls");

function myExec($cmd) {
    $output = "";
    exec($cmd , $output);
    return $output;
}