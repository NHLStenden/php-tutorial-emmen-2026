<pre><code>
<?php

$name = $_GET['name'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$host = $_SERVER['HTTP_HOST'];

echo "Name from URL: $name\n";
echo "Protocol: $protocol\n";
echo "Host: $host\n";

$name = "Martin";
$surname = "Molema";

echo "$name $surname" . PHP_EOL;

$name = "Pietje";
$surname = "Puk";


echo "$name $surname\n";

{
    $x = "Karel";
}
echo $x;

echo "Pi = " . pi() . PHP_EOL;

echo "Sin PI = " . sin(pi()) . PHP_EOL;


echo <<< LOTS_OF_HTML
<p>Naam: $name </p> 

LOTS_OF_HTML;


?>
</code></pre>


