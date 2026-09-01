# Week 2 - HTML - Een raster met 2 kolommen

In dit voorbeeld bekijken we de `display:grid` CSS-instructies.

De HTML volgt de basisstructuur van een artikel met secties.

De CSS maakt het pas echt interessant. Bekijk de onderstaande code.

```css
article {
    display: grid;
    grid-template-columns: auto auto; /** creates two columns */
    column-gap: 3rem;
    row-gap: 3rem;
}
```

De `display`-instructie is hier nieuw. De standaardwaarde is `block` of `inline`, afhankelijk van het element. 

Wanneer een element een ‘blokelement’ is, betekent dit dat het een blok is
dat zoveel mogelijk horizontale ruimte in beslag neemt. Ook `width` en `height` kunnen in CSS worden ingesteld. Elementen worden
altijd van boven naar beneden opgemaakt.

Elementen met een `inline`

Als we deze ‘van boven naar beneden’-opmaak willen wijzigen

```css
article {
    display: grid;
    grid-template-columns: auto auto; /** creates two columns */
    column-gap: 3rem;
    row-gap: 3rem;

    section {
        border: 1px solid darkgray;
        border-radius: 4px;
        padding: 10px;
        box-shadow: 4px 4px 4px darkgray;

    }
}

```

# Referenties

* [MDN: het boxmodel](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Styling_basics/Box_model)