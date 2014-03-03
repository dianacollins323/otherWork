<?php

$fileName = $argv[1];

$fileContents = fopen($fileName, 'r');

while($line = fgets($fileContents)) {

    $ln = trim($line);
    if ($ln != '') {
        $lineArray = explode(" ", $ln);
        $a = $lineArray[0];
        $b = $lineArray[1];
        $n = $lineArray[2];
        $newLine = "";

        for ($count=1; $count<=$n; $count++) {
            if (($count%$a)==0 && ($count%$b)==0) {
                $newLine .= "FB" . " ";
            }
            elseif (($count%$a)==0) {
                $newLine .= "F" . " ";
            }
            elseif (($count%$b)==0) {
                $newLine .= "B" . " ";
            }
            else {
                $newLine .= $count . " ";
            }
        }

        $output = trim($newLine) . "\n";

        fwrite(STDOUT, $output);
    }

}

?>