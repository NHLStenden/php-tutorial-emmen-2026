<?php
$areacodes = [14, 26, 12, 58, 34, 66, 7, 41];

function findHighest(array $list): int
{

    $highest = 0;
    foreach ($list as $item) {
        if ($item > $highest) {
            $highest = $item;
        }
    }
    return $highest;
}

function findHighest2(array $list): int
{
    rsort($list, SORT_NUMERIC);
    if (count($list) === 0) {
        return 0;
    }
    return $list[0];
}

function findHighest3(array $list): int | false
{
    rsort($list, SORT_NUMERIC);
    if (count($list) === 0) {
        return false;
    }
    return $list[0];
}

$highest1 = findHighest($areacodes);
$highest2 = findHighest2($areacodes);
$highest3 = findHighest3($areacodes);
$highest4 = findHighest3([]);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment week 4 - 2</title>
</head>
<body>
<pre><code>
    Highest1 = <?= $highest1 ?>;

    Highest2 = <?= $highest2 ?>

    Highest3 = <?= ($highest3 === false) ? 'empty array' : $highest3 ?>

    Highest4 = <?= ($highest4 === false) ? 'empty array' : $highest4 ?>

</code></pre>
</body>
</html>
