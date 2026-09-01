# Week 3 - HTML - Vaste positionering

Bij het ontwerpen van een tabel (of een tabelachtig element) wil je misschien de koptekst bovenaan
de website vastzetten tijdens het scrollen. Dit kun je bereiken met behulp van de instructie `position:sticky`.

Let op de onderstaande HTML-structuur. Het belangrijkste is dat we expliciet een tabelkop `thead` hebben toegevoegd met één rij `tr`
en meerdere kopcellen `th`. Dit is een goede werkwijze, maar vereenvoudigt ook de CSS die we moeten schrijven: we kunnen eenvoudigweg
verwijzen naar de `th`-elementen.

```html

<table>
    <thead>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ....
    </tbody>
</table>
```

De CSS richt zich op de positionering van de `<th>`-elementen. We stellen de positie in op `sticky`. Hiervoor moeten we ook
een
instructie voor de `top` toevoegen. Omdat tabelkoppen normaal gesproken transparant zijn, zal de tekst in de kop (optisch) versmelten met de
tekst die erachter staat. Daarom gebruiken we een achtergrondkleur om het hele gebied achter de tabelkoppen te bedekken. In
dit
geval wordt een `rgba()` kleur gespecificeerd. Hiermee kan een dekking worden opgegeven die afwijkt van 1. Dit maakt de achtergrondkleur
een beetje transparant, zodat de tabeltekst nog net een beetje zichtbaar is. Hoe lager het laatste getal (in het voorbeeld is dat
`0.8`), hoe transparanter het wordt.

```css

thead tr th {
    position: sticky;
    top: 0;
    background-color: rgba(250, 250, 250, 0.8);
}
```

De `position: sticky` zorgt ervoor dat de kopteksten bovenaan blijven staan wanneer ze anders buiten het zicht zouden scrollen. Zie voor de
exacte definitie de MDN-referentie voor ‘position’ aan het einde van dit artikel.

Let op: er kunnen veel verschillende syntaxisvormen worden gebruikt om achtergrondkleuren te specificeren (waarden voor rood, groen en blauw). Zie
de referenties aan het einde. In het voorbeeld wordt de ‘ouderwetse’ manier met komma’s als scheidingstekens gebruikt. Dit is dus ook geldig 
:

```css
  background-color:rgb(250 250 250 / 80%);
```

# Referenties

* [MDN CSS Position](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/position)
* [MDN rgb() CSS ](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Values/color_value/rgb)
