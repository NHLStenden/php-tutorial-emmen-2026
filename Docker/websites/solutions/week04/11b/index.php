<?php
$areacodes = [14, 26, 12, 58, 34, 66, 7, 41];

/**
 * Uses a WHILE loop to check if a number $x occurs in the list given. If the number is present it returns 'success',
 * otherwise 'fail'.
 * @param int $x
 * @param array $list
 * @return string
 */
function find(int $x, array $list): string
{
    $i         = 0;
    $nrOfItems = count($list);
    $found     = false;

    while (!$found && $i < $nrOfItems) {
        $found = ($x === $list[$i]);
        $i++;
    }
    return $found ? "success" : "fail";
}

/**
 * This function uses a foreach-loop to find the items $x in the list
 * @param int $x
 * @param array $list
 * @return string
 */
function find2(int $x, array $list): string
{
    $found = false;
    foreach ($list as $item) {
        $found = ($x === $item) || $found;
    }
    return $found ? "success" : "fail";
}

/**
 * This function uses a for-loop combined with a break to abort the loop.
 * @param int $x
 * @param array $list
 * @return string
 */
function find3(int $x, array $list): string
{
    $nrOfItems = count($list);
    $found     = false;
    for ($i = 0; $i < $nrOfItems; $i++) {
        $found = ($x === $list[$i]);
        if ($found) {
            break;
        }
    }
    return $found ? "success" : "fail";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment week 4 - 2</title>
</head>
<body>
<pre><code>

    Search 10 = <?= find(10, $areacodes) ?>

    Search 10 = <?= find(10, []) ?>

    Search 10 = <?= find2(10, []) ?>

    Search 12 = <?= find2(12, $areacodes) ?>

    Search 10 = <?= find2(10, $areacodes) ?>

    Search 12 = <?= find3(12, $areacodes) ?>

    Search 10 = <?= find3(10, $areacodes) ?>

</code></pre>
</body>
</html>
