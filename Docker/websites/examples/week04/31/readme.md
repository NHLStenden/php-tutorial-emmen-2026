# Memory usage with different parameter passing conventions

In this example we look at how the PHP engine handles passing variables to functions.

There are two ways to pass variables to a function

1. Pass by value
2. Pass by reference

# Passing variables by value

This is the normal behavior of functions. When you declare parameters in a function
this will indicate:

> When the function is called the values supplied by the caller must be copied to the
> stack.

So, the function gets a copy to the variables in new pieces of memory on the stack.
Therefore, there is no way the function could modify the variables of the caller:
they are in a different part of the memory.

# Passing variables by reference

Sometimes it is better not to let PHP copy all the variables into new memory, but
tell the function

> Here is a pointer to the memory of this variable.

Now the function has a 'reference' to the actual memory of the variables supplied. Therefore, the function is allowed
to change the contents of the parameters given. However, this places great responsibility to the programmer not to
change the array in an unwanted state.

This is especially useful when working with large arrays. When using _call by value_ large arrays will be copied, and
often the result is also a large array. So, twice the memory is used to pass the array and receive the modified version.

# The examples

The examples show how the memory changes due to copying [index.php](index.php) or passing by
reference [index2.php](index2.php). A large array is created and passed to a function. Along the way at different
phases of the script, the memory usage is registered.

In the function the memory usage is registered and compared with the memory usages before the function was called (using
an extra parameter).

First the array is initialized using a value of zero.

```php
  $nrOfItemsInArray = 100000;
  $list = array_fill(0, $nrOfItemsInArray, 0);
```

## The pass by value function

Then the array is passed to a function. In the example below the _pass by value_ mechanism is used. An extra parameter
is added in order to be able to calculate the difference in memory usage. The function returns an array.

```php
function passByValue(array $list, int $currentMemoryUsage): array
{
    foreach ($list as $key => $value) { $list[$key] += 1; }
    return $list;
}

```

The function will set the value of each item in the array to `1` and returns this array. This array copied onto the
stack (again taking up a lot of memory) and returned and stored in a new variable `$list2`.
To prove the array was changed, we calculate the sum. This value should be equal to the number of items in the array.

This is checked using the _ternary operator_ ` expr ? true-value : false-value`.

```php
$list2 = passByValue($list, $currentMemoryUsage);
$sum = array_sum($list2);
echo "sum: " . $sum . " / check: must be $nrOfItemsInArray => " . (($nrOfItemsInArray === $sum)  ? "YES" : "NO") . PHP_EOL;
```

## Pass by reference example

In the example of the _pass by reference_  the function is declared a bit different.

1. the first parameter has a prefix of `&` sign to indicate pass by reference
2. the return value can be `void` 

```php
function passByReference(array &$list, int $currentMemoryUsage): void
{
    foreach ($list as $key => $value) { $list[$key] += 1; }
}
```

Because the function can modify the memory of the original array there is no need to return the modified array using the
stack. Therefore, the return type is `void`. 

When calling this function there is no return value to be captured or extra variable needed:

```php
passByReference($list, $currentMemoryUsage);
$sum = array_sum($list);
```

# A look at the `sort` function of PHP

PHP has a built-in function to sort an array. When looking at the function declaration below we also notice the 
`&`-sign to indicate that _call by reference_ is used.  

```php
function sort(array &$array, int $flags = SORT_REGULAR): true
```

The array is sorted 'in place': the array supplied is directly modified. Therefore, there is no return-type 'array' but
simply 'true'.

# The nitty gritty details

The PHP engine tries to save memory by applying a neat trick: even when using _pass by value_ the values are not
actually
copied! Only a reference is passed. Only when the values are changed, PHP will actually create a copy. That is why we
need to register the memory usage after the array values are changed. 


