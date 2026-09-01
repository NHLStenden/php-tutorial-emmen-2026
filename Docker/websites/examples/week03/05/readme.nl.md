# Week 3 -  HTML - CSS-functies

We gebruiken een bekende structuur voor onze HTML: een artikel met verschillende `<section>`-elementen die een koptekst en enkele 
alinea’s tekst bevatten.

```html
<article>
        <header>
            <h1>Resize the browser window to notice the effects.</h1>
        </header>
        <section>
            <header><h2>Width and Height calculations</h2></header>
            <p>....</p>
        </section>
        <section>
            <header><h2>Font size clamp</h2></header>
            <p>....</p>
        </section>
        <section>
            <header><h2>Transformations</h2></header>
            <p>....</p>
        </section>
    </article>
```



## Berekeningen om hoogte en breedte aan te passen

In dit geval zijn onze regels:
> Zorg ervoor dat het eerste gedeelte een breedte heeft van minimaal 200 pixels, maar niet meer dan 50% van de breedte van de viewport.
> Zorg ervoor dat de hoogte maximaal 10 em-streepjes (`10em`) bedraagt, maar ten minste 50% van de verticale hoogte van de viewport.

Deze laatste regel wordt overigens niet vaak gebruikt. 

Dit leidt tot de volgende CSS-instructies.

```css
article {
    section:first-of-type {
        width: max(200px, 50vw);
        height: min(10em, 50vh);
        overflow: auto;
        border: 1px solid darkblue;
    }
}
```

Eerst wordt de pseudoklasse `:first-of-type` gebruikt om het eerste `<section>` in de `<article>` te selecteren.
Let op hoe de `width` en `height` worden berekend. Het gebruik van `min` en `max` lijkt contra-intuïtief in het licht van 
de regels.
>Zorg ervoor dat het eerste gedeelte een breedte heeft van minimaal 200 pixels, maar niet meer dan 50% van de breedte van de viewport.

# Een kleurenmengfunctie gebruiken.

Soms wil je de kleuren van de huisstijl van je bedrijf misschien een beetje aanpassen. Dit kun je doen met behulp van een kleurenmenger. 
Deze heeft een aantal parameters nodig om de kleur met een andere kleur te mengen. Bekijk de link in de HTML voor een demonstratie.

```css
article {
    section:nth-of-type(3) {
        width: 30em;

        p:last-of-type {
            padding: 10px;
            color: color-mix(in oklab, black 50%, red 100%);
            border-left: 10px solid rgb(80 80 80);
        }
        a:visited:hover {
            text-decoration-color: red;
            color:Green;
        }
    }
}
```

Opmerking: er is ook een animatie met een `transform`-instructie en geanimeerd kleurenmixen. Probeer het eens door de 
CSS in de opmerkingen in te schakelen en speel zelf met de waarden!

Let op: hier is een voorbeeld van een dubbele *pseudoklasse*: `:visited:hover`. Dit betekent 
> dat wanneer een willekeurige link binnen de derde `<section>` ooit door de gebruiker is bezocht, *en* de gebruiker met de muisaanwijzer boven
> zo’n bezochte link beweegt, er een andere stijl wordt toegepast.

