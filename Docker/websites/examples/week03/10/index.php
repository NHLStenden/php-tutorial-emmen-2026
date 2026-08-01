<pre><code>
<?php

function addNumbers(int $first, int $second): int
{
    return $first + $second;
}

function mergeToStrings(string $first, string $second): string
{
    return $first . $second;
}

function calcAverage(array $numbers): int
{
    return array_sum($numbers) / count($numbers);
}


/**
 * Notice that this function has no return type! It will add two numbers and present the result to the user
 * @param int $first
 * @param int $second
 * @return void
 */
function addAndEchoNumbers(int $first, int $second): void
{
    $c = addnumbers($first, $second);
    echo "$first + $second = $c\n";
}

$a = 10;
$b = 20;
$c = addNumbers($a, $b);

echo "$c\n";


addAndEchoNumbers($a, $b);

?>
</code></pre>