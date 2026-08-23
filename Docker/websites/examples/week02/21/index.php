<pre><code>
<?php

 $month     = date("m");

switch ($month) {
    case 1: $monthname = 'January'; break;
    case 2: $monthname = 'February'; break;
    case 3: $monthname = 'March'; break;
    case 4: $monthname = 'April'; break;
    case 5: $monthname = 'May'; break;
    case 6: $monthname = 'June'; break;
    case 7: $monthname = 'July'; break;
    case 8: $monthname = 'August'; break;
    case 9: $monthname = 'September'; break;
    case 10: $monthname = 'October'; break;
    case 11: $monthname = 'November'; break;
    case 12: $monthname = 'December'; break;
    default: $monthname = 'Error'; break;
}

$monthname2  = match ($month) {
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December',
    default => 'Error',
};

 print "Current month = $monthname";
 print "Current month = $monthname2";


?>
</code></pre>