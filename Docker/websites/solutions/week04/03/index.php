<?php
function createShapes1(int $nrOfLines, int $nrOfStars): string
{
    $result = '';
    for ($i = 0; $i < $nrOfLines; $i++) {
        for ($j = 0; $j < $nrOfStars; $j++) {
            $result .= "*";
        }
        $result .= "\n";
    }
    return $result;
}
function createShapes2(int $nrOfLines, string $char1, string $char2): string
{
    $result = '';
    for ($i = 0; $i < $nrOfLines; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            $result .= $char1;
        }
        for(;$j < $nrOfLines; $j++) {
            $result .= $char2;
        }
        $result .= "\n";
    }
    return $result;
}

function createPyramids(int $nrOfLines): string {
    $result = '';

    $nrOfStars = $nrOfLines * 2 - 1;

    for ($i = 0; $i < $nrOfLines ; $i++) {

        $result .= str_repeat("   ", $i);
        $result .= str_repeat(" * ", $nrOfStars);
        $result .= str_repeat("   ", $i);

        $result .= "\n";
        $nrOfStars -= 2;
    }
    return $result;
}
function createPyramidsReverse(int $nrOfLines): string {
    $result = '';
    $nrOfStars = 1;
    $width = $nrOfLines * 2;

    for ($i = 0; $i < $nrOfLines ; $i++) {

        $spaces = intval(($width - $nrOfStars) / 2.0);

        $result .= str_repeat("   ", $spaces);
        $result .= str_repeat(" * ", $nrOfStars);
        $result .= str_repeat("   ", $spaces);

        $result .= "\n";
        $nrOfStars += 2;
    }
    return $result;
}
function createPyramidsLeft(int $maxWidth): string {
    $result = '';

    $nrOfLines = $maxWidth * 2 - 1;
    $direction = 1;
    $nrOfStars = 1;

    for ($i = 1; $i <= $nrOfLines ; $i++) {
        $result .= str_repeat(" * ", $nrOfStars );

        if ($i === $maxWidth) {
            $direction *= -1;
        }
        $nrOfStars += $direction;
        $result .="\n";
    }
    return $result;
}
function createPyramidsRight(int $maxWidth): string {
    $result = '';

    $nrOfLines = $maxWidth * 2 - 1;
    $direction = 1;
    $nrOfStars = 1;

    for ($i = 1; $i <= $nrOfLines ; $i++) {
        $result .= str_repeat("   ", $maxWidth - $nrOfStars );
        $result .= str_repeat(" * ", $nrOfStars );

        if ($i === $maxWidth) {
            $direction *= -1;
        }
        $nrOfStars += $direction;
        $result .="\n";
    }
    return $result;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 3a</title>
</head>
<body>
  <pre>
      <code>
<?= createShapes1(1,10,1) ?>
-----------------------------------------------------------------------------------
<?= createShapes1(4,10,1) ?>
-----------------------------------------------------------------------------------
<?= createShapes2(10,"*"," ") ?>
-----------------------------------------------------------------------------------
<?= createShapes2(10," ","*") ?>
-----------------------------------------------------------------------------------
<?= createPyramids(5) ?>
-----------------------------------------------------------------------------------
<?= createPyramidsReverse(5) ?>
-----------------------------------------------------------------------------------
<?= createPyramidsLeft(7) ?>
-----------------------------------------------------------------------------------
<?= createPyramidsRight(7) ?>

      </code>
  </pre>
</body>
</html>
