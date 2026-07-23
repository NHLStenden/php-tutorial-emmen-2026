<pre><code>
<?php

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum  = 0;
foreach ($list as $value) {
    $sum += $value;
    echo "$value => $sum\n";
}
echo "Sum = $sum\n";


$list2 = [
        "Jack" => [10, 2.4, 12],
        "John" => [12, 9, 23],
        "Alice" => [10, 5, 9],
];

foreach ($list2 as $key => $items) {
    echo "-----------$key-----------\n";
    foreach ($items as $item) {
        echo "$item\n";
    }
}

echo "-------------------------\n";

echo "Sum = " . array_sum($list) . "\n";
echo "Jack in list?  " . (array_key_exists("Jack", $list2) ? "yes" : "no") . "\n";
echo "Jill in list?  " . (array_key_exists("Jill", $list2) ? "yes" : "no") . "\n";

echo "First key:" . array_key_first($list2) . "\n";
echo "Last key: " . array_key_last($list2) . "\n";
echo "-------------------------\n";

$list5 = array_fill(0, count($list), "abc");
foreach ($list5 as $key => $items) {
    echo $key . " => $items\n";
}

echo "-------------------------\n";
// advanced topic: using an anonymous function
array_walk($list5, function (&$item, $key){
    echo "$key = $item \n";
});

?>
</code></pre>
