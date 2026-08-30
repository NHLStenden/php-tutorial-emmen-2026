<pre><code>
<?php

function calc(int $a, int $b): int
{
    $result = $a + $b;

    return $result;
}


// function scope isolates variables. so the $a and $b are two complete different things from the one further down.
function calc2(int $a, int $b): int
{
    $a = $a + 1;
    $b = $b + 1;
    return $a * $b;
}

// This function does two things: calculate and return the result, but also echo the result to the website. Normally
// this is not good practice and should be avoided!
function calcAndEcho(int $a, int $b): int {
    $result = $a + $b;
    echo "calcAndEcho Result: $result\n";
    return $result;
}

$a = 1;
$b = 2;
$c = calc($a, $b);
$d = calc2($a, $b);

print("$a + $b = $c\n");

// notice that $a and $b are unchanged, despite calling the calc2 function
print("($a + 1) * ($b + 1) = $d\n");

$e = calcAndEcho($a, $b);
print("$a + $b = $e\n");


// scope handling is different
if ($a === 2) {
    $i = 0;
} else {
    $i = 1;
}
echo $i;

$var    = [1, 2, 3, 4,];
$sorted = sort($var);

/**
 * Will output the values and return 1. Notice that boolean values are displayed as 1 (TRUE) or zero (FALSE)
 * @param int $a
 * @param int $b
 * @param bool $low
 * @param bool $high
 * @return int
 */
function doSomething(int $a, int $b, bool $low=true,bool $high=false): int {
    printf("a:%d | b:%d | low:%d | high:%d\n", $a, $b, $low, $high);
    return 1;
}
function echoLine(): void
{
    echo "\n" . str_repeat("-", 100) . "\n";
}

echoLine();
// valid ways to call this function:
$x = doSomething(1,2);
$x = doSomething(1,2, true);
$x = doSomething(1,2, true, true);
$x = doSomething(1,2, false);
$x = doSomething(1,2, false, false);
$x = doSomething(b:1,a:2, low:false);
$x = doSomething(1,2, low:false);

echoLine();

?>

</code></pre>

