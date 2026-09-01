# Week 1 - HTML - "Hello World" zonder HTML

"Hello World" maken zonder HTML.

Bekijk het bestand 'index.html' in deze map. Je zult zien dat alles wat we in voorbeeld 1 hebben geleerd, ontbreekt:

* er is geen doctype
* er is geen `<html>`-element
* er is geen `<head>`-element
* er is geen `<body>`-element

En toch geeft de browser de tekst weer!

# Standaardstylesheet

Elke browser definieert een set standaardstijlen voor elk element, indien van toepassing. Je kunt dit soms bekijken via
de browser zelf of door de broncode te bekijken. Zie de lijst met referenties aan het einde van deze pagina.

# De vergevingsgezinde browser

De programmeurs van browsers (zoals Brave, Firefox, Chromium, Chrome, ...) weten dat HTML-programmeurs fouten kunnen
maken. Daarom zullen deze browserontwikkelaars *heel veel* fouten door de vingers zien en proberen de informatie weer te
geven, ook al is de structuur van de HTML-elementen mogelijk onjuist. Dit

## Validators

Om te bepalen of de HTML die je hebt geschreven geldig is, bestaan er validators. Deze validators zijn een product van
de gemeenschap die deze HTML-standaarden definieert. Je kunt deze gebruiken via een online pagina of een validator in je
browser installeren. Zie [W3 Validator](https://validator.w3.org) voor meer informatie.

Veel IDE’s valideren je HTML ook terwijl je deze elementen intypt. Let dus goed op die rode golvende lijnen onder je
broncode.

opmerking: houd er rekening mee dat het installeren van een validator in je browser vreemde bijwerkingen kan veroorzaken
bij het maken van complexere PHP-pagina’s in de toekomst.

# Referenties

* [Standaard stylesheet van Chromium](https://gist.github.com/ambidexterich/34828a904dd97dd2a345)
* [Standaard stylesheet van Firefox](resource://gre-resources/html.css); open deze link in de Firefox-browser!