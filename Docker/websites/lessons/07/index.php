<pre><code>
<?php

/**
 * @param int $x
 * @param int $y
 * @return int
 */
function calc(int $x, int $y): int {
    echo "x = $x | y =$y" . PHP_EOL;
    return $x + $y;
}

$x = "1.2";
$y = 5;

// type conversion from string to integer is "coerced".
if ($x == $y) {
    echo "Yes";
} else {
    echo "No";
}
echo str_repeat("-", 50) . PHP_EOL;

// now PHP will first check the types ; they are different and it will fail
if ($x === $y) {
    echo "Yes";
} else {
    echo "No";
}

echo str_repeat("-", 50) . PHP_EOL;

$d = calc($x, $y);
echo $d . PHP_EOL;

// this works because 1.0 === 1 (int)
$p = 1.0;
$q = 10;

$e = calc($p, $q);
echo $e . PHP_EOL;

// (int)53.5 === (int) 53;
$s = (int) 53.9;
$t = 10;
$u = calc($s, $t);
echo $u . PHP_EOL;

$l = intval(53.9);
$m = 10;
$n = calc($l, $m);
echo $n . PHP_EOL;

?>
</code></pre>
