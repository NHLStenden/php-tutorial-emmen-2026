# Week 4 - PHP - Functies voor variabelen

Informatie over PHP-variabelen kan erg nuttig zijn bij het programmeren. Meestal wil je controleren of een variabele
van een bepaald type is, bijvoorbeeld wanneer je gegevens uit een bestand of een HTML-formulier ontvangt (zie week 5).

# Foutopsporing

Soms wil je de inhoud van variabelen bekijken. PHP ondersteunt dit met een aantal foutopsporingsfuncties.

* `print_r` Geeft leesbare informatie over een variabele weer
* `var_dump` Geeft gedetailleerde informatie over een variabele weer

# Informatie over variabelen

Als je wilt controleren of een variabele bepaalde eigenschappen heeft, kun je functies zoals hieronder gebruiken:

* `is_array()` : Controleert of een variabele een array is (we behandelen arrays volgende week)
* `is_bool()`: Controleert of een variabele een booleaanse waarde is
* `is_integer()` en `is_int()`: Controleert of een variabele een geheel getal is
* `isset()` — Bepaalt of een variabele is gedeclareerd en niet null is

Conversiefuncties:
* `intval()`: haalt de gehele waarde van een variabele op (zelfs als het een tekenreeks is)
* `floatval()` en `doubleval()`: haal de drijvende-kommagetalwaarde van een variabele op (zelfs als het een tekenreeks is)
* `strval()`: converteert een variabele naar een tekenreeks

Enkele voorbeelden met een gehele waarde

```php
$x = 10;
var_dump($x);

echo "x is null? : "    . (is_null($x)  ? "yes" : "no") . "\n";
echo "x is integer? : " . (is_int($x)   ? "yes" : "no") . "\n";
echo "x is float? : "   . (is_float($x) ? "yes" : "no") . "\n";

```

Een drijvende-kommagetal gebruiken:

```php
$z = 1.2;
var_dump($z);

echo "z is null? : "    . (is_null($z)  ? "yes" : "no") . "\n";
echo "z is integer? : " . (is_int($z)   ? "yes" : "no") . "\n";
echo "z is float? : "   . (is_float($z) ? "yes" : "no") . "\n";

```

# Referenties

* [Functies voor het omgaan met variabelen](https://www.php.net/manual/en/ref.var.php)

