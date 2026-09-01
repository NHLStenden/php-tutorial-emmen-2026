# Week 4 - PHP - Functietypen

Functies nemen parameters aan. Om ervoor te zorgen dat de functie correct werkt, kun je voor elke parameter een type aangeven.

Bekijk dit voorbeeld met een PHP-functie eens.

```php
  function addNumbers(int $first, int $second): int 
  {
      $result = $first + $second;
      
      return $result;
  }

```

Hier zien we de opbouw van een functie:

* het sleutelwoord `function`
* de naam van de functie: `addNumbers`
* twee parameters
    * `$first` met het type `int`
    * `$second` met het type 'int'
* een retourtype: `int` (aan het einde, na de `:`)
* een hoofdgedeelte dat ‘het werk doet’
    * `$result = $first + $second;`
* het resultaat retourneren
    * `return $result`

Nu we een functie hebben, kunnen we deze gebruiken. Dit wordt **"de functie aanroepen"** genoemd. Bekijk nogmaals het onderstaande voorbeeld.

```php
  $a = 10;
  $b = 20;
  $c = addNumbers($a, $b);

  echo $c;
```

Eerst worden twee variabelen aangemaakt: `$a` met de waarde `10` en `$b` met de waarde `20`. Vervolgens wordt de functie aangeroepen
met behulp van `addNumbers($a, $b)`, waarbij de twee parameters van de functie worden opgegeven.

Het resultaat wordt *'vastgelegd'*  door de variabele `$c`. De laatste instructie toont de waarde aan de webpagina/gebruiker met behulp van
`echo`.

Let op: het is **geen goede praktijk** om de functie ook naar `echo` te laten gaan: op deze manier voert de functie twee taken uit
die achteraf nooit meer van elkaar kunnen worden gescheiden. 

# Functies combineren

Als je deze stappen toch wilt combineren, laat dan de ene functie de andere aanroepen. In het voorbeeld is er een nieuwe functie met de naam
`addAndEchoNumbers`. Let op: deze functie heeft geen retourtype; er wordt het speciale 'type' `void` gebruikt.

Deze berekent eerst de optelsom met behulp van de functie die we eerder hebben gebouwd, en toont vervolgens het resultaat op een vooraf gedefinieerde manier
aan de gebruiker/webpagina.

```php
function addAndEchoNumbers(int $first, int $second): void
{
    $c = addnumbers($first, $second);
    echo "$first + $second = $c\n";
}

```

Dit kan vervolgens worden aangeroepen met behulp van de onderstaande functieaanroep.

```php
  addAndEchoNumbers($a, $b);
```



# Referenties

* [PHP: typen](https://www.php.net/manual/en/language.types.php)
* [PHP: typesysteem](https://www.php.net/manual/en/language.types.type-system.php)
* [PHP: drijvende-kommagetallen](https://www.php.net/manual/en/language.types.float.php)
* 