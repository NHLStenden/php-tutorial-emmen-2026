# Week 4 - PHP - Voorbeeld met arrays en functies

In dit voorbeeld definiëren we een array met ‘records’: elk element in de hoofdarray is een verzameling sleutel-waarde-paren.
Met deze array gaan we een HTML-code `<table>` opbouwen.

Bekijk de array eens:

```php
$table = [
        ["Name" => "Jack", "Age" => 10, "X" => 2.4, "Y" => 12],
        ["Name" => "John", "Age" => 12, "X" => 9, "Y" => 23],
        ["Name" => "Alice", "Age" => 10, "X" => 5, "Y" => 9],
];
```

De array bevat dus drie elementen, die elk bestaan uit een array van sleutel-waardeparen. Dit komt neer op het volgende:

```php
$row1 = [
        "Name" => "Jack",
        "Age" => 10,
        "X" => 2.4,
        "Y" => 12
];
$row2 = [
        "Name" => "John",
        "Age" => 12,
        "X" => 9,
        "Y" => 23
];
$row3 = [
        "Name" => "Alice",
        "Age" => 10,
        "X" => 5,
        "Y" => 9
];
$table = [$row1, $row2, $row3];
```

Nu gebruiken we een eenvoudige lus om de 'rijen' in de array te doorlopen en roepen we een functie aan die een HTML-tabelrij retourneert
met HTML-gegevenscellen.  

```php
$html  = "";
foreach ($table as $row) {
    $html = $html . CreateHTMLForRecord($row);
}
```

We beginnen met het initialiseren van een variabele met de lege tekenreeks om alle HTML op te vangen die de functie zal retourneren. Telkens wanneer
de functie een waarde retourneert, voegen we deze toe aan de reeds verzamelde HTML. We gebruiken de `.` (punt)operator die 
de bestaande HTML 'samenvoegt’ (kortweg ‘concat’) met de nieuw verkregen HTML uit de functie.

De functie haalt simpelweg alle waarden uit de records op. Omdat we een tekenreeks als sleutel hebben gebruikt, kunnen we de informatie gemakkelijk
uit de array ophalen. De functie wordt hieronder weergegeven. Omdat het ophalen van een waarde uit een array iets ingewikkelder is dan bij een eenvoudige
variabele wanneer deze in een tekenreeks wordt gebruikt, moeten we deze omringen met `{....}`.

```php
function CreateHTMLForRecord(array $values): string
{
    $html = "<tr>";

    $html = $html . "<td>{$values['Name']}</td>";
    $html = $html . "<td>{$values['Age']}</td>";
    $html = $html . "<td>{$values['X']}</td>";
    $html = $html . "<td>{$values['Y']}</td>";
    return $html;
}

```


Dit komt overeen met de onderstaande functie, die wellicht iets beter leesbaar is. 

```php
function CreateHTMLForRecord2(array $values): string
{
    $html = "<tr>";
    $name = $values['Name'];
    $age = $values['Age'];
    $x = $values['X'];
    $y = $values['Y'];

    $html = $html . "<td>$name</td>";
    $html = $html . "<td>$age</td>";
    $html = $html . "<td>$x</td>";
    $html = $html . "<td>$y</td>";
    return $html;
}

```

We kunnen het resultaat `$HTML` nu eenvoudig in de hoofdcode combineren met de HTML-body, zoals hieronder weergegeven. Let op hoe we de
`<?= ..... ?>`-constructie gebruiken om een variabele weer te geven, wat hetzelfde is als `<?php echo $html ?>`. 

```php
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th></th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?= $html ?>
    </tbody>
</table>
```
