# Een HTML-webpagina afdrukken

Het afdrukken van een webpagina kan worden gedaan met behulp van CSS-instructies die uitsluitend voor het afdrukken
geldig zijn. Om te detecteren of de browser
probeert af te drukken (of een afdrukvoorbeeld te tonen), kun je gebruikmaken van **Media Queries**. Door deze instructies te gebruiken kunnen we
allerlei rommel en elementen verwijderen die we niet op de afdruk willen zien, zoals

* menu’s
* advertenties
* kopteksten
* voetteksten

Bovendien heeft een afdruk geen schuifbalk, dus de ‘echte inhoud’ die via een schuifbalk zichtbaar zou zijn, moet
op de afdruk beschikbaar zijn zonder schuifbalk. Bekijk de onderstaande voorbeelden eens.

In de eerste afbeelding zien we de ‘normale weergave’ wanneer een gebruiker de browser gebruikt. In de tweede afbeelding zien we de browser in
de "afdrukmodus" (we zullen iets verderop bekijken hoe we de browser in de afdrukmodus kunnen zetten).

Let in de eerste afbeelding op de 5 elementen/gebieden:

1. de koptekst: "Welkom op mijn website!"
2. het menu aan de linkerkant: een `<aside>`-element met links naar andere pagina’s
3. de voettekst: een `<footer>`-element met het copyright
4. een andere zijbalk met bijvoorbeeld advertenties
5. de eigenlijke inhoud in het midden met ‘lorem ipsum’-tekst.

Merk op dat de inhoud in het midden een schuifbalk bevat. Als we een afdruk zouden maken (of naar pdf zouden exporteren) zonder
speciale maatregelen te nemen (door andere afdrukinstructies te gebruiken), zouden we alleen het momenteel zichtbare deel van de
inhoud op de afdruk zien verschijnen.

