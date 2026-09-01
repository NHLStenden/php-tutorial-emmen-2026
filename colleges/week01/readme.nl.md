# Week 1

## Seminar Webontwikkeling

* Lesvorm: Seminar
* Duur: 3 × 2 lesuren

### Leerdoelen

Aan het einde van dit seminar zijn studenten in staat om:

* Docker te installeren;
* een IDE naar keuze installeren en configureren;
* een logische mappenstructuur aanmaken;
* bronbestanden ordenen met behulp van de juiste inspringing;
* afbeeldingen aan een webpagina toevoegen;
* externe CSS-stylesheets toepassen;
* HTML-klassen en ID’s correct gebruiken;
* de basisprincipes van de PHP-syntaxis begrijpen;
* HTML-pagina’s met PHP-code maken.

### Inhoud

Tijdens dit seminar installeren studenten Docker en een geïntegreerde ontwikkelomgeving (IDE) (zie bijlage 7). Het
seminar biedt een inleiding tot de principes van het opmaken van HTML-pagina’s met behulp van CSS. Studenten leren hoe klassen en ID’s kunnen worden gebruikt om
specifieke elementen op te maken. De basisbeginselen van de PHP-syntaxis worden geïntroduceerd, waarna studenten beginnen met het maken van dynamische webpagina’s
door PHP in HTML in te bedden.

### Voorbereiding / Individuele opdrachten

Studenten dienen:

* Docker te installeren;
* hun favoriete IDE te installeren;
* waar nodig de inleidende collegeopname te raadplegen;
* de opdrachten van week 1 te voltooien.


# Inleiding tot webontwikkeling

In de eerste week verkennen we de wereld van websites. Hoe zet je je eerste website op? Eerst bekijken we een
eenvoudige statische website. Deze website kan met een eenvoudige editor worden gemaakt en kan in elke browser worden bekeken zonder
dat er een webserver hoeft te worden ingesteld.

Vervolgens bekijken we hoe websites worden opgezet met behulp van professionele componenten zoals een webserver en de programmeertaal PHP
.

# Websites met HTML

Bij het maken van een website moeten we de browser instrueren wat er moet worden weergegeven. Dit betekent dat we de browser niet alleen
de tekst en afbeeldingen moeten aanleveren, maar ook moeten aangeven hoe de tekst is gestructureerd. De browser geeft deze informatie op een welomschreven manier weer,
met behulp van standaardopmaak.

## Onderwerpen

* Basisstructuur: `<html>, <body>, <meta>`
* Tekst opstellen met `<main>, <article>, <section>, <p>`
* Opmerkingen `<!-- -->`
* Attributen van HTML-elementen
* Een **geïntegreerde ontwikkelomgeving (IDE)** in je voordeel gebruiken

# Webserver met Docker en PHP

Als je bestanden op je harde schijf hebt staan om een website te laden, kunnen andere gebruikers je website niet zien. Om anderen
je website te laten gebruiken, moeten we een webserver op het internet opzetten. Dit kan kostbaar zijn, dus we zullen (nog) geen geld investeren
om daadwerkelijk een domeinnaam (‘url’) te kopen en voor een webserver te betalen.

## Een webserver opzetten

In plaats daarvan zetten we een webserver op onze eigen computer op. Het opzetten van een webserver kan lastig zijn voor beginnende software-
ontwikkelaars. Daarom maken we gebruik van het Docker-ecosysteem. Met Docker kun je één of meer virtuele computers opzetten die
elk een specifieke taak uitvoeren. We zullen een webserver, een databaseserver en een (in PHP gebouwd) databasebeheerprogramma
opzetten.

De docent zal je voorzien van de bestanden en instructies om deze servers op te zetten.

## Server-side programmeren

Een van de voordelen van het gebruik van een server is dat we deze webserver vervolgens kunnen gebruiken om een meer dynamische website te maken. Dit wordt
*server-side programmeren* of *server-side rendering* genoemd. Als we niet-statische websites (‘dynamische’) willen bouwen, hebben we
een andere programmeertaal nodig die informatie kan verwerken en een website kan maken die beter aansluit bij de behoeften van de gebruiker
.

Er zijn een aantal mogelijkheden om dynamische websites te maken:

* PHP (_Pre Hypertext Processor_), soms in combinatie met frameworks zoals Symphony en Laravel
* Java, bijvoorbeeld Spring Boot
* Python met frameworks zoals Flask en Django
* JavaScript (Node.js en client-side)
* ASP.NET met C# en Entity Framework

In deze cursus gaan we **PHP** verkennen. Dit is een programmeertaal die gemakkelijk te leren is, goed werkt met veel
webserverhostingproviders en goed wordt ondersteund door de community.

### Front-end-programmering

Bij het maken van websites ligt er ook veel nadruk op interactiviteit en dynamisch gedrag met behulp van front-end-programmering.
Dit betekent dat je (weer een) programmeertaal zoals _JavaScript_ kunt gebruiken om dynamisch gedrag af te handelen zonder
dat je de webserver nodig hebt. Hierdoor kun je zeer aantrekkelijke websites maken, maar neemt ook het beveiligingsrisico
aanzienlijk toe.

Populaire front-end programmeerframeworks

* [Angular](https://angular.dev/tutorials/learn-angular), met de programmeertaal Typescript
* [Vue](https://vuejs.org/tutorial/#step-1)
* [React](https://react.dev/learn)
* [Web Assembly](https://dotnet.microsoft.com/en-us/learn/aspnet/blazor-tutorial/intro) (C# in combinatie met Blazor)

In deze eerste module zullen we *geen* gebruik maken van JavaScript of andere front-end frameworks.

### Styling

Last but not least zullen we kijken naar het stylen van onze website. De HTML geeft de browser alleen aan welke tekst en afbeeldingen moeten
worden weergegeven, maar niet in welke lettertypen, kleuren enz. Met behulp van CSS (Cascading Style Sheets) leer je hoe je je
website aantrekkelijker kunt maken dan de standaardopmaak van de webbrowser. 

Hiervoor gebruiken we de taal Cascading Style Sheets (CSS). 

## Onderwerpen

* Protocollen: HTTP en HTTPS
* Client en server
* Docker-basisprincipes voor het opzetten van een eenvoudige webserveromgeving
* PHP starten met `<php` of `<?`

Zie [week 1 uitgebreid](week-01-in-depth.md) voor meer diepgaande informatie.


# Online boeken – aanbevolen lectuur

## Boekhoofdstukken

* _HTML en CSS_:
    * Inleiding. Hoofdstukken 1.1, 1.2, 1.3, 1.4, 1.6,
    * Basisstructuur van HTML-documenten. Hoofdstuk 2
    * Kopgegevens. Hoofdstukken 3.1, 3.2, 3.3, 3.5, 3.6
    * HTML-elementen. Hoofdstukken 4.1, 4.2, 4.3, 4.4, 4.6
    * Opmaak met CSS. Hoofdstukken 8, 8.2, 8.3.1-8.3.5, 8.4, 9, 10
* _PHP-spoedcursus_: 
  * Deel I, 
 * hoofdstuk 1 Basisprincipes van PHP-programma's
    * Hoofdstuk 2 Gegevenstypen: 
 * PHP-gegevenstypen
    * Hoofdstuk 3 Strings en stringfuncties
 * Witruimte
 * Strings tussen enkele aanhalingstekens
 * Strings samenvoegen: concatenatie
 * Strings tussen dubbele aanhalingstekens
 * Heredocs
  
