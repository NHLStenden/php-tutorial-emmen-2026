# Week 2 - PHP -  Voorwaardelijke constructies en typeconversie

Bij het vergelijken van waarden probeert PHP soms de twee delen van een vergelijking naar hetzelfde type om te zetten

## Controle op typeconversie

Wanneer je een vergelijking gebruikt om te controleren of twee waarden gelijk zijn, kan PHP beide delen van de vergelijking naar hetzelfde type omzetten
voordat de waarden worden vergeleken. Dit is het verwachte gedrag bij gebruik van de `==`-operator. Zie het onderstaande voorbeeld.

```php

$a = "10";
$b = 10;

if ($a == $b) {
    print "a and be are the same\n";
}
else {
    print "b and b  are not the same\n";
}
```

Verrassend genoeg is het resultaat dat $a en $b dezelfde waarde hebben, ook al is $a een tekenreeks en $b een getal (int of
float).

```php

$a = "10";
$b = 10;

if ($a === $b) {
    print "a and b are the same\n";
}
else {
    print "b and b are not the same\n";
}
```

## Typevergelijking met getallen

Let op: bij het vergelijken van getallen kan er enigszins onverwacht gedrag optreden! Zie de voorbeelden hieronder. Bij gebruik van de
`==`-vergelijking is het resultaat zoals verwacht. Bij gebruik van de `===`-operator zal PHP besluiten dat de variabelen `$x` en `$y`
niet hetzelfde zijn!

```php


$x = 10.0;
$y = 10;

if ($x == $y) {
    print "x and be are the same\n";
}
else {
    print "x and y not are the same\n";
}

if ($a === $b) {
    print "x and y are the same\n";
}
else {
    print "x and y are not the same\n";
}
```

## Vergelijking van float-waarden

Omdat twee drijvende-kommagetallen iets anders kunnen worden weergegeven dan de berekende of toegewezen waarde, is het
moeilijk om te bepalen of twee drijvende-kommagetallen ‘hetzelfde zijn’. Bovendien kan de definitie van ‘hetzelfde zijn’
in verschillende situaties sterk verschillen. Bij zeer grote getallen (bijvoorbeeld miljoenen dollars) maakt een verschil van
enkele centen misschien niet uit. Bij het berekenen van waarden tussen 0 en 1 kan echter zelfs een waarde van een tiende
je algoritme al verpesten. Daarom moet je vaak een marge definiëren met de naam ‘epsilon’, wat betekent: ‘als het verschil tussen twee getallen
kleiner is dan dit zeer kleine getal, dan beschouw ik ze als gelijk’.

In het onderstaande voorbeeld wordt dit getoond. (uitleg onder het voorbeeld)

```php
$p = 10.000000000001;
$q = 10.000;
const EPSILON = 1e-5;
print "margin = " . number_format(EPSILON, 10) . "\n}";

if (abs($p - $q) <== EPSILON) {
    print "The two floats p and q are roughly the same";
}
```

Eerst worden de twee variabelen `$p` en `$q` aangemaakt. Ze zijn van het type `float`. Vervolgens wordt een constante gedefinieerd met behulp van het
trefwoord `const`
. Constanten worden vaak in hoofdletters geschreven om ze te onderscheiden van variabelen.

De waarde van `EPSILON` wordt uitgedrukt met een wetenschappelijke notatie:  "één tot de macht min 5", wat resulteert in
`0.00001`.

De waarde van `EPSILON` wordt weergegeven met behulp van de ingebouwde PHP-functie `number_format` (zie de referentielijst aan het einde van
dit artikel).

Vervolgens wordt een vergelijking uitgevoerd. De vergelijking bestaat uit de volgende onderdelen

* aftrekking van `$p` en `$q`: `$p - $q`.
* een aanroep van de ingebouwde PHP-functie `sub()`; hierdoor wordt het resultaat altijd een positief getal (groter dan
  nul)
* een vergelijking tussen de absolute waarde van het verschil en `EPSILON` met behulp van `<==`: **kleiner dan of gelijk aan**. Dit
  levert ‘true’ op als de absolute waarde van het verschil kleiner is dan of gelijk is aan `EPSILON`.

Let op: `<==` voert geen typeconversie uit! De functie `abs()` staat zowel `int` als `float` toe. We zullen hier
in week 3 dieper op ingaan bij het behandelen van functies.


# Conclusies

De aanbevolen werkwijze is om altijd de `===`-operator te gebruiken. Bij het vergelijken van drijvende-kommagetallen moet je een marge (‘epsilon’) gebruiken

# Referenties

* [PHP-vergelijkingsoperatoren](https://www.php.net/manual/en/language.operators.comparison.php)
* [PHP number_format ()](https://www.php.net/manual/en/function.number-format.php)
* [PHP abs ()](https://www.php.net/manual/en/function.abs.php)