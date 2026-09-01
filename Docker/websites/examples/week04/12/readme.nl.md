# Week 4 - PHP - Door de gebruiker gedefinieerde functies

Een door de gebruiker gedefinieerde functie is een functie die je als programmeur zelf maakt. Je geeft de functie een naam,
voegt optionele parameters toe en schrijft de body van de functie.  

## Parameters

Een functie heeft vaak parameters. Deze parameters kunnen worden voorzien van een type-indicator. Dit geeft aan dat de functie
alleen variabelen van het opgegeven type accepteert. Als een programmeur die functie aanroept met een ander type, wordt er een foutmelding
weergegeven. Dit leidt er vaak toe dat de rest van de PHP-code wordt gestopt

```html
function calc(int $a, int $b): int {
    $result = $a + $b;

    return $result;
}
```

De bovenstaande functie accepteert twee gehele getallen (`int` is de type-indicator voor gehele getallen, dus alleen hele getallen). De functie
berekent een resultaat door de parameters `$a` en `$b` bij elkaar op te tellen en slaat dit op in de variabele `$result`.

De namen van de parameters kunnen worden gekozen op basis van hun doel. Voor het benoemen van een parameter gelden dezelfde regels als voor het benoemen van
een gewone parameter. Zelfs als je een naam kiest die in de rest van de code al een variabele is, is dat geen
probleem. 

## Doorgeven via verwijzing of als waarde

Functies kunnen normaal gesproken de variabelen die ze krijgen om hun werk te doen niet wijzigen. Bekijk de onderstaande functie:
```php
function calc2(int $a, int $b): int
{
    $a = $a + 1;
    $b = $b + 1;
    return $a * $b;
}

$a = 1;
$b = 2;
$d = calc2($a, $b);
print("($a + 1) * ($b + 1) = $d\n");
```

Binnen het *bereik* van de functie worden de parameters `$a` en `$b` gewijzigd. Bij het uitvoeren van de `print`-instructie
blijven de oorspronkelijke waarden van `$a` (namelijk 1) en `$b` (namelijk 2) echter ongewijzigd. 

De variabelen `$a` en `$b` worden als waarde aan de functie doorgegeven. Je kunt je dus voorstellen dat de waarden van de variabelen 
naar de functie worden gekopieerd.

Als we kijken naar de functie `sort()` die in PHP is ingebouwd, zien we een verschil:
> Sorteer een array in oplopende volgorde

Deze functie heeft een andere functieverklaring:
```php
function sort(array &$array, int $flags = SORT_REGULAR) {
 ... 
}
```

Let op het teken `&` voor de variabelenaam. Dit betekent:
> Kopieer de waarden van de variabele niet, maar sta de functie toe de waarde van de parameter te wijzigen.

Dit wordt ‘**pass by reference**’ genoemd: in plaats van te kopiëren, zegt PHP tegen de functie: “je kunt de variabele 
daar vinden”, zodat de functie deze kan wijzigen. 

Nogmaals, in sommige situaties is dit een goede zaak, maar meestal wil je niet dat een functie de variabelen wijzigt die
aan de functie worden doorgegeven, tenzij dit **goed gedocumenteerd** is!

In het geval van een sorteerfunctie is dit een goede keuze: wanneer een zeer grote array eerst gesorteerd en gekopieerd moet worden,
kan dit veel geheugen in beslag nemen. Door de array als referentie door te geven, is het niet nodig om eerst de hele array te kopiëren.

Let op: de beslissing of een functie haar parameters mag wijzigen, is de verantwoordelijkheid van de **functie** zelf, niet van degene
die de functie aanroept of gebruikt. In oudere versies van PHP was het toegestaan om de aanroeper hierover te laten beslissen, maar deze mogelijkheid is verwijderd.

## Standaardwaarden opgeven

Soms worden functieparameters niet vaak gebruikt, omdat in veel gevallen een standaardwaarde voor 
veel programmeurs de juiste waarde is. Als de functie in sommige gevallen echter wel configureerbaar moet zijn, kun je een parameter
met een standaardwaarde gebruiken. Parameters met een standaardwaarde worden optioneel bij het aanroepen van de functie.

