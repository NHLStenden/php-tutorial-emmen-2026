# Week 4 - PHP - Standaardfuncties in PHP: een bestand lezen

In PHP is het eenvoudig om een bestand te lezen of ernaar te schrijven. Dit kan handig zijn om gegevensbestanden te verwerken of HTML op te nemen.

In het onderstaande voorbeeld wordt een bestand met de naam 'information.txt' in de huidige map ( `./` ) volledig ingelezen in de variabele $information.

```php
  $information = file_get_contents('./information.txt');
```

Je kunt de uit bestanden ingelezen informatie gebruiken om deze in je HTML te integreren, zoals in dit voorbeeld te zien is:

```php
<body>
  <?= $information ?>
</body>
```

Als we naar het tekstbestand kijken, zien we dat er daadwerkelijk wat HTML in staat.

```html
<article>
    <section>
        Lorem ipsum ............
    </section>
</article>
```

Dus wanneer we de inhoud van het `information.txt` weergeven, kunnen we deze HTML ook netjes in onze HTML-pagina integreren.
De browser past de opmaak uit het `<head>` toe op de hele pagina. Onthoud dat er voor de browser alleen
HTML is die afkomstig is van de webserver (zie de schermafbeelding van de browser hieronder). De browser weet niet hoe je
al die HTML maakt.

Merk op dat de standaardinstructie `include_once()` ook een PHP- of HTML-bestand opneemt op de plaats waar dit commando
wordt uitgevoerd!

![screendump-developer-tools.png](screendump-developer-tools.png)

# Referenties

* [PHP include_once](https://www.php.net/manual/en/function.include-once.php)
