# Opdrachten week 1

In dit bestand vind je de opdrachten voor week 1. Er zijn twee opdrachten:

1. Maak een website voor de stad Amsterdam
2. PHP-programmeren

**Belangrijk!**

Plaats je bestanden in de map `/Docker/websites/student/week-01`. Gebruik de volgende URL-structuur om je antwoorden te bekijken:

* http://localhost/student/week-01/assignment-01.html
* http://localhost/student/week-01/assignment-03.php

# HTML- en CSS-programmeren

## Maak een website voor de stad Amsterdam

### Stap 1 - Implementeer het volgende

Maak de volgende webpagina’s aan de hand van de onderstaande voorbeelden. Sla elke versie op als een apart bestand, zodat we
de wijzigingen tussen de versies kunnen bekijken.

![stap 1](./images/assignment-week-01a.png)

Details

* zorg ervoor dat er een passende titel in het tabblad van de browser staat.
* controleer je broncode met een validator en zorg ervoor dat je alle waarschuwingen en fouten oplost
* Je hoeft nog geen opmaak toe te voegen; dat is de volgende opdracht

Je bronnen, tekst en afbeeldingen, zijn beschikbaar via het bestand ForStudents.zip in de map [resources](./resources).

### Stap 2 - Verbeter de pagina met opmaak

Verbeter je werk uit stap 1 door opmaak toe te voegen. Zie het voorbeeld hieronder.

![stap 2](./images/assignment-week-01b.png)

Details

* Voeg opmaak toe met behulp van een extern CSS-bestand
    * Maak de bovenste koptekst blauw
    * Maak kopteksten van niveau 2 rood
    * Verbeter de lettertypen door een beter lettertype te kiezen (in het voorbeeld wordt `sans-serif` gebruikt)

### Stap 3 - Koppelingen naar nieuwe pagina’s

In deze volgende stap voegen we twee nieuwe pagina’s toe:

* één om alle mooie bruggen en grachten te tonen.
* één om alle musea te tonen.

Zie het voorbeeld hieronder

![stap 3](./images/assignment-week-01c.png)

* Voeg links toe naar 2 nieuwe pagina’s
    * bridges.html
    * museums.html

Details

* Zorg ervoor dat je dezelfde opmaak gebruikt.
* De afbeeldingen moeten ook aanklikbaar zijn! Ze moeten naar de grotere afbeelding linken in plaats van naar de miniatuurafbeelding
* Zorg ervoor dat je bovenaan en onderaan de pagina een navigatie naar de startpagina plaatst (tip: gebruik een voettekst).

In de [map met bronnen](./resources) vind je deze grotere afbeeldingen.

Hier zijn de twee voorbeeldpagina’s. De eerste gaat over de bruggen, de tweede bevat het voorbeeld voor de musea.

![stap 4a](./images/assignment-week-01d.png)

<hr>

![stap 4b](./images/assignment-week-01e.png)

# PHP-programmeeropdrachten

Hierin maak je kleine webpagina’s met behulp van je PHP-programmeervaardigheden.

## Opdracht 1: Je profielwebsite

Maak een webpagina over jezelf. Gebruik de volgende informatie om jezelf voor te stellen:

* Je volledige naam en leeftijd
* Je land van herkomst en woonplaats
* Je hobby
* Je broers en zussen

Vereisten

* Bouw de pagina op met PHP en een eenvoudige HTML-structuur, waarbij je gebruikmaakt van `<article>` en `<section>`.
* Zorg ervoor dat deze HTML-pagina variabelen gebruikt voor
    * leeftijd
    * woonplaats
    * thuisland
    * hobby
    * Link naar je socialemediaprofiel (LinkedIn, Snapchat enz.)
* Bereken je leeftijd met behulp van de `Date('Y')`-functie; trek je geboortejaar af van het huidige jaar (dit kan
  een
  kleine fout veroorzaken, maar dat is voorlopig geen probleem)
* Gebruik een passende beschrijvende tekst voor je socialemedia-link. Je hebt dus een URL en een weergavetekst nodig (bijv. LinkedIn)

Dit zou bijvoorbeeld het resultaat kunnen zijn:

> Mijn naam is Martin Molema. Ik woon in Meppel in Nederland. Ik ben momenteel 55 jaar oud. Mijn hobby is
> piano spelen.
> Je kunt me vinden op {img}LinkedIn.

De tekst „LinkedIn“ moet aanklikbaar zijn en naar jouw (of een fictieve) sociale-mediasite leiden. De sociale-mediasite moet
voorafgegaan worden door een logo van de site. Bijvoorbeeld [officieel LinkedIn-logo](https://brand.linkedin.com/downloads).

## Opdracht 2: Verbeter je profiel!

Verbeter je profielpagina en voeg informatie toe over je broers en zussen.

Vereisten

* Zorg ervoor dat deze HTML-pagina variabelen gebruikt voor `siblings`.
* Gebruik voorwaardelijke statements om te bepalen hoe je je broers en zussen correct weergeeft (zie voorbeelden hieronder).

Dit zou bijvoorbeeld het resultaat kunnen zijn:

> Mijn naam is Martin Molema. Ik woon in Meppel in Nederland. Ik ben momenteel 55 jaar oud. Mijn hobby is
> piano spelen. Ik heb 1 broer en 1 zus.

Als er echter geen broers of zussen zijn, moet de tekst als volgt luiden:

> Mijn naam is Angelo. Ik woon in Brussel in België. Ik ben momenteel 21 jaar oud. Mijn hobby is voetbal kijken. Ik heb
> geen broer en 2 zussen.

Of

> Mijn naam is Angelo. Ik woon in Brussel in België. Ik ben momenteel 21 jaar oud. Mijn hobby is voetbal kijken. Ik heb
> geen broers of zussen.

### Opdracht 3: Verbeter je profiel nog wat verder

In deze stap voeg je een lijst toe met enkele van de favoriete gerechten uit je land.

Details

* Gebruik een nieuwe `<section>` om je lijst met gerechten op te stellen
* voeg een koptekst toe (niveau 1)
* Gebruik een PHP-array om de lijst met gerechten op te zetten
* Gebruik een `foreach` om de gerechten weer te geven
* Gebruik een ongeordende HTML-lijst (<ul>) en som de items op.
* Zorg ervoor dat je de lijst wat opmaakt!

Kies een van de gerechten als je favoriete gerecht. Gebruik een index in de PHP-array om er een te kiezen. Zorg ervoor dat je dit gerecht markeert
in de HTML-lijst. Gebruik CSS om dit item op te maken vanuit een extern CSS-bestand.

