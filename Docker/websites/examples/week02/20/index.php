<pre><code>
<?php

# Try different values for $a and $b
$a = 20;
$b = 10;

if ($a === $b) {
    print "A and B are the same\n";
} else {
    print "A and B are not the same\n";
}

if ($a > $b) {
    print "A is greater than b\n";
}
else {
    print "A is less than b\n";
}

if ($a < $b) {
    print "A is less than b\n";
}
else {
    print "A is greater than b\n";
}

if ($a <== $b) {
    print "A is less than or equal b\n";
}
else {
    print "A is greater than b\n";
}

$c = ($a <= $b);
if ($c) {
    print "A is smaller or equal to b\n";
}

$d = ! ($a <= $b);
if ($d) {
    print "A is greater than b\n";
}

$x = null;

if (! is_null($x)) {
    print "x is not null\n";
}
else {
    print "x is null\n";
}

if ($a !== $b) {
    print "A and B are the not same\n";
}
else {
    print "A and B are the same\n";
}

?>
</code></pre>
