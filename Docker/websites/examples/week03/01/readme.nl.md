# Week 3 - HTML - Elementen positioneren

Normaal gesproken worden elementen opgemaakt met standaardoplossingen die blok- en inline-elementen volgen.

Soms wil je elementen echter op een vaste positie plaatsen. Let op: dit is
alleen een laatste redmiddel! Gebruik altijd flex-box of grid-layout om dingen op de juiste positie te plaatsen.

Uitzonderingen kunnen zijn:

* tekst over afbeeldingen plaatsen
* elementen op hun plaats houden, zelfs tijdens het scrollen

Zie voor het laatste geval [voorbeeld 3](../03/index.html)

# Posities vastzetten

Een positie kan worden overschreven met de instructie `position`. Dit is een complexe eigenschap, aangezien
het resultaat vaak afhangt van de situatie en de instellingen in het bovenliggende element. De meest voorkomende
instellingen zijn `relative` of `absolute`.

## Positie: absolute

Bij gebruik van `position:absolute` wordt het element uit de normale stroom gehaald en moet je
instructies instellen voor de positie ervan op de pagina. Het element wordt gepositioneerd ten opzichte van zijn dichtstbijzijnde gepositioneerde voorouder (indien
aanwezig) of ten opzichte van het oorspronkelijke omvattende blok.

Let op: elementen zonder expliciete `position`-instructie worden beschouwd als ‘niet gepositioneerd’, 

De uiteindelijke positie wordt bepaald door de coördinaatinstructies voor de positionering, die als volgt kunnen zijn:

1. top
2. bottom
3. left
4. right

De eerste twee bepalen de verticale positie op de pagina. De derde en vierde bepalen de horizontale positie op
de pagina. Zowel relatieve als positieve waarden zijn toegestaan. De positie bovenaan links zou dus zijn:

```css
.someclass {
    position: absolute;
    left: 0;
    top: 0;
}
```

Let op: wanneer een waarde nul is, hoeft er geen eenheid te worden opgegeven.

De positie in de rechteronderhoek zou zijn:

```css
.someclass {
    position: absolute;
    right: 0;
    bottom: 0;
}
```

Bij gebruik van de instructies `bottom` en `right` worden de gebruikte coördinaten van het kader gewijzigd van de (bovenste, linker) hoek naar de
(onderste, rechter) hoek. Om een element dus met zijn rechteronderhoek in de rechteronderhoek van de pagina te plaatsen, is er geen
berekening
nodig en kan voor beide instructies (rechts en onder) gewoon nul worden gebruikt.

## Positie: relatief

Bij gebruik van `position:relative` wordt het element gepositioneerd volgens de normale stroom van het document, en vervolgens
ten opzichte van zichzelf verschoven op basis van de waarden van top, right, bottom en left. De verschuiving heeft geen invloed op de positie 
van andere elementen.

# Het voorbeeld

In het voorbeeld volgen we de structuur van main/article en meerdere secties. De twee secties maken gebruik van verschillende instellingen
zoals hierboven uitgelegd. Om het voorbeeld te laten werken, moeten we de browser ook opdragen een vaste hoogte en breedte in te stellen voor
het bovenliggende element (de `article`). Omdat beide `section`-elementen uit de 'normale stroom' zijn gehaald, zal de browser moeite hebben
om precies te bepalen hoeveel ruimte het `article`-element moet innemen. Dit leidt vaak tot elementen die te klein zijn.

Om het `article`-element duidelijk zichtbaar te maken, is het voorzien van een opvallende achtergrondkleur (bisque).

```css
article {
    position: relative;
    height: 800px;
    width: calc(100vw - 20px);
    background-color: bisque;
}
```

Merk op dat de `width`-instructie verschilt van eerdere voorbeelden. In dit geval maken we gebruik van een berekening. In gewone
taal zou dit luiden als ‘bereken de breedte als 100% van de breedte van de browser (`100vw`), maar verminder deze met 20
pixels’. We zouden dit ook voor de hoogte kunnen gebruiken. Bijvoorbeeld: `height: calc(100vh - 20px)`.

De eenheden ‘vh’ en ‘vw’ zijn speciale waarden.

* vh: de hoogte van de viewport
* vw: de breedte van de viewport

Samen met de krachtige `calc`-instructie kan dit een grote hulp zijn bij het opzetten van je lay-out. Zie de onderstaande referenties
voor meer informatie.

# Referenties

* [MDN calc](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Values/calc)
* [MDN waarden en eenheden](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Values_and_units)
