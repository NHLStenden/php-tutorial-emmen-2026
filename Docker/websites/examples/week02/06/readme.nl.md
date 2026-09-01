#   Week 2 - HTML - Lay-out met 12 kolommen, zijbalk en @media-queries

Dit voorbeeld laat zien hoe je de lay-out met 12 kolommen kunt gebruiken om een pagina te maken met een zijbalk die over de hele lengte van de pagina loopt.

We gebruiken ook @media-queries om de lay-out aan te passen wanneer de pagina steeds kleiner wordt. Bekijk het CSS-bestand. Onderaan
staan secties die beginnen met `@media`, gevolgd door een `max-width`-instructie tussen haakjes. 

De CSS-instructies @media-queries worden gebruikt wanneer voor een pagina een maximale grootte is opgegeven. Het is erg belangrijk om ervoor te
zorgen dat de volgende instructie aanwezig is in de `<head>`. Anders worden de @media-queries niet geactiveerd.

```html
<meta name="viewport" content="width=device-width, initial-scale=1">
```

Zorg ervoor dat de CSS-instructies in de @media queries-secties dezelfde specificiteit hebben als die in de normale
CSS. 

# Referenties

* [MDN Media queries](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Media_queries/Using)
* [MDN Specificiteit](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Cascade/Specificity)
