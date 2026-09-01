# Opdracht 3 - het aantal herhalingen in een array tellen

In dit geval hebben we een lijst met getallen, bijvoorbeeld 2, 5 en 1. We willen nagaan hoe vaak dit getal voorkomt in een andere lijst met
elementen, bijvoorbeeld 1, 5, 5, 2, 2, 1, 5. In dit geval zou dat het volgende opleveren:

* 1 komt twee keer voor
* 2 komt twee keer voor
* 5 komt drie keer voor

Dus moeten we een functie maken die twee arrays kan aannemen. Bekijk de functieverklaring van de functie
`findMultiple` eens.

```php
function findMultiple(array $search, array $list): array
```

Hierdoor zal deze functie veel zoekacties uitvoeren. Als er 10 elementen in `$search` staan en 250 in
`$list`, bestaat het risico dat de functie 10 x 250 = 2.500 stappen moet uitvoeren. De eerste functie `findMultiple`
werkt inderdaad zo.

```php
function findMultiple(array $search, array $list): array
{
    $results = [];
    foreach ($search as $item) {
        $results[$item] = countItemOccurencesInList($item, $list);
    }
    return $results;
}

```

In het voorbeeld is er nog een andere functie die daadwerkelijk het tellen uitvoert: `countItemOccurencesInList`. Dit maakt de
functie `findMultiple` beter leesbaar en stelt ons in staat om verschillende benaderingen te kiezen bij het tellen van items.

```php
function countItemOccurencesInList(int $x, array $list): int
{
    $occurences = 0;
    foreach ($list as $item) {
        $occurences += ($x === $item) ? 1 : 0;
    }
    return $occurences;
}
```

Deze functie ontvangt de lijst en de gezochte items. Met behulp van een `foreach`-lus controleert deze alle items.

Hier maakt de ternaire operator `expr ? true-part : false-part` het tellen van items eenvoudig: als een item overeenkomt met het
gezochte item, retourneert deze één, anders nul. De operator `+=` betekent  "voeg een waarde toe aan de variabele links ervan"; in dit
geval `$occurences`.


# De oplossing verbeteren (optioneel)

We zouden onze functie voor „zoeken en overeenkomsten tellen” enigszins kunnen verbeteren om te voorkomen dat alle items worden doorzocht. Een manier om
dit te doen, is door de te doorzoeken array te sorteren. Dus als de doorzochte array

```text
1,5,3,6,5,3,2,43,2
```

moeten we bij het zoeken naar het getal 2 bijvoorbeeld echt alle elementen controleren. Als we de array echter sorteren tot

```text
1,2,2,3,3,5,5,6,43
```

is er een eenvoudige regel waarmee we onze zoekopdracht kunnen optimaliseren door te stoppen als het gezochte getal niet kleiner is dan het getal
dat op een bepaalde positie in de gesorteerde lijst is gevonden. Bij het zoeken naar het getal 2 zouden we bijvoorbeeld kunnen stoppen wanneer we het
getal 3 op de vierde positie vinden. Omdat we weten dat de lijst gesorteerd is, zal er nooit een getal 2 voorkomen wanneer we
het getal 3 vinden.

Dit komt tot uiting in de onderstaande oplossing. 

```php
function findFast(int $x, array $list): int
{
    $occurrences     = 0;
    $i               = 0;
    $nrOfItemsInList = count($list);

    if ($nrOfItemsInList === 0) {
        return 0;
    }

    $stopLooking = $x < $list[0];
    while (!$stopLooking) {
        $item = $list[$i];
        $occurrences += ($x === $item) ? 1 : 0;
        $i++;
        $stopLooking = ($i === $nrOfItemsInList) || ($x < $list[$i]);
    }
    return $occurrences;
}

```

Dit kan natuurlijk ook worden gedaan met behulp van een `foreach`- en een `break`-instructie. Als we echter de efficiëntie
van het algoritme willen berekenen, hebben we nog steeds enkele hulpvariabelen nodig.

We zouden kunnen berekenen hoeveel we hebben bespaard: dit is het aantal zoekstappen dat niet is uitgevoerd. Wanneer de `while`-lus
is voltooid, bevat de variabele `$i` het aantal stappen dat we hebben gezet. Door dat te vergelijken met het werkelijke aantal items
in de lijst, krijgen we een percentage van de genomen stappen. De efficiëntie zou gedefinieerd kunnen worden als ‘het aantal stappen dat niet is gezet’. 
Dat is dus 

`100% - (steps taken - number of items in the list)  / 100`.

In PHP zou dit eruitzien zoals in de onderstaande code. We gebruiken `intval` om het resultaat van de deling in `float` terug te brengen tot een eenvoudig geheel getal.

* `$x` is het gezochte getal
* `$i` is het aantal genomen stappen
* `$nrOfItemsInList` is het aantal items in de lijst

```php
    $efficiency = intval(100 - ($i / $nrOfItemsInList) * 100);
    echo "$x = $i ($efficiency %)";
```

Dit levert `findMultipleFaster([2,5,1], [1,5,3,6,5,3,2,43,2]);` op. 

```text
2 = 3 (66 %)
5 = 7 (22 %)
1 = 1 (88 %)
```

Tijdens het zoeken naar het getal ‘5’ werden dus zeven stappen gezet en werd 22% van de array niet doorzocht.

Bij gebruik van 1000 willekeurige getallen en 6 getallen om te doorzoeken, zou dit zonder optimalisatie kunnen leiden tot 6000 zoekopdrachten. 
```text
10 = 120 (88 %)
20 = 216 (78 %)
30 = 331 (66 %)
40 = 433 (56 %)
50 = 525 (47 %)
60 = 622 (37 %)
```

Dit zou kunnen leiden tot gemiddeld 50% minder stappen om alle resultaten te vinden.