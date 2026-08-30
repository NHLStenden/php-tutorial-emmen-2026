<?php

# let's setup some variables to display later (this is comment by the way :))

$name = "Martin";
$surname = "Molema";

# now create text from the current date and time
$today = date("l F j, h:i:s");

# calculate something
$calculation = 283 * 4937;


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Example 2</title>
    <style>body {
            font-family: sans-serif
        }

        h1 {
            font-size: 1.3rem;
        }
    </style>
</head>
<body>
<?php
print("<h1>Welcome $name $surname </h1>")
?>
<p>
    This is a simple website using variables to add dynamic content. You can change the values of the variables on lines
    5 and 6 to display your own name.
</p>
<?php
    print("<p>Today is $today</p>");
    print("<p > 283 times 4937 = $calculation </p > ");
    if (date("Y") == "2026") {
        print("<p>Is it 2026? yes</p>");
    } else {
        print("<p>Is it 2026? no</p>");
    }

?>

</body>
</html>

