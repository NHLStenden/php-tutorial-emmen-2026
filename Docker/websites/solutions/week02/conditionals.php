<!-- http://localhost/solutions/week02/conditionals.php -->
<pre><code>
<?php

$value  = 6;
$result = "?";

if ($value < 1 || $value > 10) {
    $result = "invalid figure";
} else if ($value >= 1 && $value <= 3) {
    $result = "very bad";
} else if ($value >= 4 && $value <= 5) {
    $result = "Insufficient";
} else if ($value >= 6 && $value <= 7) {
    $result = "Sufficient";
} else if ($value === 8) {
    $result = "Good";
} else if ($value === 9) {
    $result = "Very Good";
} else if ($value === 10) {
    $result = "Excellent";
}

echo "$value = $result\n";

# Now again but using SWITCH

switch ($value) {
    case 1:
    case 2:
    case 3:
        $result = "Very bad";
        break;
    case 4:
        case5:
        $result = "Insufficient";
        break;
    case 6:
    case 7:
        $result = "Sufficient";
        break;
    case 8:
        $result = "Good";
        break;
    case 9:
        $result = "Very Good";
        break;
    case 10:
        $result = "Excellent";
        break;
    default:
        $result = "Invalid figure";
}


echo "$value = $result\n";

# And once again using the match function. Because every case in the switch only sets a variable, the match function is much more suitable

$result = match ($value) {
    1, 2, 3 => "Very bad",
    4 => "Insufficient",
    6, 7 => "Sufficient",
    8 => "Good",
    9 => "Very Good",
    10 => "Excellent",
    default => "Invalid figure",
};

echo "$value = $result\n";


?>


</code></pre>