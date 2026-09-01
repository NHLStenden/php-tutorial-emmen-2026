# Opdracht: zoeken en het hoogste getal vinden

Voor deze opdracht zijn er een aantal verschillende manieren om het probleem op te lossen. De manier waarop je het probleem oplost, kan
meer of minder efficiënt zijn wat betreft het aantal stappen dat de functie moet doorlopen om het gewenste resultaat te bereiken.

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

We stellen vast dat bij een lege array het hoogste getal nul is. Dit is een willekeurige keuze, want we hadden net zo
goed iets anders kunnen kiezen. Een manier om dit op te lossen is door ofwel een getal ofwel `false` terug te geven:

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

Merk op dat de retourwaarde ofwel een geheel getal (`int`) is, ofwel de **waarde** `false`. Dat lijkt een beetje vreemd: een
waarde als type gebruiken, maar in PHP is dit toegestaan. Een retourtype dat meerdere typen beschrijft, wordt een ‘union-type’ genoemd. De aanroeper
heeft de verantwoordelijkheid om te controleren welk type is geretourneerd! In dit geval gebruiken we dus een *ternaire operator* om een
afdrukbaar resultaat te creëren:

```php
  $highest1 = findHighest3([1,2,3,4,5]);
  echo ($highest1 === false) ? 'empty array' : $highest4
  $highest2 = findHighest3([]);
  echo ($highest2 === false) ? 'empty array' : $highest4
```

Merk op dat bij de tweede aanroep een lege array `[]` als parameter wordt doorgegeven.

Als de functieaanroep `findhighest3()` ‘false’ retourneert, geven we ‘Empty Array’ weer; anders geven we de daadwerkelijk
gevonden waarde weer.

# Referenties

* [Union-typen in PHP](https://wiki.php.net/rfc/union_types_v2)