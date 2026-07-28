<pre><code>
<?php


// play around with these values to test the boolean expression comparison
#$p = true;
#$q = false;

# $p = (10 != 20);
# $q = (10 == 10);
$p = date("Y") == 2026;
$q = date("m") == 9; // 9 == september

if ($p && $q) {
    print "p and q and both true\n";
}
if ($p || $q) {
    print "p or q is true or they both are true\n";
}
if ($p xor $q) {
    print "either p or q is true\n";
}

echo "----------------------\n";

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
} else {
    print "A is less than b\n";
}

if ($a < $b) {
    print "A is less than b\n";
} else {
    print "A is greater than b\n";
}

if ($a <= $b) {
    print "A is less than or equal b\n";
} else {
    print "A is greater than b\n";
}

$c = ($a <= $b);
if ($c) {
    print "A is smaller or equal to b\n";
}

$d = !($a <= $b);
if ($d) {
    print "A is greater than b\n";
}

$x = null;

if (!is_null($x)) {
    print "x is not null\n";
} else {
    print "x is null\n";
}

if ($a !== $b) {
    print "A and B are the not same\n";
} else {
    print "A and B are the same\n";
}

if ($a > $b) {
    print "A is greater than b\n";
}
else if ($a < $b) {
    print "A is smaller than b\n";
}
else {
    print "A equals b\n";
}

echo ($a < $b) ? "A is smaller than B" : "A is greater or equal to b\n";

?>
</code></pre>
