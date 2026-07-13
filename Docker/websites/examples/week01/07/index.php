<?php

# let's setup some variables to display later (this is comment by the way :))

$name = "Martin";
$surname = "Molema";

# now create text from the current date and time
$today = date("l F j, h:i:s");

# calculate something
$calculation = 283 * 4937;

if (date("Y") == "2026") {
    $isIt2026 = "yes";
}
else {
    $isIt2026 = "no";
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
<?php echo <<< END_OF_HTML
    <h1>Welcome $name $surname </h1>
    <p>
      This is a simple website using variables to add dynamic content. You can change the values of the variables on lines
        5 and 6 to display your own name.
    </p>
    <p>Today is $today</p>
    <p>283 times 4937 = $calculation</p>
    <p>Is it 2026? $isIt2026</p>
END_OF_HTML;
?>

</body>
</html>

