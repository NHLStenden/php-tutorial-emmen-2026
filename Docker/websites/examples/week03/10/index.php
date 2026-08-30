<pre><code>
<?php

$list1  = []; // empty array
$list1b = array();

// initialize array with elements
$list2 = ["Jack", "Harry", "John"];
$list3 = [1, 2, 3, 4];
$list4 = ["Jack", 1, 2, 3.0, "John"];
$list5 = [1 + 1, 2 * 3, 4 / 5, sin(3.14), 5, 6, 7, 8, 9, 10, 11, 12, 13];


// dump complete arrays
var_dump($list1, $list1b, $list2, $list3, $list4, $list5);

// get individual values
echo $list3[3] . "\n";
echo $list4[0] . "\n";
echo $list5[3 * 4] . "\n";

// assign individual values
$list4[3]   = 12;
$list1[100] = "Black";

// adding at the end
$list1[] = 15;
$list1[] = 6;
$list1[] = 33;

var_dump($list1);

// use different kind of keys
$list1["martin"] = "molema";
$list1[100]      = "Black";
$list1[300]      = "White";

var_dump($list1);

// array of arrays - example 1
$row1 = ["Name", "Age", "X", "Y"];
$row2 = ["Jack", 10, 2.4, 12];
$row3 = ["John", 12, 9, 23];
$row4 = ["Alice", 10, 5, 9];

$table = [$row1, $row2, $row3, $row4];

var_dump($table);

// array of arrays - example 2
$table2 = [
        ["Name", "Age", "X", "Y"],
        ["Jack", 10, 2.4, 12],
        ["John", 12, 9, 23],
        ["Alice", 10, 5, 9],
];


// init with keys
$list10 = [
        "Jack" => [10, 2.4, 12],
        "John" => [12, 9, 23],
        "Alice" => [10, 5, 9],
];
var_dump($list10);
?>
</code></pre>

