<pre><code>
<?php

$x = 10;
$y = 12;
$z = 1.2;
var_dump($x, $y, $z);


$name = "Martin Molema";
$characters = explode(' ', $name);
print_r($characters);

echo "x is null? : "    . (is_null($x)  ? "yes" : "no") . "\n";
echo "x is integer? : " . (is_int($x)   ? "yes" : "no") . "\n";
echo "x is float? : "   . (is_float($x) ? "yes" : "no") . "\n";

echo str_repeat("-", 100) . "\n";

echo "z is null? : "    . (is_null($z)  ? "yes" : "no") . "\n";
echo "z is integer? : " . (is_int($z)   ? "yes" : "no") . "\n";
echo "z is float? : "   . (is_float($z) ? "yes" : "no") . "\n";

?>
</code></pre>
