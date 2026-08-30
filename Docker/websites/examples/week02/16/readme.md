# Week 2 - PHP -  Conditionals and type juggling

When comparing values PHP will sometimes try to coerce the two parts of a comparison to the same type

## Type coercion checking

When using a comparison to check if two values are equal, PHP might coerce both parts of the comparison to the same type
before comparing the values. This is expected behaviour when using the `==` operator. See the example below.

```php

$a = "10";
$b = 10;

if ($a == $b) {
    print "a and be are the same\n";
}
else {
    print "b and b  are not the same\n";
}
```

Surprisingly, the outcome is that $a and $b have the same value, even though $a is a string and $b is a number (int or
float).

```php

$a = "10";
$b = 10;

if ($a === $b) {
    print "a and b are the same\n";
}
else {
    print "b and b are not the same\n";
}
```

## Type comparison with numbers

Notice that when comparing numbers there might be slightly unexpected behaviour! See the examples below. When using the
`==` comparison, the outcome is as expected. When using the `===` operator PHP will decide variables `$x` and `$y` are
not the same!

```php


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
```

## Comparing float values

Because two floating point numbers can be represented slightly different from the calculated value or assigned value it
is difficult to determine if two floating point numbers 'are the same'. Besided, the defition of 'are the same' can be
very different in varying situations. When dealing with very large numbers (e.g. millions of dollars) a difference of a
few cents will not matter maybe. However, when calculating values between 0 and 1, even a value of one tenth can ruin
your algorithm. So, often you need to define a margin named 'epsilon' that means 'if the difference between two numbers
is less than this very small number I define the are equal'.

In the example below this is shown. (explanation below the example)

```php
$p = 10.000000000001;
$q = 10.000;
const EPSILON = 1e-5;
print "margin = " . number_format(EPSILON, 10) . "\n}";

if (abs($p - $q) <== EPSILON) {
    print "The two floats p and q are roughly the same";
}
```

First two variables `$p` and `$q` are created. They are of the type `float`. Then a constant is defined using the
`const`
keyword. Constans are often names in all capitals to distinguish them from variables.

The value of `EPSILON` is expressed using a scientific expression:  "one to the power of minus 5" that results in
`0.00001`.

The value of `EPSILON` is printed using the `number_format` built in PHP function (see references section at the end of
this article).

Then a comparison is done. The comparison constist of the following parts

* subtraction of `$p` and `$q`: `$p - $q` .
* a function call to the `sub()` built in PHP function; this will make the result always a positive number (greater than
  zero)
* a comparion between the absolute value of the subtractions and `EPSILON` using `<==`: **smaller than or equal**. This
  will yield 'true' if the absolute value of the subtraction is smaller than or equal to `EPSILON`.

Notice that `<==` does not coerce the types! THe `abs()` function allows both `int` and `float` . We will look into that
in week 3 when dealing with functions.


# Conclusions

The best practice is to always use the `===` operator. When comparing floats you will need to use a margin ('epsilon')

# References

* [PHP Comparison operators](https://www.php.net/manual/en/language.operators.comparison.php)
* [PHP number_format ()](https://www.php.net/manual/en/function.number-format.php)
* [PHP abs ()](https://www.php.net/manual/en/function.abs.php)