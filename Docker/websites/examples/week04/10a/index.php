<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Functions</title>
</head>
<body>
<pre><code>
<?php

$name = "Martin Molema";

// repeat a string

echo "Repeat the letter A 10 times:" . str_repeat('A', 10) . "\n";
echo "Repeat the letter ABC 10 times:" . str_repeat('ABC', 10) . "\n";


// padding and trimming

echo "Remove trailing  spaces: [". rtrim("    $name        ") . "] \n";
echo "Remove leading spaces: [". ltrim("    $name        ") . "] \n";
echo "Remove leading + trailing spaces: [". rtrim(ltrim("    $name        ")) . "] \n";

// searching

echo "Search the letter 'a' in $name : " . (str_contains($name, 'a') ?  "YES" : "NO") . "\n";
echo "Search the letter 'A' in $name : " . (str_contains($name, 'A')  ?  "YES" : "NO") . "\n";
echo "Search the location of the first occurence of the letter 'l' in $name : " . strpos($name, 'l') . "\n";
echo "Search the location of the first occurence of the letter 'm' in $name starting at the end: " . strrpos($name, 'm') . "\n";

// replacing

echo "Replace all letters 'a' with 'b' in Martin Molema: " . str_replace("a","b", $name) . "\n";

?>
</code></pre>
</body>
</html>
