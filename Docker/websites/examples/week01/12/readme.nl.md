# Week 1 - PHP - Variabelen gebruiken

In dit voorbeeld gebruiken we **variabelen** om informatie op te slaan die we later kunnen gebruiken. 

Let op de volgende regel:

```php
<h1>Welcome <?= $name ?> <?= $surname ?></h1>
```

Hier gebruiken we een speciale PHP-instructie. De `<?=` betekent: geef de opgegeven waarde weer. Deze wordt zoals gewoonlijk afgesloten met `?>`.

Binnen `<?= .... ?>` kunnen we dus uitdrukkingen gebruiken. Roep bijvoorbeeld een functie aan om de huidige datum en tijd
om te zetten naar leesbare tekst:

```php
<p>
    Today is <?= date("l, j M Y") ?>.
</p>
```

of berekeningen uitvoeren

```php
<p>
    283 times 4937 = <?= 283 * 4937 ?>
</p>
```

of een beslissing nemen:

```php
<p>
    Is it 2026? <?= date("Y") == "2026" ? "yes" : "no" ?>
</p>

```

We komen later nog terug op het nemen van beslissingen, maar de instructie „a ? b : c“ is een „Immediate IF“ of „ternaire operatie“
en kan worden gebruikt om eenvoudige beslissingen als een uitdrukking te schrijven. 
