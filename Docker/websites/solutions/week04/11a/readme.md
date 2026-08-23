# Assignment search and find highest number

For this assignment there are a few different ways to solve the problem. The way in which you solve the problem might be
more or less efficient in terms of the number of steps the function has to take to reach the desired result.

When searching for the highest number there a need to process all items. Or is there? There is a simple trick as used in
`findHighest2`: simply sort the array in reverse order and then pick the first element. We do need to check if the array
is not empty: getting the first element from an empty array will yield an error!

```php
function findHighest2(array $list): int
{
    rsort($list, SORT_NUMERIC);
    if (count($list) === 0) {
        return 0;
    }
    return $list[0];
}
```

But in this case we can solve it using a `foreach` as shown below.

```php
function findHighest(array $list): int
{

    $highest = 0;
    foreach ($list as $item) {
        if ($item > $highest) {
            $highest = $item;
        }
    }
    return $highest;
}

```

We determine that if in case of an empty array the highest number is zero. This is an arbitrary choice, as we might as
well have decided otherwise. One way to solve this is to return either a number or `false`:

```php
function findHighest3(array $list): int | false
{
    rsort($list, SORT_NUMERIC);
    if (count($list) === 0) {
        return false;
    }
    return $list[0];
}

```

Notice that the return value is either an integer (`int`) or the **value** `false`. That seems a bit strange: using a
value as a type, but in PHP this is allowed. A return type describing multiple type is called a 'union type'. The caller
has the responsibility to check what type was returned! So in this case we use a *ternary operator* to create a
printable result:

```php
  $highest1 = findHighest3([1,2,3,4,5]);
  echo ($highest1 === false) ? 'empty array' : $highest4
  $highest2 = findHighest3([]);
  echo ($highest2 === false) ? 'empty array' : $highest4
```

Notice that in the second call an empty array `[]` is supplied as the parameter.

In case the function call `findhighest3()` returns false, we echo "Empty Array", otherwise we echo the actual value
found.

# References

* [Union Types in PHP](https://wiki.php.net/rfc/union_types_v2)