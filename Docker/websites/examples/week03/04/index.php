<?php

/**
 * Divides the first number by the second. If the second number is zero, NULL is returned.
 * @param float $first
 * @param float $second
 * @return float|null
 */
function divide(float $first, float $second): float|null
{
    if ($second == 0) {
        return null;
    }
    return $first / $second;
}

$a = 10.3;
$b = 20.2;
$c = divide($a, $b);

if (!is_null($c)) {
    echo $c;
} else {
    echo "No value calculated";
}




