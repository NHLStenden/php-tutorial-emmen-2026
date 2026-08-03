<pre><code>
<?php

# NOTE: do NOT prefix the number by a zero: this will make PHP think it is a octal number
# $date = 1062016; # first of june, 2016
# $date = 12062016; # june 12th, 2016
$date = 1012016; # jan first, 2016

# first get the year by getting the remainder of the division by 10,000 (ten thousand).
$year  = $date % 10000;

# now we want the month; this can be done by first dividing by 10000 to get rid of the year. then be convert it to an
# integer to get rid of the remainder. Then we get the remainder of the division by 100 to get the day
$month = (int)($date / 10000) % 100;

# To get to the day we divide by 1000 to get rid of the year and divide again by 100 to get rid of the month. Then
# we convert it to an integer to get rid of the remainder.
$day   = (int)($date / 10000 / 100);

echo "$year-$month-$day";

?>
</code></pre>
