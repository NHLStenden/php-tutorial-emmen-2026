<?php

/**
 * Calculates the fibonacci sequence up until the given parameter $x
 * 0, 1, 1, 2, 3, 5, 8, 13, 21, 34,....
 * @param int $x
 * @return array
 */
function fib1(int $x): array
{
    $result = [];
    $prev1  = 0;
    $prev2  = 0;

    for ($i = 0; $i < $x; $i++) {
        if ($i === 0) {
            $value = 0;
        }
        if ($i === 1) {
            $value = 1;
        } else {
            $value = $prev1 + $prev2;
        }
        $result[] = $value;
        $prev2    = $prev1;
        $prev1    = $value;
    }
    return $result;
}

function fib2(int $x): array
{
    $result = [];
    $prev1  = 0;
    $prev2  = 0;

    for ($i = 0; $i < $x; $i++) {
        switch ($i) {
            case 0:
                $value = 0;
                break;
            case 1:
                $value = 1;
                break;
            default:
                $value = $prev1 + $prev2;
        }
        $result[] = $value;
        $prev2    = $prev1;
        $prev1    = $value;
    }
    return $result;
}

function fib3_one_item(int $x): int
{
    if ($x === 0) {
        return 0;
    } else if ($x === 1 || $x === 2) {
        return 1;
    } else return fib3_one_item($x - 1) + fib3_one_item($x - 2);
}

function fib3(int $x): array {
    $result = [];
    for($i=0;$i<$x;$i++) {
        $result[] = fib3_one_item($i);
    }
    return $result;
}

$x = join(',', fib1(10));
$y = join(',', fib2(10));
$z = join(',', fib3(10));

?>
<!doctype html>
<html lang="en">
<head>
    <title>Fibonacci</title>
</head>
<body>
<pre><code>

    <?= $x ?>
    <?= $y ?>
    <?= $z ?>

    </code>
</pre>
</body>
</html>
