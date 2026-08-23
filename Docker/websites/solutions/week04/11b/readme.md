# Assignment search and find

For this assignment there are a few different ways to solve the problem. The way in which you solve the problem might be
more or less efficient in terms of the number of steps the function has to take to reach the desired result.

## Using a foreach loop

For instance, the first problem could be solved using a `foreach` loop: just check all the items in the list against the
item searched. However, it seems a bit silly to keep searching when you know that you've already found the item. See the
`find2` function:

```php
function find2(int $x, array $list): string
{
    $found = false;
    foreach ($list as $item) {
        $found = ($x === $item) || $found;
    }
    return $found ? "success" : "fail";
}
```

Notice that the function is fairly simple and has only a few variables. Notice that we cannot simply store the result of
the comparison as below, because then the outcome would be almost always `false`, except when the number searched is
exactly at the last position.

```php
$found = ($x === $item);
```

Therefore, we must use the 'or' operator to save a previous outcome in case the item was already found.

There is a way to make this more efficient: have a look at the solution with the regular `for`-loop below.

## Using a while loop

Therefore, the first assignment is best solved using a `while`-loop. Notice that there need to be two conditions to be
true in order to keep searching:

1. The item is not found
2. The position in the list is not "beyond the end of the list"

Regarding the second condition: if there are 10 items in the list, you cannot look at position 11 or 15 for an item in
that list. That will generate an error. Remember that positions in an array start number at zero. So, the position in a
list of 20 items cannot be higher than 19.

```php
function find(int $x, array $list): string
{
    $i         = 0;
    $nrOfItems = count($list);
    $found     = false;

    while (!$found && $i < $nrOfItems) {
        $found = ($x === $list[$i]);
        $i++;
    }
    return $found ? "success" : "fail";
}

```

## Using a for loop with a `break`

A third way to solve this is using a normal `for`-loop combined with a `break` instruction. We already know this keyword
from the `switch()` statement. When used within a `for`-loop it will abort the for loop and continu with the next
statement after the _scope_ of the `for`-loop.

```php
function find3(int $x, array $list): string
{
    $nrOfItems = count($list);
    $found     = false;
    for ($i = 0; $i < $nrOfItems; $i++) {
        $found = ($x === $list[$i]);
        if ($found) {
            break;
        }
    }
    return $found ? "success" : "fail";
}

```

The break statement can also be used in a `foreach` or `while`. However, when using it in a `while` it kind of defeats
the purpose of the conditions in the `while` statement.

So use the `break` statement sparingly and only if the code remains readable enough to understand later!

# References

* [Union Types in PHP](https://wiki.php.net/rfc/union_types_v2)