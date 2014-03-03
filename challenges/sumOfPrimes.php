<?php
$count = 0;
$primes = 0;
$sqrt = 0;
$answer = 0;
$pr = 0;

while ($primes < 1000) {
    $found = isPrime($count);
    if ($found == true) {
        $pr = $count;
        $primes++;
        $answer += $count;
        $count++;
    }
    else {
        $count++;
    }
}
echo $answer;

function isPrime($num) {
    $remainder = 0;

    if ($num < 2) {
        $prime = false;
    }
    else {
        $sqrt = pow($num, (1/2));

        if ($sqrt < 2) {
            $prime = true;
        }
        else {
            $sqrt = floor($sqrt);

            for ($i = 2; $i <= $sqrt; $i++) {
                if (($num % $i) == 0) {
                    $remainder++;
                }
            }

            if ($remainder == 0) {
                $prime = true;
            }
            else {
                $prime = false;
            }
        }
    }

    return $prime;
}

?>