Dit hebben we al gezien bij de functie `sort()`. In de meeste gevallen wil je dat de functie `sort()` op 
de gebruikelijke manier oplopend sorteert. Maar misschien wil je deze keer dat de sorteerfunctie de waarden als getallen behandelt of hoofdlettergevoeligheid negeert.
Als we de [documentatie](https://www.php.net/manual/en/function.sort.php) bekijken, zien we dat `SORT_REGULAR` de
standaardinstelling is, maar je kunt verschillende opties opgeven om het gedrag van de sorteerfunctie te wijzigen.

Let op: parameters met een standaardwaarde moeten altijd aan het einde van de functieverklaring staan:

```php
function doSomething(int $a, int $b, bool $low=true,bool $high=false): int {
.....
}
```

In het bovenstaande voorbeeld zijn er twee normale parameters (`$a` en `$b`) en twee parameters met een standaardwaarde: `$low` 
heeft een standaardwaarde van `true` en de variabele `$high` heeft een standaardwaarde van `false`. Bij het aanroepen van deze functie zijn de 
volgende manieren om de functie aan te roepen toegestaan

```php
$x = doSomething(1,2);
$x = doSomething(1,2, true);
$x = doSomething(1,2, true, true);
$x = doSomething(1,2, false);
$x = doSomething(1,2, false, false);
```

Merk echter op dat `$x = doSomething(1,2, true);` dezelfde waarde gebruikt voor parameter `$low` en daarom kan worden weggelaten.

Sinds PHP 8.0 kun je ook **benoemde argumenten** gebruiken. Bij het gebruik van uitsluitend benoemde argumenten maakt de volgorde niet uit. Bij het combineren van
benoemde en positionele argumenten moeten de positionele argumenten eerst komen.

```php
$x = doSomething(b:1,a:2, low:false);
$x = doSomething(1,2, low:false);

```

## Het resultaat van een functie retourneren.

Het sleutelwoord `return` betekent: retourneer nu het resultaat van de functie naar de **aanroeper**. Op deze manier kan de aanroeper de resultaten ontvangen
van het werk dat de functie heeft verricht. 

De variabele `$result` wordt nergens anders gebruikt dan in de instructie `return`. Vaak kan dit dus worden afgekort tot de
onderstaande code. Let er echter op dat dit moeilijker te debuggen kan zijn, omdat we het resultaat van `$a + $b` niet kunnen inspecteren.

```php
function calc(int $a, int $b): int {
    return  $a + $b;
}
```

Merk op dat de functie eindigt met `: int`. Dit geeft aan dat deze functie een geheel getal moet retourneren. Als je
een fout maakt en niets, een tekenreeks of een drijvende-kommagetal retourneert, zal er opnieuw een fout optreden.

## Void-functies

Soms hoeft een functie geen waarde terug te geven: het uitgevoerde werk leidt niet tot een resultaat dat interessant is
voor de aanroeper. 

# Scope

PHP maakt gebruik van het concept ‘scope’ om te bepalen waar variabelen of functies ‘zichtbaar’ of ‘bruikbaar’ zijn voor andere delen van 
de code. Bij het schrijven van een functie is niet alles binnen de functie bruikbaar voor andere delen van de code. Daarom
kun je ‘bereik’ interpreteren als ‘isolatie’: de functie isoleert alle variabelen van de rest van de code.

Een scope in PHP begint na de `{` en eindigt na de `}` bij het gebruik van een functie (of een `class`, maar dat kun je voorlopig even vergeten).
Alles binnen deze `{...}`-functieblokken is niet beschikbaar voor de rest van de code. 

PHP gebruikt scope iets anders dan andere programmeertalen: niet alle `{...}`-blokken creëren een scope, zoals bij C#. 
Daarom werkt dit in PHP wel en in C# niet:

```php
  if ($x == 1) {
    $i = 0;
  }
  else {
    $i=1;
  }
  echo $i;
```

## Het trefwoord `global` gebruiken

In PHP is het mogelijk om in een functie variabelen te gebruiken die *geen* parameters zijn, maar buiten het bereik van de 
functie bestaan. Het sleutelwoord `global` kan worden gebruikt om een globale variabele in de scope van een functie te ‘importeren’. Dit
is echter een zeer slechte praktijk, maar kan in extreme gevallen noodzakelijk zijn. Normaal gesproken: geef de globale variabele door als functieparameter
.


# Referenties

* [PHP:Bereik van variabelen](https://www.php.net/manual/en/language.variables.scope.php)