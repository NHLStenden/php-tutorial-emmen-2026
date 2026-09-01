# Uitgebreid: Semantische elementen, formulieren, tekeningen en animaties

In dit deel worden de verschillende soorten HTML-elementen besproken. Deze kunnen worden onderverdeeld in een aantal categorieën:

* semantische / niet-semantische elementen
* elementen ter ondersteuning van formulieren
* elementen voor het weergeven van grafieken, afbeeldingen, tekeningen enz.

Aan het einde zullen we kort bekijken hoe je met CSS animaties kunt toevoegen.

### Semantische elementen

De body bevat structuren zoals

* Kopteksten op verschillende niveaus
* hoofdtekst
* zijbalk
* artikel
* sectie
* alinea’s
* regelafbreking
* navigatie
* voettekst
* tabel
* afbeelding

We noemen dit **semantische elementen**: ze geven duidelijk hun betekenis weer. Ze kunnen gebruikers helpen bij het navigeren op de pagina,
bijvoorbeeld
met behulp van een schermlezer voor visueel gehandicapte gebruikers.

Een voorbeeld.

Een `<main>`-element beschrijft de hoofdinhoud van de pagina en kan één of meer `<article>`-elementen bevatten. Een artikel
kan duidelijk worden onderverdeeld in meerdere `<section>`-elementen. Elke sectie kan een `<header>` bevatten met bijvoorbeeld een titel op
niveau 1 (`<h1>`). De tekst in een sectie bestaat uit alinea’s (`<p>`). Naast een artikel kunnen er enkele opmerkingen staan in
een `<aside>`.

Tabelinhoud kan worden weergegeven met behulp van een `<table>`. Een tabel heeft een koptekst (`<thead>`) en eventueel een voettekst (`<tfoot>`).
Een tabel bestaat uit een of meer rijen (`<tr>`).

Om de gebruiker te helpen naar andere pagina’s op de website te navigeren, kan een pagina een lijst met links naar andere pagina’s weergeven in
een `<nav>`-element.

Onderaan de pagina bevindt zich een voettekst met bijvoorbeeld contactgegevens of een copyrightvermelding.

Enzovoort.

Merk op dat veel elementen een betekenisvolle naam hebben. Hun functie is echter niet altijd duidelijk.

### Niet-semantische elementen

Er zijn ook veel elementen die voor bijna alles kunnen worden gebruikt. Dit zijn elementen zoals

* `<div>` : afdeling
* `<span>`: een klein stukje tekst

## Formulieren

Een van de handigste mogelijkheden van een webpagina is het beheren van gegevens met behulp van formulieren. Denk bijvoorbeeld aan het stellen van een vraag via een zoekmachine,
het
bewerken van je eigen contactgegevens of het invoeren van je adres bij het bestellen van een artikel in een webwinkel. Vaak is de
informatie
die wordt beheerd afkomstig uit een database. In deze eerste module zullen we geen database gebruiken, maar wel formulieren.

Om informatie te beheren of in te voeren biedt de HTML-standaard verschillende soorten invoervelden:

* verschillende soorten tekst en getallen, zoals gewone tekst, e-mailadressen, telefoonnummers of gewoon getallen
* een item uit een lijst kiezen
* een bestand selecteren om te uploaden (bijv. je afbeelding voor een avatar)
* een selectievakje om een optie in of uit te schakelen
* kiezen tussen opties zoals bezorgwijzen voor je pakket: thuisbezorging of een afhaalpunt
* knoppen om de gegevens te annuleren of te verzenden
* labels om aan te geven welke gegevens je moet invoeren (zoals ‘naam’, ‘adres’, ‘telefoonnummer’)

## Tekeningen en afbeeldingen

Veel websites tonen afbeeldingen, figuren, diagrammen of zelfs wiskundige vergelijkingen. Deze worden goed ondersteund door middel van
HTML-elementen.

Het bekendste is het `<img>`-element: hiermee kan een afbeelding van de website worden geladen en op de pagina worden weergegeven. Maar
soms wordt de inhoud van een diagram berekend of door de gebruiker zelf gemaakt. Dan kan het `<canvas>`-element worden gebruikt om
afbeeldingen of diagrammen te maken met behulp van de programmeertaal JavaScript. Een andere populaire manier om diagrammen weer te geven is het `<svg>`-element.
Deze (vector-)afbeeldingen kunnen vrijwel onbeperkt worden geschaald zonder kwaliteitsverlies.

## Animaties

Soms kunnen animaties de aantrekkingskracht van een website aanzienlijk vergroten. Zowel in CSS als in SVG zijn er tal van manieren om
elementen te animeren. Enkele voorbeelden:

* ze verplaatsen
* vergroten/verkleinen
* de dekking en kleur wijzigen
* roteren / spiegelen

# Bronnen

## Online programmeerbronnen

* [MDN: HTML-head](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Structuring_content/Webpage_metadata)
* [W3 Schools: Semantische elementen](https://www.w3schools.com/html/html5_semantic_elements.asp)
* Aan de slag met PHP op [PHP.net](https://www.php.net/manual/en/getting-started.php)
* Valideer je HTML met [W3C Validator](https://validator.w3.org)
* CSS-animatie-speeltuin: [Animista](https://animista.net/)

## Online referenties

* [MDN: HTML: HyperText Markup Language](https://developer.mozilla.org/en-US/docs/Web/HTML)
* [MDN: Inhoud structureren met HTML](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Structuring_content)
* Je webserver instellen met [Docker Desktop](https://www.docker.com/products/docker-desktop/)

## Mogelijke IDE's

* [Jetbrains PHP Storm](https://www.jetbrains.com/phpstorm)
* [Visual Studio Code](https://code.visualstudio.com)
* [Notepad++](https://notepad-plus-plus.org)
* [NetBeans](https://netbeans.apache.org)
