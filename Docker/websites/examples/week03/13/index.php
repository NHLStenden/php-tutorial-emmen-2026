<pre><code>
<?php

$a = "10";
$b = 10;

if ($a == $b) {
    print "a and b are the same\n";
}
else {
    print "b and b  are not the same\n";
}

if ($a === $b) {
    print "a and be are the same\n";
}
else {
    print "b and be are not the same\n";
}

$x = 10.0;
$y = 10;

if ($x == $y) {
    print "x and be are the same\n";
}
else {
    print "x and y not are the same\n";
}

if ($a === $b) {
    print "x and y are the same\n";
}
else {
    print "x and y are not the same\n";
}

$p = 10.000000000001;
$q = 10.000;
const EPSILON = 1e-5;

print "a = $a, b = $b\n";
print "margin = " . number_format(EPSILON, 10) . "\n}";

if (abs($p - $q) <= EPSILON) {
    print "The two floats p and q are roughly the same";
}




?>
</code></pre>
