# Type Juggling 1

In this example a few type coercion are demonstrated.

# The division function

Have a look at this example with a PHP function.

```php
function divide(float $first, float $second): float|null
    if ($second == 0) {
        return null;
    }
    return $first / $second;
}

```

## No coercion

When calling this function with different types of variables the type coercion can be observed. For instance

```php

$a = 10.3;
$b = 20;
$c = divide($a, $b);
```

Will work perfectly and yields `0.515`. The variable $a is already a `float` because it contains a `.` to indicate a
floating point.

## Type coercion from string to float

The example below yields `0.5`. The **string** value of $a is "10", but is first converted to a float and then the
function is executed. So even though the `.` is missing, PHP will create a `float` instead of a `int` because the
function `divide` "wants" `float` parameters.

```php

$a = "10";
$b = 20;
$c = divide($a, $b);
```

## Type coercion from string with a float value to float

In the example below the variable $a holds the string "10.3". This can be type coerced into a float value of 10.3.
Notice that in different countries the _floating point_ indicator can differ. In most countries it is the dot (`.`), but
in The Netherlands it is a comma (`,`). So this will work perfectly and yields `0.515`.

```php

$a = "10.3";
$b = 20;
$c = divide($a, $b);
```

## Type coercion from empty string to float

In the next example the value of $a is the empty string (`""`). Now PHP cannot coerce this into a float so an error is
generated.

```php

$a = "";
$b = 20;
$c = divide($a, $b);
```

![error.png](error.png)

# References

* [PHP Type jugglign](https://www.php.net/manual/en/language.types.type-juggling.php)