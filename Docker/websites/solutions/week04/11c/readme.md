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


# Improving the solution (optional)

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

This is reflected in the solution below. 

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

This could lead to an average of 50% less steps taken to find all results.