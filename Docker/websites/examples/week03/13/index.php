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

$test    = rand(0, 10);
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

?>
</code></pre>