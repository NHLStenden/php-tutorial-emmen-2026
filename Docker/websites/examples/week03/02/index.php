<pre><code>
<?php

/**
 * Divides the first number by the second. If the second number is zero, NULL is returned.
 * @param float $first
 * @param float $second
 * @return float|null
 */
function divide(float $first, float $second): float|null
{
    echo "Type of first is " . gettype($first) . ": $first\n";
    echo "Type of second is " . gettype($second) . ": $second\n";
    if ($second == 0) {
        return null;
    }
    return $first / $second;
}

# Try one of these values by removing the comment # character at ONE LINE
#$a = "";  # This cannot be converted to a float ==> yields an error
$a = "0";
#$a = "10";
#$a = 10.3;

# Try to assign zero to $b to force the test for division by zero.
$b = 20;

echo "Type of a is " . gettype($a) . "\n";
echo "Type of b is " . gettype($b) . "\n";
echo "--------------------------------------\n";

/**
 * When calling the divide function PHP will try to coerce the variable $a to a float!
 */
$c = divide($a, $b);

echo "--------------------------------------\n";
echo "Type of c is " . gettype($c) . "\n";

if (!is_null($c)) {
    echo "Result = $c";
} else {
    echo "No value calculated\n";
}


?>
</code></pre>