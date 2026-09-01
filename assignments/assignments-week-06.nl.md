# Week 6 - afdrukken

Maak de onderstaande website na. Dit is een website in jaren-80-stijl waar je je gamingapparatuur en games kunt ruilen. De vormgeving bestaat uit
8-bit-afbeeldingen, een opvallend, schreeuwerig logo en zwart/groen-gele kleuren.

![assignment-week-06-form-00.png](images/assignment-week-06-form-00.png)

Deze site is niet erg printvriendelijk. Je uitdaging is dus om ervoor te zorgen dat de gebruiker kan genieten van een afdruk
of een PDF-bestand.

Bovendien moet het formulier voor het ruilen van je spullen of games goed worden gevalideerd.

## Functionele vereisten

### Algemeen

- mobielvriendelijk voor kleinere schermen
- printvriendelijk: alleen de inhoud mag op de afdruk verschijnen, zonder allerlei rommel en overbodige opmaak.

### Advertenties

- wanneer het scherm te klein wordt, moeten de advertenties uit het ruilformulier worden verwijderd.

### Navigatie

 - creëer een grappige transformatie van de afbeelding wanneer de muisaanwijzer boven de afbeeldingsknoppen zweeft (gebruik CSS `transform`)
    - de tekst achter de filters mag niet ombreken als de ruimte te klein wordt; zorg hiervoor met behulp van grid-columns en
 witruimte-omloop

### voettekst

De voettekst moet nep-links bevatten naar meer (niet-bestaande) pagina’s. Zoals vaak te zien is op websites, is de voettekst dan onderverdeeld
in secties met een thematische reeks links. Wanneer de ruimte voor de voettekst afneemt, zijn deze secties minder
herkenbaar. Daarom moeten de items, wanneer de ruimte te klein wordt, onder elkaar worden geplaatst en gescheiden door een
lijn.

### Formulier - ruilen

- standaardland is „Nederland“
- Verwerk het formulier met PHP. De volgende regels zijn van toepassing
    - de volgende velden zijn verplicht: Naam, Straat, Postcode, Plaats, Land
    - er moet óf een vaste telefoon óf een mobiele telefoon zijn opgegeven
    - er moet worden ingevuld of het om het ruilen van spellen of uitrusting gaat
    - bij het aanbieden van speluitrusting moet ook de 'gezochte uitrusting' worden gekozen (niet leeg)

## Stijlgids

### Hoofdpagina

- hoofdachtergrondkleur: `rgb(50 13 13)` (een soort zeer donkerrood)
- lettergrootte normaal: `12pt`
- lettergrootte kleiner: `10pt` (filters in linkerzijbalk)
- tekstkleur: `white` op de hoofdachtergrondkleur
- tekst in inhoudsgedeelte: `darkblue`
- achtergrondkleur inhoudsgedeelte: `whitesmoke`

### Formulier

Het handelsformulier moet eruitzien zoals op de onderstaande afbeelding:

![assignment-week-06-form-02.png](images/assignment-week-06-form-02.png)

- maak bij het invoeren van tekst in een invoerveld de achtergrond `yellowgreen` en de rand `lightblue`. Tip: stel `outline` in op
  `none`.
- Gebruik een `display:grid` om de `labels`, `inputs` en `fieldset` automatisch op te maken. Gebruik geen `display:inline-block`
  voor labels

### Voorbeelden:

Tekst invoeren in een formulier `<input>`. Let op de rand en de achtergrondkleur.

![assignment-week-06-form-01.png](images/assignment-week-06-form-01.png)

## Formulier - waarden en verwerking

- het standaardland is „Nederland“
- Verwerk het formulier met PHP. De volgende regels zijn van toepassing
    - de volgende invoervelden zijn verplicht: Naam, Straat, Postcode, Plaats, Land
    - ofwel het vaste telefoonnummer ofwel het mobiele telefoonnummer moet worden ingevuld
    - ofwel „Game“ ofwel „Gear“ moet worden ingevuld
    - bij het aanbieden van game-uitrusting moet ook de 'gewenste uitrusting' worden gekozen (mag niet leeg zijn)
- zorg ervoor dat de browser zoveel mogelijk controleert (bijv. op formaat en verplichte velden)
- zelfs als je de browser het formaat en de verplichte velden laat controleren, controleer dit ook in PHP!
-

## 'Responsieve' mobiele versies

- zorg ervoor dat de navigatiebalk aan de linkerkant volledig zichtbaar blijft wanneer het scherm kleiner wordt
- gebruik breekpunten bij 768 pixels en 400 pixels om ervoor te zorgen dat alles zichtbaar blijft
- let goed op de volgorde van de elementen in de mobiele versie!

## Technische vereisten

- maak één CSS-bestand voor de hoofdpagina
- maak een extra CSS-bestand voor het bestelformulier; gebruik dit CSS-bestand ook voor het hoofdformulier
- gebruik de afbeeldingen uit de map `images`.
- gebruik een raster voor de hoofdlay-out
- maak grid-areas aan om het programmeren te vergemakkelijken
- gebruik flex-box voor het ordenen van elementen binnen
- zorg ervoor dat de HTML geldig is volgens de W3-standaarden
    - Afbeeldingen hebben ALT-attributen
    - Invoervelden en labels zijn correct aan elkaar gekoppeld
    - juiste volgorde van `h1` / `h2` / `h3`
- Gebruik een apart CSS-bestand voor afdrukinstructies

## Tips

- Maak eerst de volledige hoofdpagina. Kopieer vervolgens de hele pagina en maak de pagina met het handelsformulier in het inhoudsgedeelte
- Je kunt CSS-variabelen (--background: en var (--background)) gebruiken voor een consistente opmaak 
