# Week 1 - PHP - slim combineren van HTML en PHP

In dit voorbeeld gebruiken we een HEREDOC om HTML te combineren met variabelen uit PHP. 

Let op de onderstaande code

```php

<?php 

echo <<< END_OF_HTML


END_OF_HTML;

```

Dit betekent:
> Verwerk de tekst op de volgende regels totdat een regel begint met de (magische) tekst `END_OF_HTML`. 

Deze "magische tekst" is niet echt magisch. Je kunt hem elke gewenste naam geven, zolang hij maar in een geldige vorm is (bijvoorbeeld zonder spaties).

We noemen dit een HEREDOC, en het vindt zijn oorsprong in Unix/Linux-besturingssystemen.

Het grote voordeel is dat we niet elke variabele hoeven te laten beginnen met `<?=`, maar gewoon een geldige variabelenaam kunnen gebruiken. 

Let op: binnen een HEREDOC zijn alleen variabelen toegestaan; uitdrukkingen zoals berekeningen of functieaanroepen zijn niet toegestaan.