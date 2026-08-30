# Week 4 - PHP - Function types

Have a look at this example with a PHP function.

```php
  function addNumbers(int $first, int $second): int 
  {
      $result = $first + $second;
      
      return $result;
  }

```

Here we see the anatomy of a function:

* the keyword `function`
* the name of the function : `addNumbers`
* two parameters
    * `$first` with a type of `int`
    * `$second` with a type of 'int'
* a return type: `int` (at the end, after the `:`)
* a body 'doing the work'
    * `$result = $first + $second;`
* returning the result
    * `return $result`

Now that we have a function we can use it. This is called **"calling the function"**. Again, look at the example below.

```php
  $a = 10;
  $b = 20;
  $c = addNumbers($a, $b);

  echo $c;
```

First two variables are created: `$a` with a value of `10` and `$b` with a value of `20`. Then the function is called
using `addNumbers($a, $b)` while specifying the two parameters of the function.

The result is *'captured'*  by the variable `$c`. The last statement will present the value to the webpage/user using
`echo`.

Notice that it is **bad practice** to also let the function to the `echo`: this way the function will perform two tasks
that can never be split afterwards. 

# Combining functions

If you do want to combine these steps, then let one function call another. In the example there is a new function named
`addAndEchoNumbers`. Notice that this function does not have a return type: the special 'type' `void` is used.

It will first calculate the addition using the function we built before, and then show the result in a pre-defined way
to the user/webpage.

```php
function addAndEchoNumbers(int $first, int $second): void
{
    $c = addnumbers($first, $second);
    echo "$first + $second = $c\n";
}

```

This can then be called using the function call below.

```php
  addAndEchoNumbers($a, $b);
```



# References

* [PHP: types](https://www.php.net/manual/en/language.types.php)
* [PHP: type system](https://www.php.net/manual/en/language.types.type-system.php)
* [PHP: Floating points](https://www.php.net/manual/en/language.types.float.php)
* 