# Week 4 - PHP - User Defined Functions

A user defined function is a function that you as a programmer create yourself. You give the function a name,
add optional parameters and write the body of the function.  

## Parameters

A function often has parameters. These parameters can be annotated with a type indicator. This tells the function
to only accept variables of the given type. If a programmer calls that function with a different type, an error
is shown. This often leads to stopping the rest of the PHP code

```html
function calc(int $a, int $b): int {
    $result = $a + $b;

    return $result;
}
```

The function above accepts two integer (`int` is the type indicator for integers, whole numbers only). The function
calculates a result by adding the parameters `$a` and `$b` and stores it in the variable `$result`.

The names of the parameters can be chosen to fit their goal. The same rules apply for naming a parameter and naming
a normal parameter. Even if you choose to pick a name that is already a variable in the rest of the code, there is no
problem. 

## Pass by reference of pass as value

Functions normally cannot change the variables they are given to do their work. Look at the function below:
```php
function calc2(int $a, int $b): int
{
    $a = $a + 1;
    $b = $b + 1;
    return $a * $b;
}

$a = 1;
$b = 2;
$d = calc2($a, $b);
print("($a + 1) * ($b + 1) = $d\n");
```

Within the *scope* of the function the parameters `$a` and `$b` are changed. However, when executing the `print` statement
the original values of `$a` (being 1) and `$b` (being 2) are unchanged. 

The variables `$a` and `$b` are passed to the function as a value. So, you could imagine the values of the variables 
being copied into the function.

If we look at the `sort()` function that is built in PHP we see a difference:
> Sort an array in ascending order

This function has a different function declaration:
```php
function sort(array &$array, int $flags = SORT_REGULAR) {
 ... 
}
```

Notice the `&`-character in front of the variable name. This means:
> Do not copy the values from the variable but allow the function to change the value of the parameter.

This is called '**pass by reference**': instead of copying, PHP will tell the function: "you can find the variable 
over there" so the function can change this. 

Again, in some situations this is a good thing, but usually you do not wat a function to change the variables passed
to the function unless **well documented**!

In the case of a sort function this is a good decision: when a very large array must be sorted and copied first, there
could be a lot of memory involved. By passing the array as a reference, there is no need to copy the whole array first.

Notice that deciding whether a function can change its parameters is a responsibility of the **function**, not the one
calling/using the function. In older versions of PHP it was allowed to make the caller decide this, but this is removed.

## Specifying default values

Sometimes function parameters are not often used, because in a lot of cases a default value is the right value for a 
lot of programmers. However, if in some cases the function does need to be configurable, you could use a parameter
with a default value. Parameters with a default value become optional when calling the function.

We already saw this with the `sort()` function. In most cases you will want the `sort()` function to sort ascending in 
a normal way. But maybe you this time you want the sort function to handle the values as numeric or case-insensitive.
Looking at the [documentation](https://www.php.net/manual/en/function.sort.php) we see that the `SORT_REGULAR` is the
default, but you can supply different options to change the sort function's behaviour.

Note that parameters with a default value must always be at the end of the function declaration:

```php
function doSomething(int $a, int $b, bool $low=true,bool $high=false): int {
.....
}
```

In the example above, there are two normal parameters (`$a` and `$b`) and two parameters with a default value: `$low` 
has a default value of `true` and the variable `$high` has a default value of `false`. When calling this function the 
following ways to call the function are allowed

```php
$x = doSomething(1,2);
$x = doSomething(1,2, true);
$x = doSomething(1,2, true, true);
$x = doSomething(1,2, false);
$x = doSomething(1,2, false, false);
```

Notice however that `$x = doSomething(1,2, true);` uses the same value for parameter `$low` and therefor can be omitted.

Since PHP 8.0 you can also use **Named Arguments**. When using all named arguments the order does not matter. When mixing
named argument and positional arguments, the positional arguments must come first.

```php
$x = doSomething(b:1,a:2, low:false);
$x = doSomething(1,2, low:false);

```

## Returning the result of a function.

The `return` keyword means: now return the function result to the **caller**. THis way the caller can receive the results
of the work that the function has done. 

The `$result` variable is not used anywhere else but in the `return` statement. So often this can be abbreviated to the
code below. Notice however that this might me more difficult to debug as we cannot inspect the result of `$a + $b`.

```php
function calc(int $a, int $b): int {
    return  $a + $b;
}
```

Notice that the function end with `: int`. This indicates that this function must return an integer value. If you make
a mistake and return nothing, a string or a floating point number, again there will be an error.

## Void functions

Sometimes a function does not need to return a function: the work done does not result in a result that is interesting
for the caller. 

# Scope

PHP Uses the concept of 'scope' to determine where variables or functions are 'visible' or 'usable' to other parts of 
the code. When writing a function, everything within the function is not usable to other parts of the code. Therefore
you could interpret 'scope' as 'isolation': the function isolates all variables from the rest of the code.

A scope in PHP is started after the `{` and end after the `}` when using a function (or a `class`, you can forget for now).
Everything witin these `{...}` function blocks is not available to the rest of the code. 

PHP uses scope a bit different from other programming languages: not all `{...}` blocks create a scope such as with C#. 
That is why this works in PHP and not in C#:

```php
  if ($x == 1) {
    $i = 0;
  }
  else {
    $i=1;
  }
  echo $i;
```

## Using `global` keyword

It is possible in PHP to use variables in a function that are *not* parameters, but exist outside the scope of the 
function. The `global` keyword can be used to 'import' a global variable into the scope of a function. However, this
is very bad practice but might be necessary in extreme conditions. Normally: pass the global variable as a function
parameter.


# References

* [PHP:Variable scope](https://www.php.net/manual/en/language.variables.scope.php)