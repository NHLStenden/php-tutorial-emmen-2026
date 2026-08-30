<pre><code>
<?php

// for loop to calculate squares

for ($i = 1; $i < 10; $i = $i + 1) {
    $quad = $i * $i;
    echo "$i: $quad\n";
}

echo "--------------------------\n";

for ($i = 10; $i >= 0; $i -= 1) {
    echo "$i,";
}
echo "Liftoff!\n";

echo "--------------------------\n";

for ($i = 1; $i < 30; $i += 3) {
    $quad = $i * $i;
    echo "$i: $quad\n";
}
echo "--------------------------\n";
for ($i = 1; $i < 10; $i++) {
    $quad = $i * $i;
    echo "$i: $quad\n";
}
echo "--------------------------\n";


// WHILE Loop

$test = rand(0, 10);
echo "$test\n";
$attempts = 1;
while ($test !== 1) {
    $test = random_int(0, 10);
    echo "$test\n";
    $attempts++;
}
echo "It took $attempts repeats for the randomizer to yield value 1.\n";

// DO WHILE LOOP

$attempts = 0;

do {
    $test = random_int(0, 10);
    echo $test . PHP_EOL;
    $attempts++;
} while ($test !== 1);

echo "It took $attempts attempt(s) for the randomizer to yield value 1." . PHP_EOL;


// the `foreach` loop just walks all the items in the list
$items = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($items as $item) {
    echo $item . PHP_EOL;
}


/*
 * foreach can be usefull to run through records, but the second foreach in this example makes it difficult to determine
 * what value is printed in order to determine the width of the column.
 */

$records = [
        ["name" => "Martin", "age" => 55],
        ["name" => "Alice", "age" => 22],
        ["name" => "Bob", "age" => 19],
        ["name" => "John", "age" => 24],
];

foreach ($records as $record) {
    echo "|";
    foreach ($record as $value) {
        echo str_pad($value, 15) . " | ";
    }
    echo "\n";
}
echo "---------------------------------------------------------------------------------------\n\n";

/**
 * Foreach can supply a key
 */
foreach ($records as $record) {
    foreach ($record as $key => $value) {
        echo $key . "=" . $value . PHP_EOL;
    }
    echo "\n";
}

echo "---------------------------------------------------------------------------------------\n\n";

/**
 * Using the key we could determine the width of the column
 */
foreach ($records as $record) {
    echo "| ";
    foreach ($record as $key => $value) {
        switch ($key) {
            case "name":
                $width = 15;
                break;
            case "age":
                $width = 5;
                break;
            default:
                $width = 1;
        }
        echo str_pad($value, $width) . " | ";
    }
    echo "\n";
}


?>
</code></pre>