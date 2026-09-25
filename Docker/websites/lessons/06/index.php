<pre><code>
<?php

function calculator(float $a, float $b): string {
    $result = $a + $b;
    $stringResult = strval($result);

    return $stringResult;
}

function calculatorInt(int $a, int $b): string {
    $result = $a + $b;
    $stringResult = strval($result);

    return $stringResult;
}


$a = 7.0;
$b = 6.1;
$c = calculator($a, $b);
$d = calculatorInt($a, $b);

echo "$c\n";
echo "$d\n";

?>

        </code></pre>
