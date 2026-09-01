#   Week 2 - PHP - Voorwaardelijke constructies

In dit voorbeeld worden een aantal veelgebruikte eenvoudige vergelijkingen ('booleaanse uitdrukkingen') gedemonstreerd.

## Controleren of twee waarden gelijk zijn

Om te vergelijken of twee waarden gelijk zijn, gebruiken we de operator `===`. Later zullen we begrijpen waarom er drie `=` zijn.

```php
$a = 10;
$b = 20;

if ($a === $b) {
    print "A and B are the same\n";
} else {
    print "A and B are not the same\n";
}
```

## Controleer of waarden groter of kleiner zijn met behulp van `<` en `>`

```php
$a = 10;
$b = 20;

if ($a > $b) {
    print "A is greater than b\n";
}
else {
    print "A is less than b\n";
}
```

## De NOT-operator gebruiken

De `not`-operator wordt weergegeven met een uitroepteken `!`. In het voorbeeld wordt dus een functie `is_null()` gebruikt om te controleren
of een waarde `null` is. Als de waarde van `$x` **niet** null is, wordt de eerste tak uitgevoerd en wordt „A is niet
null“ weergegeven.

```php

$x = null;

if (! is_null($x)) {
    print "x is not null\n";
}
else {
    print "x is null\n";
}
```

Hier

```php
$a = 10;
$b = 20;

if ($a !== $b) {
    print "A and B are the not same\n";
}
else {
    print "A and B are the same\n";
}
```

## Eerst het resultaat van een vergelijking in een variabele opslaan

We kunnen het resultaat van een vergelijking in een variabele opslaan. Bekijk het onderstaande voorbeeld

```php
$c = ($a <= $b);
```

Nu is de waarde van $c altijd `true` of `false`. We kunnen dit toetsen in een `if`-instructie. Let op: we gebruiken alleen de waarde of
`$c` in plaats van `$c === true`. Want bij het evalueren van de waarde van `$c` levert dit al `true` of `false` op.

```php
if ($c) {
    print "A is smaller or equal to b\n";
}

```

We kunnen het resultaat van de vergelijking ook omkeren:

```php

$d = ! ($a <= $b);
if ($d) {
    print "A is greater than b\n";
}

```

Dit zou hetzelfde zijn als hieronder. Eerst is de waarde van `$c` waar als `$a` kleiner is dan of gelijk is aan `$b`. Hier, in de `if`
-instructie, wordt de waarde van `$c` omgekeerd. 

Vergelijk dit met het voorbeeld van de `is_null()`-functie hierboven.

```php
$c = ($a <= $b);
if (! $c) {
    print "A is greater than b\n";
}

```

