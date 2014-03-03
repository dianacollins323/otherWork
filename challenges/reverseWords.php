<?php

$fileName = $argv[1];

$fileContents = fopen($fileName, 'r');

while($line = fgets($fileContents)) {

    $lineReverse = "";
    $ln = trim($line);
    if ($ln != '') {
        $lineArray = explode(" ", $ln);
        $wordCount = count($lineArray);
        for ($i = 0; $i <= $wordCount; $i++) {
            $lineReverse .= array_pop($lineArray) . " ";
        }

        $newLine = trim($lineReverse) . "\n";

        fwrite(STDOUT, $newLine);
    }

}

?>
