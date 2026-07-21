# Function types

Have a look at this example with a PHP function.

```php
  function addNumbers(int $first, int $second): int {
      return $first + $second;
  }

  $a = 10;
  $b = 20;
  $c = addNumbers($a, $b);

  echo $c;
```



# References

* [PHP: types](https://www.php.net/manual/en/language.types.php)
* [PHP: type system](https://www.php.net/manual/en/language.types.type-system.php)
* [PHP: Floating points](https://www.php.net/manual/en/language.types.float.php)
* 