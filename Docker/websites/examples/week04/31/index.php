<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memory usage - Pass by value</title>
</head>
<body>
<h1>memory usage - Pass by value</h1>
<pre><code>
<?php
include_once './functions.lib.php';

$startMemoryUsage = memory_get_usage();
echo "Main 1 - start: " . number_format($startMemoryUsage) . PHP_EOL;

$nrOfItemsInArray = 100000;
$list = array_fill(0, $nrOfItemsInArray, 0);

$currentMemoryUsage = memory_get_usage();
echo "Main 2 - array created: delta = " . number_format($currentMemoryUsage - $startMemoryUsage) . PHP_EOL;

$list2 = passByValue($list, $currentMemoryUsage);
$sum = array_sum($list2);

$updatedMemoryUsage = memory_get_usage();
echo "Main 3 - returned: delta = " . number_format($updatedMemoryUsage - $currentMemoryUsage) . PHP_EOL;
echo "sum: " . $sum . " / check: must be $nrOfItemsInArray => " . (($nrOfItemsInArray === $sum)  ? "YES" : "NO") . PHP_EOL;
echo "Main 4- array printed: " . number_format(memory_get_usage()) . PHP_EOL;
?>
</code></pre>
<p>Now have a look at
    <a href="index2.php">'Pass by reference'</a>
</p>
</body>
</html>
