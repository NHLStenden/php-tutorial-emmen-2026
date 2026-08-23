#  Week 2 - Conditionals

In this example a number of often used simple comparisons ('boolean expressions') are demonstrated.

## Test if two values are the same

To compare if two values are the same we use the `===` operator. We will later understand why there are three `=`.

```php
$a = 10;
$b = 20;

if ($a === $b) {
    print "A and B are the same\n";
} else {
    print "A and B are not the same\n";
}
```

## Test is values are greater or smaller using `<` and `>`

```php
$a = 10;
$b = 20;

if ($a > $b) {
    print "A is greater than b\n";
}
else {
    print "A is less than b\n";
}
```

## Using the NOT-operator

The `not` operator is represented with an exclamation mark `!`. So in the example a function `is_null()` is used to test
if a value if `null`. If the the value of `$x` is **not** null than the first branch is executed printing "A is not
null"

```php

$x = null;

if (! is_null($x)) {
    print "x is not null\n";
}
else {
    print "x is null\n";
}
```

Here

```php
$a = 10;
$b = 20;

if ($a !== $b) {
    print "A and B are the not same\n";
}
else {
    print "A and B are the same\n";
}
```

## Storing the result of a comparison in a variable first

We can store the result of a comparison in a variable. Look at the example below

```php
$c = ($a <= $b);
```

Now the value of $c is always `true` or `false`. We can test this in an `if` statement. Notice we only use the value or
`$c` instead of `$c === true`. Because when evaluating the value of `$c` this already yields `true` or `false`.

```php
if ($c) {
    print "A is smaller or equal to b\n";
}

```

We can also reverse the outcome of the comparison:

```php

$d = ! ($a <= $b);
if ($d) {
    print "A is greater than b\n";
}

```

This would be the same as below. First the value of `$c` is true if `$a` is smaller or equal to `$b`. Here, in the `if`
-statement the value of `$c` is reversed. 

Compare to the example of the`is_null()` function above.

```php
$c = ($a <= $b);
if (! $c) {
    print "A is greater than b\n";
}

```

