# Opdracht: zoeken en vinden

Voor deze opdracht zijn er verschillende manieren om het probleem op te lossen. De manier waarop je het probleem oplost, kan
meer of minder efficiënt zijn wat betreft het aantal stappen dat de functie moet doorlopen om het gewenste resultaat te bereiken.

## Met behulp van een foreach-lus

Het eerste probleem zou bijvoorbeeld kunnen worden opgelost met behulp van een `foreach`-lus: vergelijk gewoon alle items in de lijst met het
gezochte item. Het lijkt echter een beetje onzinnig om door te gaan met zoeken als je weet dat je het item al hebt gevonden. Zie de
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
de vergelijking niet zomaar kunnen opslaan zoals hieronder, omdat het resultaat dan bijna altijd `false` zou zijn, behalve wanneer het gezochte getal
precies op de laatste positie staat.

```php
$found = ($x === $item);
```

Daarom moeten we de ‘of’-operator gebruiken om een eerdere uitkomst op te slaan voor het geval het item al gevonden was.

Er is een manier om dit efficiënter te maken: bekijk de oplossing met de reguliere `for`-lus hieronder.

## Een while-lus gebruiken

Daarom kan de eerste opdracht het beste worden opgelost met een `while`-lus. Merk op dat er twee voorwaarden waar moeten zijn
om door te gaan met zoeken:

1. Het item is niet gevonden
2. De positie in de lijst ligt niet „voorbij het einde van de lijst“

Wat betreft de tweede voorwaarde: als er 10 items in de lijst staan, kun je niet op positie 11 of 15 zoeken naar een item in
die lijst. Dat levert een fout op. Onthoud dat posities in een array beginnen bij nul. De positie in een
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
instructie buiten het _bereik_ van de `for`-lus.

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

Gebruik de `break`-instructie dus spaarzaam en alleen als de code leesbaar genoeg blijft om later te begrijpen!

# Opdracht – zoek het hoogste getal

Bij het zoeken naar het hoogste getal moeten alle elementen worden verwerkt. Of toch niet? Er is een eenvoudige truc, zoals gebruikt in
`findHighest2`: sorteer de array gewoon in omgekeerde volgorde en kies vervolgens het eerste element. We moeten wel controleren of de array
niet leeg is: het ophalen van het eerste element uit een lege array levert een fout op!

```php
function findHighest2(array $list): int
{
    rsort($list, SORT_NUMERIC);
    if (count($list) === 0) {
        return 0;
    }
    return $list[0];
}
```

Maar in dit geval kunnen we het oplossen met behulp van een `foreach`, zoals hieronder weergegeven.

```php
function findHighest(array $list): int
{

    $highest = 0;
    foreach ($list as $item) {
        if ($item > $highest) {
            $highest = $item;
        }
    }
    return $highest;
}

```

We stellen vast dat in het geval van een lege array het hoogste getal nul is. Dit is een willekeurige keuze, want we hadden net zo
goed anders kunnen besluiten. Een manier om dit op te lossen is door ofwel een getal ofwel `false` terug te geven:

```php
function findHighest3(array $list): int | false
{
    rsort($list, SORT_NUMERIC);
    if (count($list) === 0) {
        return false;
    }
    return $list[0];
}

```

Merk op dat de retourwaarde ofwel een geheel getal (`int`) ofwel de **waarde** `false` is. Dat lijkt een beetje vreemd: een
waarde als type gebruiken, maar in PHP is dit toegestaan. Een retourtype dat meerdere typen beschrijft, wordt een ‘union-type’ genoemd. De aanroeper
heeft de verantwoordelijkheid om te controleren welk type is geretourneerd! Dus in dit geval gebruiken we een *ternaire operator* om een
afdrukbaar resultaat te creëren:

```php
  $highest1 = findHighest3([1,2,3,4,5]);
  echo ($highest1 === false) ? 'empty array' : $highest4
  $highest2 = findHighest3([]);
  echo ($highest2 === false) ? 'empty array' : $highest4
```

