# Week 1 - HTML - "Hello World"

Dit is de "Hello World" van HTML. 

Bekijk het bestand index.html eens. Je kunt het in elke browser openen om te zien hoe het bestand wordt weergegeven.

Om ervoor te zorgen dat de browser begrijpt wat je wilt weergeven, hebben we een aantal instructies nodig.



## Dit is HTML

Eerst moeten we de browser laten weten dat we de programmeertaal HTML willen gebruiken. Dit doen we met de
`<doctype>`-instructie. In het onderstaande voorbeeld zie je deze instructie.

```html
<!DOCTYPE html>
```

Er zijn een paar belangrijke elementen:

1. `<` is het begin van alle instructies in HTML.
2. `!DOCTYPE` is de eigenlijke instructie. Deze betekent: „Ik wil het documenttype op een bepaalde waarde instellen“
3. `html` is de programmeertaal die we willen instellen.
4. `>` sluit de instructie af.

Het derde deel wordt een attribuut genoemd. Het specificeert een bepaald aspect van de gegeven instructie. In dit geval ‘HTML’.

## Documenten

Wanneer een browser een HTML-bestand ontvangt, bouwt deze een *document* op in het geheugen. Daarom wordt `<!DOCTYPE` gebruikt om
de programmeertaal van het documenttype in te stellen die we gaan gebruiken.

Een document is gestructureerd als een boomstructuur met het HTML-element als wortel van de boom. Alle tekst en andere structuren die we
gaan opbouwen, worden onderdeel van de documentboom.

## Hier komt de HTML

De volgende regel bevat het `<HTML>`-element. Deze instructie wordt gebruikt om de wortel van de documentboom in te stellen.

`<html>some other elements</html>`.

```html

<html lang="en">
....
....
....
....
</html>
```

Hier zien we dezelfde structuur. Alle elementen worden gestart met het teken `<`, gevolgd door de naam van het element.
Als ze andere elementen of tekst kunnen bevatten, moet het element correct worden afgesloten met `</`, gevolgd door de naam van het element.

Dus in dit geval:

1. `<` is het begin van een instructie.
2. `HTML` is de eigenlijke instructie. Deze betekent: „Dit is de root van de documentboom in HTML“
3. `lang="en"` is een attribuut met een specifieke waarde: de taal die deze pagina gebruikt is ‘en’ (wat staat voor Engels)
4. `>` sluit de instructie af
5. vervolgens worden enkele elementen (die later worden besproken) ingesloten
6. het element wordt gesloten met `</html>`

Merk op dat attributen een optionele waarde kunnen hebben. In het `<!DOCTYPE html>`-element heeft het `html`-attribuut geen waarde. In het
`<HTML>`-element heeft het `lang`-attribuut wel een waarde. Wanneer een waarde wordt opgegeven, wordt deze tussen dubbele aanhalingstekens geplaatst: "....".

## Koptekst en hoofdtekst

Bij het opbouwen van de structuur van de webpagina zijn er twee basisonderdelen:

* HEAD (koptekst)
* BODY

Let op: er is geen voettekst. Er is wel een `<footer>`-element, maar dit kan alleen in de `<body>` worden gebruikt.

## Koptekst

Met het `<head>`-element kunnen we de browser allerlei informatie verstrekken die niet wordt weergegeven, maar die wel wordt gebruikt
om te begrijpen hoe de structuur van tekst en afbeeldingen moet worden weergegeven. Denk hierbij aan informatie zoals

* Hoe tekst en afbeeldingen moeten worden opgemaakt
* Wat de titel van de pagina is (zodat de browser deze in de tabbladenlijst kan weergeven).
* Beschrijvingen
* Actieve inhoud zoals JavaScript
* Links naar andere bestanden met JavaScript en opmaak.
* ....

In dit voorbeeld bevinden zich twee elementen binnen het `<head>`-element.

```html

<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
</head>
```

Het eerste element is het `<meta>`-element. Dit element heeft veel verschillende attributen om instructies te geven. In dit
geval geeft het `charset="UTF-8"` aan welk soort tekst wordt gebruikt, zodat de browser speciale tekens begrijpt. Vaak gaat het
hierbij om diakritische tekens zoals ć, é, â enz. Maar ook bij het gebruik van Cyrillische, Vietnamese, Japanse of Chinese
tekensets is dit nodig.

Het tweede element is het `<title>`-element. In dit geval bevat het element platte tekst: "Welkom!".

## Body

Ten slotte bevat de body alle inhoud die we aan de gebruikers willen tonen. De body bevat allerlei verschillende
elementen om de browser de juiste informatie te laten weergeven, zoals tekst en afbeeldingen, of zelfs video en geluid.

```html

<body>
<p>Hello world</p>
</body>
```

In dit geval wordt het `<p>`-element gebruikt om aan de browser aan te geven: "Hier is een alinea tekst, met de tekst '
Hello World'". 

De browser zal de tekst eenvoudigweg weergeven ('tekenen') op het scherm met behulp van het standaardlettertype, de standaardkleur en de standaardtekstgrootte. 

