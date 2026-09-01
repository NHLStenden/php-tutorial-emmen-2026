# Opdracht: zoeken en vinden

Voor deze opdracht zijn er verschillende manieren om het probleem op te lossen. De manier waarop je het probleem oplost, kan
meer of minder efficiënt zijn wat betreft het aantal stappen dat de functie moet doorlopen om het gewenste resultaat te bereiken.

## Met behulp van een foreach-lus

Het eerste probleem zou bijvoorbeeld opgelost kunnen worden met een `foreach`-lus: controleer gewoon alle items in de lijst aan de hand van het
gezochte item. Het lijkt echter een beetje onzinnig om door te zoeken als je weet dat je het item al gevonden hebt. Zie de
`find2`-functie:

```php
function find2(int $x, array $list): string
{
    $found = false;
    foreach ($list as $item) {
        $found = ($x === $item) || $found;
    }
    return $found ? "success" : "fail";
}
```

Merk op dat de functie vrij eenvoudig is en slechts een paar variabelen bevat. Merk ook op dat we het resultaat van
de vergelijking niet zomaar kunnen opslaan zoals hieronder, omdat de uitkomst dan bijna altijd `false` zou zijn, behalve wanneer het gezochte getal
precies op de laatste positie staat.

```php
$found = ($x === $item);
```

Daarom moeten we de ‘of’-operator gebruiken om een eerdere uitkomst op te slaan voor het geval het item al gevonden was.

Er is een manier om dit efficiënter te maken: bekijk de oplossing met de reguliere `for`-lus hieronder.

## Een while-lus gebruiken

Daarom kan de eerste opgave het beste worden opgelost met een `while`-lus. Let op: er moeten twee voorwaarden
waar zijn om door te gaan met zoeken:

1. Het item is niet gevonden
2. De positie in de lijst ligt niet „voorbij het einde van de lijst“

Wat betreft de tweede voorwaarde: als er 10 items in de lijst staan, kun je niet op positie 11 of 15 zoeken naar een item in
die lijst. Dat levert een fout op. Onthoud dat posities in een array bij nul beginnen. De positie in een
lijst met 20 items kan dus niet hoger zijn dan 19.

```php
function find(int $x, array $list): string
{
    $i         = 0;
    $nrOfItems = count($list);
    $found     = false;

    while (!$found && $i < $nrOfItems) {
        $found = ($x === $list[$i]);
        $i++;
    }
    return $found ? "success" : "fail";
}

```

## Een for-lus gebruiken met een `break`

Een derde manier om dit op te lossen is door een normale `for`-lus te gebruiken in combinatie met een `break`-instructie. We kennen dit sleutelwoord al
van de `switch()`-instructie. Wanneer het binnen een `for`-lus wordt gebruikt, wordt de for-lus afgebroken en wordt doorgegaan met de volgende
instructie buiten de _scope_ van de `for`-lus.

```php
function find3(int $x, array $list): string
{
    $nrOfItems = count($list);
    $found     = false;
    for ($i = 0; $i < $nrOfItems; $i++) {
        $found = ($x === $list[$i]);
        if ($found) {
            break;
        }
    }
    return $found ? "success" : "fail";
}

```

De break-instructie kan ook worden gebruikt in een `foreach` of `while`. Wanneer je deze echter in een `while` gebruikt, gaat dit enigszins in tegen
het doel van de voorwaarden in de `while`-instructie.

Gebruik de `break`-instructie dus spaarzaam en alleen als de code leesbaar genoeg blijft om later te kunnen begrijpen!

# Referenties

* [Union-typen in PHP](https://wiki.php.net/rfc/union_types_v2)