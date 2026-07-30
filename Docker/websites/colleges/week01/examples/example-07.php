<?php
$name     = "Martin";
$lastname = "Molema";

$today = date("l F j, h:i:s");

$x = 5;
$y = 13;
$z = $x * $y;

?>
<!doctype html>
<html lang="en">
<head>
    <title>Basic PHP</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<p>
    Welcome <?php echo $name . " " . $lastname; ?>!
</p>
<p>
    Today is <?= $today ?>.
</p>
<p>
    <?= $x ?> times <?= $y ?> = <?= $x * $y ?> (indeed <?= $z ?>).
</p>

<footer>
    <p>
        See more at the examples of <a href="../../examples/week01/">Week 1</a>
    </p>
</footer>
</body>
</html>