Merk op dat bij de tweede aanroep een lege array `[]` als parameter wordt doorgegeven.

Als de functieaanroep `findhighest3()` false retourneert, geven we "Empty Array" weer; anders geven we de daadwerkelijk
gevonden waarde weer.

# Opdracht 3 - het aantal keren dat een getal in een array voorkomt tellen

In dit geval hebben we een lijst met getallen, bijvoorbeeld 2,5 en 1. We willen controleren hoe vaak dit getal voorkomt in een andere lijst met
items, bijvoorbeeld 1,5,5,2,2,1,5. In dit geval zou dat het volgende opleveren:

* 1 komt twee keer voor
* 2 komt twee keer voor
* 5 komt drie keer voor

Dus moeten we een functie maken die twee arrays kan aannemen. Bekijk de functieverklaring van de functie
`findMultiple` eens.

```php
function findMultiple(array $search, array $list): array
```

Het gevolg is dat deze functie veel zoekacties zal uitvoeren. Als er 10 elementen in de `$search` zitten en 250 in de
`$list`, dan bestaat het risico dat de functie 10 x 250 = 2.500 stappen moet uitvoeren. De eerste functie `findMultiple`
werkt inderdaad op die manier.

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

In het voorbeeld is er nog een functie die daadwerkelijk het tellen uitvoert: `countItemOccurencesInList`. Dit maakt de
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
gezochte item, geeft deze één terug, anders nul. De operator `+=` betekent  "voeg een waarde toe aan de variabele links ervan"; in dit
geval `$occurences`.

We zouden onze functie ‘zoeken en overeenkomsten tellen’ enigszins kunnen verbeteren om te voorkomen dat alle items worden doorzocht. Een manier om
dit te doen, is door de te doorzoeken array te sorteren. Dus als de doorzochte array

```text
1,5,3,6,5,3,2,43,2
```

moeten we bij het zoeken naar bijvoorbeeld het getal 2 inderdaad alle elementen controleren. Als we de array echter sorteren tot

```text
1,2,2,3,3,5,5,6,43
```

is er een eenvoudige regel waarmee we onze zoekopdracht kunnen optimaliseren door te stoppen zodra het gezochte getal niet kleiner is dan het getal
dat op een bepaalde positie in de gesorteerde lijst is gevonden. Bij het zoeken naar het getal 2 zouden we bijvoorbeeld kunnen stoppen wanneer we het
getal 3 op de vierde positie vinden. Omdat we weten dat de lijst gesorteerd is, zal er nooit een getal 2 meer voorkomen zodra we
het getal 3 hebben gevonden.

Dit

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

We zouden kunnen berekenen hoeveel we hebben bespaard: dit is het aantal zoekstappen dat niet is uitgevoerd. Wanneer de `while`-lus is
afgerond, bevat de `$i`-variabele het aantal stappen dat we hebben gezet. Door dat te vergelijken met het werkelijke aantal items
in de lijst, krijgen we een percentage van de genomen stappen. De efficiëntie zou gedefinieerd kunnen worden als ‘het aantal niet-genomen stappen’. 
Dat is dus 

`100% - (steps taken - number of items in the list)  / 100`.

In PHP zou dit eruitzien zoals in de onderstaande code. We gebruiken `intval` om het `float` resultaat van de deling terug te brengen tot een eenvoudig geheel getal.

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

Bij het zoeken naar het getal ‘5’ werden dus zeven stappen gezet en werd 22% van de array niet doorzocht.

Bij gebruik van 1000 willekeurige getallen en 6 te zoeken getallen zou dit zonder optimalisatie kunnen leiden tot 6000 zoekopdrachten. 
```text
10 = 120 (88 %)
20 = 216 (78 %)
30 = 331 (66 %)
40 = 433 (56 %)
50 = 525 (47 %)
60 = 622 (37 %)
```

# Referenties

* [Union-typen in PHP](https://wiki.php.net/rfc/union_types_v2)