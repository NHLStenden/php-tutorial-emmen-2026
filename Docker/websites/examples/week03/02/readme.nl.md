# Week 3 -  HTML - Tekst boven andere elementen plaatsen

In dit voorbeeld worden twee secties gemaakt, beide met een afbeelding waarop tekst is geplaatst. Dit wordt gedaan met behulp van twee
verschillende methoden:

* absolute positionering
* het gebruik van een achtergrondafbeelding

# Exacte positionering met absolute en relatieve positionering

```html
<section>
    <header><h2>Absolute 1</h2></header>
    <img class="banner" src="images/mansy-graphics-GKXuFCd2fYo-unsplash.jpg">
</section>
```
De eerste sectie (met de _selector_ `&:first-of-type` ) maakt gebruik van absolute positionering. De koptekst en de afbeelding worden 
in de ‘normale stroom’ weergegeven. Bij het toepassen van `display:absolute` worden ze echter verwijderd en zoekt de browser naar een bovenliggend
element met een expliciete positioneringsinstructie. Bekijk de onderstaande CSS eens. 

```css
section {
    position: relative;

    &:first-of-type {
        header {
            position: relative;
            top: 0;
            left: 0;
            z-index: 999;
        }

        img {
            position: absolute;
            top: 0;
            left: 0;
        }
    }
}

```
Omdat we de koptekst en de afbeelding willen positioneren, geven we de `section` de instructie om de positie `relative` in te nemen. Hierdoor
konden we de afbeelding opmaken met behulp van ‘absolute’ positionering ‘ten opzichte van de `section`’. Dus in plaats van dat `top:0`
de bovenkant van de webpagina is, betekent `top:0` de bovenkant van de sectie.

Omdat de `<header>` in de HTML vóór de `img` staat, komt de afbeelding ‘bovenop’ de `header` te liggen en is deze onzichtbaar, aangezien 
de afbeelding veel groter is. Om dit op te lossen, plaatsen we de `header` expliciet bovenaan de ‘stapel’. De waarde van 
`z-index` is enigszins willekeurig, maar wordt meestal ruim hoog genoeg gekozen om zeker te zijn. In ons voorbeeld zou de z-index bijvoorbeeld
een waarde van 10 kunnen zijn. Je kunt zelf experimenteren om de exacte grootte van ‘de stapel’ te achterhalen, er één bij optellen en deze waarde
toewijzen aan de `z-index`.

Een ander probleem is dat van de ‘normale tekst’: omdat de `header` en `image` uit de ‘normale tekststroom’ worden gehaald, 
is de container te klein. De normale tekst komt daardoor ook onder de afbeelding te staan en is onzichtbaar. Dit kan worden
opgelost door ook het `<p>`-element een vaste positie te geven. 

En tot slot moeten we de grootte van het `<section>`-element instellen, omdat de browser niet kan bepalen wat de hoogte en breedte
van de onderliggende elementen zijn. Hieronder staat dus de volledige CSS voor de eerste `section`. De `margin`-instructies worden gebruikt om
het gedeelte met behulp van marges te positioneren, zodat je kunt zien dat de positionering van de koptekst en de afbeelding relatief is ten opzichte van de
box van de `<section>` in plaats van ten opzichte van de pagina.

```css
 &:first-of-type {
    height: 400px;
    width: 30em;
    margin-left: 200px;
    margin-top: 200px;

    header {
        position: relative;
        top: 40px;
        left: 0;
        text-align: center;
        z-index: 999;
    }

    img {
        position: absolute;
        top: 0;
        left: 0;
        max-height: 200px;
    }

    p {
        position: relative;
        top: 200px;

    }
}
```


# Een achtergrondafbeelding gebruiken

In plaats van de afbeelding in de HTML te plaatsen, kun je de afbeelding ook via CSS instellen. Dit doe je met behulp van
de `background-image`-eigenschappen. Er zijn een paar eigenschappen nodig om dit goed te laten werken:
1. zorg dat het HTML-element groot genoeg is om de afbeelding te bevatten
2. voeg een `background-image` toe met de waarde `url(...)` om naar de afbeelding te verwijzen
3. stel de waarde van `backround-repeat` in op de juiste waarde (in dit geval: niet herhalen)
4. stel de waarde van `background-size` in op de juiste waarde. 
5. stel de waarde van `background-position-y` in op de juiste waarde (in dit geval nul)

De instructie `background-size` gebruikt de waarde `contain`. Dit betekent dat de afbeelding zo goed mogelijk in de
bovenliggende container wordt gepast zonder vervorming of bijsnijden. Het grote voordeel is dat we alleen de grootte van de `<header>` hoeven in te stellen
en de afbeelding zal proberen zich aan te passen. Meestal betekent dit dat je enig inzicht moet hebben in de _beeldverhouding_ van de
gebruikte afbeelding. 

In het onderstaande voorbeeld komt dit allemaal samen. 

```css

&:nth-of-type(2) {
 
    header {
        background-image: url("./images/website-banner.png");
        background-repeat: no-repeat;
        background-size: contain;
        background-position-y: 0;

        height: 300px;

        h2 {
            text-align: center;
            position: relative;
            top: 100px;
            font-size: 3rem;
            margin: 0;
            padding: 0;
        }
    }
}
```

# Referenties

* [MDN Z-index begrijpen](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Positioned_layout/Understanding_z-index)
* [MDN background-image-size](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/background-size)