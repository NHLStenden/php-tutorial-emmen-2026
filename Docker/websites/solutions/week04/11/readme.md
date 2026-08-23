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

# Assignment - find highest

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

# Assignment 3 - count multiple occurences in array

In this case we have a list of numbers, say 2,5 and 1. We want to check how often this number occurs in another list of
items, say 1,5,5,2,2,1,5. In this case that would yield:

* 1 occurs twice
* 2 occurs twice
* 5 occurs three times

SO we neem to create a function that can take 2 arrays. Have a look at the function declaration of the function
`findMultiple`.

```php
function findMultiple(array $search, array $list): array
```

As a consequence this function will do a lot of searches. If there are 10 elements in the `$search` and 250 in the
`$list` then there is a risk the function must perform 10 x 250 = 2,500 steps. The first function `findMultiple`
actually works like that.

```php
function findMultiple(array $search, array $list): array
{
    $results = [];
    foreach ($search as $item) {
        $results[$item] = countItemOccurencesInList($item, $list);
    }
    return $results;
}

```

In the example there is another function that actually does the counting: `countItemOccurencesInList`. This makes the
function `findMultiple` better readable and allows us to choose different approaches in counting items.

```php
function countItemOccurencesInList(int $x, array $list): int
{
    $occurences = 0;
    foreach ($list as $item) {
        $occurences += ($x === $item) ? 1 : 0;
    }
    return $occurences;
}
```

This function receives the list and the item searches. Using a `foreach` loop it will check all items.

Here, the ternary operator `expr ? true-part : false-part` makes it easy to count items: if an item matches the item
searched, it returns one, otherwise zero. The `+=` operator means  "add a value to the variable to the left"; in this
case `$occurences`.

We could improve our 'search and count matches' function a bit to prevent it from searching all items. One way of doing
this, is to sort the array being searched. So, if the array searched contains

```text
1,5,3,6,5,3,2,43,2
```

we really need to inspect all items when searching for the number 2 e.g. However, if we sort the array to

```text
1,2,2,3,3,5,5,6,43
```

there is a simple rule that could optimize our search by stopping if the number searched is not less than the number
found at a position in the sorted list. For example, when searching for the number 2, we could stop when we find the
number 3 at the fourth position. The knowledge that the list is sorted, there will never be a number two when we find
the number 3.

This

```php
function findFast(int $x, array $list): int
{
    $occurrences     = 0;
    $i               = 0;
    $nrOfItemsInList = count($list);

    if ($nrOfItemsInList === 0) {
        return 0;
    }

    $stopLooking = $x < $list[0];
    while (!$stopLooking) {
        $item = $list[$i];
        $occurrences += ($x === $item) ? 1 : 0;
        $i++;
        $stopLooking = ($i === $nrOfItemsInList) || ($x < $list[$i]);
    }
    return $occurrences;
}

```

This can of course also be done using a `foreach` and a `break` statement. However, if we want to calculate the efficiency
of the algorithm we would still need some helper variables.

We could calculate how much we've saved: this is the number of search steps not taken. When the `while` loop has
finished then the `$i` variable contains the number of steps we've taken. Comparing that with the actual number of items
in the list gives a percentage of the steps taken. THe efficiency could be defined as 'the number of steps not taken'. 
So that is 

`100% - (steps taken - number of items in the list)  / 100`.

In PHP this would be like the code below. We use `intval` to reduce the `float` result of the division to a simple integer.

* `$x` is the number searched
* `$i` is the number of steps taken
* `$nrOfItemsInList` is the number of items in the list

```php
    $efficiency = intval(100 - ($i / $nrOfItemsInList) * 100);
    echo "$x = $i ($efficiency %)";
```

This yields for `findMultipleFaster([2,5,1], [1,5,3,6,5,3,2,43,2]);`. 

```text
2 = 3 (66 %)
5 = 7 (22 %)
1 = 1 (88 %)
```

So while searching for the number '5', seven steps were taken and 22% percent of the array was not inspected.

When using a 1000 random numbers and 6 numbers to search this might lead to 6000 searches when not using an optimisation. 
```text
10 = 120 (88 %)
20 = 216 (78 %)
30 = 331 (66 %)
40 = 433 (56 %)
50 = 525 (47 %)
60 = 622 (37 %)
```

# References

* [Union Types in PHP](https://wiki.php.net/rfc/union_types_v2)