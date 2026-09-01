# Week 2 - PHP - Voorwaardelijke evaluatie

PHP verwerkt een deel van een booleaanse uitdrukking niet als het de uitkomst al kent

Voorbeeld

```php
True || (10 * 10 === 100) 
```

De uitdrukking (10 * 10 === 100) wordt niet geëvalueerd, omdat bij gebruik van „OR“ slechts één deel waar hoeft te zijn om
waar op te leveren. Aangezien het eerste deel al 'waar' is, is het niet nodig om de rechterkant van de OR-operator te evalueren

Nog een voorbeeld

```php
(1 + 2 == 3) || (do_something_useful (1,3))
```

Dit geval is hetzelfde: (1+2===3) levert 'true' op. De functie `do_something_useful` wordt dus niet aangeroepen!

Vertrouw niet op dit gedrag: als het voor je toepassing essentieel is dat de functie wordt aangeroepen, doe dat dan vóór de
vergelijking

# Hoe je hier nuttig gebruik van kunt maken

Bijvoorbeeld het onderstaande voorbeeld:

```php
  $x = divide($a, $b);
  if ($x !== null) && ($x > 1)) {....}
```

De booleaanse uitdrukking gebruikt && (en-operator). Dit betekent dat beide elementen waar moeten zijn om het codeblok uit te voeren. Als de
eerste operand ($x !== null) ‘false’ oplevert, weet PHP dat de uitkomst altijd ‘false’ zal zijn en zal het (`$x>1`) niet evalueren;

Het evalueren van ($x>1) wanneer $x gelijk is aan null, leidt tot een fout. Door eerst ($x !== null) te evalueren, zorg je ervoor dat dit
veilig is. Op deze manier zijn twee IF-statements zoals hieronder niet nodig.  

```php
  $x = divide($a, $b);
  if ($x !== null) {
    if ($x > 1) {
    ....
    }
  } 

```