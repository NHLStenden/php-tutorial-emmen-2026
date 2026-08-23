<?php

if (true || (10 * 10 == 1)) {
    echo "true";
}

// notice that the linter will signal this will never echo anything. "unreachable code"
$x =10;
$y = 11;
if (false && ($x !== $y)) {
    echo "true";
}
