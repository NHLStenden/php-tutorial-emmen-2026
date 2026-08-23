<?php
$areacodes = [14, 26, 12, 58, 34, 66, 7, 41];

/**
 * Simply compare every item in the list to the item given in parameter $x and return the number of occurences.
 * @param int $x
 * @param array $list
 * @return int
 */
function countItemOccurencesInList(int $x, array $list): int
{
    $occurences = 0;
    foreach ($list as $item) {
        $occurences += ($x === $item) ? 1 : 0;
    }
    return $occurences;
}

/**
 * The array in $list must be sorted ascending! This algorithm will optimise the search by stopping if it certain that
 * the number cannot be found anymore in the remainder of the list. This will greatly improve performance, but the
 * code also is more complex than e.g. countItemOccurencesInList function.
 * @param int $x
 * @param array $list
 * @return int
 */
function findFast(int $x, array $list): int
{
    $occurrences     = 0;
    $i               = 0;
    $nrOfItemsInList = count($list);

    if ($nrOfItemsInList === 0) {
        return 0;
    }

    // if number searched is smaller than  the first number there cannot be an occurence
    $stopLooking = $x < $list[0];
    while (!$stopLooking) {
        // get the item from the list
        $item = $list[$i];

        // check if it the item searched. if so, add 1 else add zero
        $occurrences += ($x === $item) ? 1 : 0;

        // increase list position
        $i++;

        // stop looking if at end of the list OR if the number search is smaller than the current number in the list
        $stopLooking = ($i === $nrOfItemsInList) || ($x < $list[$i]);
    }

    /*
     * efficiency is the number of steps avoided. So 93% means: 93% of the list was skipped.
     */
    /*
    $efficiency = intval(100 - ($i / $nrOfItemsInList) * 100);

    echo "<p>$x;$i;$efficiency</p>";
    */
    return $occurrences;
}

/**
 * This function will search through the array $list and look for occurences of the items in $search.
 *
 * @param array $search
 * @param array $list
 * @return array Per item in $search the number of occurences is returned as the value of that key.
 */
function findMultiple(array $search, array $list): array
{
    $results = [];
    foreach ($search as $item) {
        $results[$item] = countItemOccurencesInList($item, $list);
    }
    return $results;
}

/**
 * Uses the findfast() function to reach the results faster (using less iterations)
 *
 * @param array $search
 * @param array $list
 * @return array
 */
function findMultipleFaster(array $search, array $list): array
{
    sort($list);

    $results = [];
    foreach ($search as $item) {
        $results[$item] = findfast($item, $list);
    }
    return $results;
}

$list1 = findMultipleFaster([1, 3, 53, 2, 45], [1, 2, 3, 4, 5, 6, 4, 5, 3, 32, 5, 53, 2, 34, 4, 5, 3, 2, 2, 5, 45, 3, 4, 1, 4, 3, 45, 5, 4, 2, 3]);
$list2 = findMultipleFaster([2,5,1], [1,5,3,6,5,3,2,43,2]);

// create an array with 1000 random numbers
$longListValues =  array_map(function($item) { return random_int(0,61); },array_fill(0, 1000, 0));
$longListSearch =  array_map(function($item) { return random_int(0,61); },array_fill(0, 100, 0));
$list3 = findMultipleFaster($longListSearch, $longListValues);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment week 4 - 2</title>
</head>
<body>
<ul>
    <?php
    foreach ($list1 as $key => $item) {
        echo "<li>$key = $item</li>";
    }
    ?>
</ul>
<ul>
    <?php
    foreach ($list2 as $key => $item) {
        echo "<li>$key = $item</li>";
    }
    ?>
</ul>
<ul>
    <?php
    foreach ($list3 as $key => $item) {
        echo "<li>$key = $item</li>";
    }
    ?>
</ul>
</body>
</html>
