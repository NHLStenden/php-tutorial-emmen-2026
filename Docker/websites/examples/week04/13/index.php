<pre><code>
<?php

/**
 * This function will add two integer numbers and will return the result of the addition
 * @param int $first
 * @param int $second
 * @return int
 */
function addNumbers(int $first, int $second): int
{
    return $first + $second;
}

/**
 * This function will join two strings together (also known as concatenate) and return a new string
 * @param string $first
 * @param string $second
 * @return string
 */
function mergeTwoStrings(string $first, string $second): string
{
    return $first . $second;
}

/**
 * This function will calculate the average of all integers in the given
 * @param array<int> $numbers
 * @return float
 */
function calcAverage(array $numbers): float
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

echo "------------------------------------------\n";

// dumb example: use an anonymous array in the function call.
echo "Average : [1,2,3,4,5,6,7,8,9,10]" .  calcAverage([1,2,3,4,5,6,7,8,9,10]) . "\n";

// better: use a variable and make it printable by joining the array with comma as separator.
$numbers = [2,3,4,5,6,3,2,2,4,5,3];
$listAsString = join(",", $numbers);
echo "Average : [$listAsString]" .  calcAverage($numbers) . "\n";

echo "------------------------------------------\n";

echo "Join two strings: " . mergeTwoStrings("abc", "def") . "\n";

?>
</code></pre>