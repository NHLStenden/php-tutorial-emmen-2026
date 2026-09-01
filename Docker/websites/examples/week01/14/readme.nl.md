# Week 1 - PHP - HTML genereren met PHP

In dit voorbeeld zien we de meer traditionele manier om HTML-inhoud te maken met PHP: we genereren volledige HTML als een tekenreeks
met behulp van de instructies `print()` of `echo`.

```php
<?php
print("<h1>Welcome $name $surname </h1>")
?>
```

Dit is geldig. De `$name` en `$surname` worden vervangen door hun waarden. Dit werkt alleen als je **dubbele aanhalingstekens** gebruikt!

Dit levert echter een nieuw probleem op: de IDE zal moeite hebben om te begrijpen hoe je de HTML aanmaakt en kan stoppen met het valideren
van de HTML. Bovendien kan het veel meer `<?php`-tags genereren dan de andere opties (zie [voorbeeld 6](../06/readme.md)
en [voorbeeld 7](../07/readme.md)), zoals hieronder te zien is. 


Hier maakt het genereren van informatie deel uit van de sjabloon, wat de zaak nog verwarrender maakt. Het is zelfs een slechte praktijk omdat
er HTML is die in zowel de IF- als de ELSE-tak hetzelfde is.

```php
<?php
    print("<p>Today is $today</p>");
    print("<p > 283 times 4937 = $calculation </p > ");
    if (date("Y") == "2026") {
        print("<p>Is it 2026? yes</p>");
    } else {
        print("<p>Is it 2026? no</p>");
    }
?>

```

Dit kan worden verbeterd met behulp van de onderstaande code. Het werkt wel, maar het verbetert de leesbaarheid voor jezelf of andere 
programmeurs nauwelijks.

```php
<?php
    print("<p>Is it 2026?");

    if (date("Y") == "2026") {
        print("yes");
    } else {
        print("no");
    }
    print ("</p>");
?>

```



