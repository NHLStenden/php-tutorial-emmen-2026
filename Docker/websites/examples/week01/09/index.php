<pre><code>
<?php
// THis is all about scope; there are some bad programming practices used just to make a point!

// function scope isolates variables. so the $a and $b are two complete different things.
function calc(int $a, int $b)
{
    $x = $a * $b;
    print "x= $x \n"; // this is not good practice because the function now does two things

    $a = $a + 1;
    $b = $b + 1;
    return $x;
}

$a = 1;
$b = 2;
$c = calc($a, $b);

print("$a times $b = $c");

?>

</code></pre>