Voorbeeld: normale weergave (zie http://localhost/examples/week06/01)
![Screendump - normale weergave.png](images/Screendump%20-%20normale%20weergave.png)

Let op hoe dit eruit zou zien als er geen maatregelen worden genomen om correct afdrukken te ondersteunen, zoals te zien is in de onderstaande schermafbeelding. Hier zien we dat er een
schuifbalk op de pagina aanwezig is, net als op de website. Alle andere elementen zijn ook nog steeds zichtbaar, maar
zijn waarschijnlijk niet bruikbaar voor een gebruiker. Let op: we gaan hier uit van een aantal aannames! Dit is geen gouden regel die voorschrijft dat alleen
de inhoud van de pagina zichtbaar moet zijn voor de gebruiker!

![Google Chrome - voorbeeld van het afdrukvenster zonder mediaqueries.png](images/Google%20Chrome%20-%20print%20dialog%20preview%20without%20mediaqueries.png)

We gaan er dus vanuit dat wanneer de gebruiker een afdruk wil maken of naar PDF wil exporteren, de inhoud in het midden de belangrijkste
informatie is. We gaan ervan uit dat de andere vier elementen rondom de inhoud geen echt nut hebben en dat we
ze op de afdruk moeten verwijderen.

In plaats van een volledig nieuwe pagina voor de afdruk te ontwerpen, geven we de browser dus de opdracht om te reageren op het signaal dat hij
een pagina weergeeft voor een afdruk of voor export naar PDF. Dit signaal wordt vervolgens in de CSS opgevangen met behulp van de
`@media print`
query. De browser ontvangt dan aanvullende instructies om de pagina anders weer te geven. Deze instructies hebben vaak
voorrang op de instructies voor de ‘normale weergave’. Het resultaat in dit voorbeeld wordt hieronder weergegeven. Eerst de browser in de
‘afdrukweergave’, de tweede afbeelding is het pop-upvenster voor afdrukken met een voorbeeld.

Voorbeeld: afdrukweergave

![Screendump - afdrukweergave.png](images/Screendump%20-%20afdrukweergave.png)

Pop-upvenster van het afdrukdialoogvenster met een voorbeeldweergave.

![Google Chrome - Voorbeeldweergave afdrukdialoogvenster met mediaqueries.png](images/Google%20Chrome%20-%20Voorbeeldweergave%20afdrukdialoogvenster%20met%20mediaqueries.png)

Merk op dat alle elementen die we als ‘overbodig’ hebben gemarkeerd, zijn verwijderd en dat de schuifbalk zich op paginaniveau bevindt in plaats van op
elementniveau. Als we naar het afdrukvenster en het voorbeeld kijken, zien we ook dat de schuifbalk naast
de pagina is ingeschakeld, in plaats van direct erop. Bovendien zijn er nu meerdere pagina’s, zoals we op de onderstaande afbeelding kunnen zien.

![Google Chrome - Voorbeeld van het afdrukvenster met mediaqueries 2.png](images/Google%20Chrome%20-%20Voorbeeld%20van%20het%20afdrukvenster%20met%20mediaqueries%202.png)

# De @media-query voor afdrukken instellen

Het instellen van de CSS-instructies om te reageren op „het weergeven van een pagina voor afdrukken“ is eenvoudig te doen met behulp van de onderstaande instructies:

```css
@media print {
    ..... your css goes here ....
}

```

De basisregel is dat je dezelfde CSS-selectors moet gebruiken wanneer je de instructies voor de ‘normale weergave’ overschrijft. Meer
specifiek: de **specificiteit** van de selector moet op hetzelfde niveau liggen. Er is een geweldige video van Colin Powell over dit
onderwerp als je dit concept echt wilt begrijpen. Zie de referenties hieronder.

De onderstaande CSS en HTML geven een voorbeeld. In het voorbeeld op http://localhost/examples/week06/02 staat eigenlijk meer
tekst, maar omwille van de beknoptheid is deze hier ingekort. Stel je voor: veel tekst in te weinig ruimte.

```html

<main>
    <article>
        <section class="content">
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aut
                autem commodi error est exercitationem explicabo, id magnam, nihil nostrum nulla
                officiis optio quidem recusandae repellendus tenetur totam voluptatem!</span>
                <span>Cupiditate, debitis dolorum impedit in iure praesentium quibusdam rerum
                    suscipit voluptas. Accusantium adipisci natus repellendus tenetur. Aliquid
                    debitis doloribus ducimus, laborum minima neque nobis omnis provident quisquam
                    tempore tenetur, ut!</span>
            </p>
        </section>
    </article>
</main>
```

```css

article {
    width: 100vw;
    height: 100vh;
}

@media print {
    article {
        width: auto;
        height: auto;
    }
}

```

Dit betekent:

> Bij het weergeven van een pagina voor normale weergave moet het `<article>`-element precies op de hele pagina passen. Maar bij het weergeven
> van een pagina voor afdrukken (of PDF-export) moeten de breedte en hoogte automatisch worden bepaald met behulp van `auto`.

Laten we dit nu wat verder uitwerken aan de hand van het onderstaande voorbeeld. De HTML is hetzelfde, maar nu plaatsen we de sectie in een kleinere ruimte.
De *selector* is `article section`: dit betekent dat de sectie een onderliggend element van een artikel moet zijn, niet zomaar een
sectie.

```css
 article {
    width: 100vw;
    height: 100vh;
}

article section {
    width: 50%;
    height: 50%;
}

@media print {
    article {
        width: auto;
        height: auto;
    }

    section {
        width: auto;
        height: auto;
    }
}

```

Als je dit zou weergeven, zou je iets zien zoals hieronder. Ik heb wat kleuren toegevoegd om de verschillende gebieden te laten zien:

* Het artikel is `darkgoldenrod`
* De sectie is `cadetblue`

![02 - Voorbeeld 1.png](images/02%20-%20Voorbeeld%201.png)

Wanneer we het afdrukvenster openen, zien we

![02 - Voorbeeld 2.png](images/02%20-%20Voorbeeld%202.png)

Dat lijkt vreemd: de schuifbalk staat nog steeds op de sectie, in plaats van op de pagina. We hebben de afmetingen van `section` echter ingesteld op
`auto` ingesteld voor `width` en `height`. Wat is hier dan misgegaan?

In dit geval is de ‘specificiteit’ van de selector `section` in de `@media print` niet dezelfde als die buiten de
`@media print`. Zoals eerder vermeld, moet de `section` zich binnen een `<article>` bevinden. Dat is _specifieker_ dan de 
`section`-selector op zichzelf, aangezien die ‘een sectie waar dan ook’ betekent. 

Bekijk [voorbeeld 03](http://localhost/week06/03) waarin dit is gecorrigeerd. Nu is de selector hetzelfde voor afdrukken
als voor normale weergave: `article section`.

```css
@media print {
    article section {
        width: auto;
        height: auto;
    }
}
```

Nu zien we in het afdrukvoorbeeld dat de schuifbalk correct naar het paginaniveau is verplaatst. 

![02 - Voorbeeld 3.png](images/02%20-%20Voorbeeld%203.png)

# De browser in de ‘afdrukmodus’ zetten

Het kan lastig zijn om je CSS met `@media`-query’s in te stellen, de pagina te verversen en het afdrukvenster te openen om een voorbeeld van
het resultaat te bekijken. Gelukkig erkennen de browserontwikkelaars deze moeilijkheden en hebben ze ons, ontwikkelaars, geholpen. Er is een manier om
de browser de `@media print`-CSS te laten activeren door een instelling in de browser te wijzigen.

Om deze instelling te vinden, moeten we de ‘Ontwikkelaarstools’ openen. Dit kan op verschillende manieren, afhankelijk
van de gebruikte browser. Vaak verschijnt er bij een ‘rechtermuisklik’ op de website een menu met een item ‘Inspecteren’ of
‘element inspecteren’. Of via het menu is er een optie om de ontwikkelaarstools weer te geven.

Wat we na het openen van de ontwikkelaarstools meestal nodig hebben, is de console. Klik in de bovenste menubalk op ‘Console’ om het 
consolescherm in de onderste helft van het scherm (meestal) te openen. 

![Google Chrome - overzicht ontwikkelaarstools.png](images/Google%20Chrome%20-%20overzicht%20ontwikkelaarstools.png)

Vervolgens schakelen we in de console het tabblad ‘Rendering’ in door op de drie gestapelde puntjes naast ‘Console’ in de
onderste helft van het scherm te klikken.

![Google Chrome Console.png](images/Google%20Chrome%20Console.png)

Zoek vervolgens naar ‘CSS-mediatype emuleren’ en selecteer ‘print’ uit de lijst. Vergeet niet om later de normale weergave te herstellen
!

![Google Chrome - CSS-mediatype emuleren.png](images/Google%20Chrome%20-%20CSS-mediatype%20emuleren.png)

# Bronnen

* [MDN over specificiteit in CSS](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Cascade/Specificity)
* [Colin Powell over specificiteit in CSS](https://www.youtube.com/watch?v=LUDkXMXf3P8)