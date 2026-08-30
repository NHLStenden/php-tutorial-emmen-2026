# Week 4 - PHP - Variable functions


# Debugging

Sometimes you want to inspect information in variables. PHP Supports this with a number of debugging functions.

* `print_r` Prints human-readable information about a variable
* `var_dump` Dumps information about a variable

# Variable information

If you want to check if a variable has certain attributes you can use functions like below:

* `is_array()` : Finds whether a variable is an array (we'll handle arrays next week)
* `is_bool()`: Finds out whether a variable is a boolean
* `is_integer()` and `is_int()`: Finds out whether a variable is an integer
* `isset()` — Determine if a variable is declared and is different than null

Conversion functions:
* `intval()`: get the integer value of a variable (even if it is a string)
* `floatval()` and `doubleval()`: get the floating point value of a variable (even if it is a string)
* `strval()`: Converts a variable to a string

Some examples on an integer value

```php
$x = 10;
var_dump($x);

echo "x is null? : "    . (is_null($x)  ? "yes" : "no") . "\n";
echo "x is integer? : " . (is_int($x)   ? "yes" : "no") . "\n";
echo "x is float? : "   . (is_float($x) ? "yes" : "no") . "\n";

```

Using a float:

```php
$z = 1.2;
var_dump($z);

echo "z is null? : "    . (is_null($z)  ? "yes" : "no") . "\n";
echo "z is integer? : " . (is_int($z)   ? "yes" : "no") . "\n";
echo "z is float? : "   . (is_float($z) ? "yes" : "no") . "\n";

```

# References

* [Variable handling Functions](https://www.php.net/manual/en/ref.var.php)

