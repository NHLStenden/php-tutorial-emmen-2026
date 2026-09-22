<pre><code>
<?php

function calc(int $x, int $y): int
{
    echo "calc: $x / $y\n";
    return $x * $y;
}

function calc2(int $x, int $y = 4): int
{
    return $x / $y;
}

$a = 10.1;
$b = 2;

// warning: no longer allowed to implicitly convert a float to an integer
$c = calc($a, $b);

$p = 10.0; // $a is now (again) a float
$q = 2;
// this does work, because when converting from 10.0 to 10 (int) there is no loss
$c = calc($p, $p);

$e = 4;
$f = 2;
$g = calc2($e, $f);
$h = calc2($e);

echo $c . "\n " . $g . "\n" . $h;

// explicit type check!
echo (("42" === $e) ? "yes" : "no") . "\n";

// implicit type conversion! the string is converted to 42 and it is true
if ("42" == 42) echo "yes";
else echo "no";
echo "\n";
echo "-------------------\n";

// examples : working with large numbers
$n1 = PHP_INT_MAX;
echo $n1 . "\n";

//$n1+1 does not fit in an integer, so PHP will cast to a float. But the (int) typeconversion will create an integer overflow.
$n2 = (int)($n1 + 1);
echo $n2 . "\n";

// if left on its own, the conversion is visible in the output from the function below.
var_dump(PHP_INT_MAX + 1);

?>
        </code></pre>
