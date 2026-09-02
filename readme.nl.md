# Welkom bij de PHP-handleiding

Deze handleiding is bedoeld voor studenten die beginnen met webontwikkeling met behulp van HTML, CSS en PHP.

# Aan de slag met webontwikkeling

Om deze cursus goed te kunnen volgen, heb je wat software nodig om je te helpen bij het programmeren:

* Een *geïntegreerde ontwikkelomgeving* of IDE. Twee populaire keuzes zijn Jetbrains PHP Storm en Visual Studio Code Community
  Edition
* Docker; het beste te installeren via Docker Desktop
* Een Git-client; bijvoorbeeld GitHub Desktop
* Deze repository

## Een IDE kiezen

Het kiezen van een IDE kan in het begin wat lastig zijn. Er zijn geen gouden regels die je naar de perfecte keuze leiden.
Er zijn echter wel een aantal zaken waarmee je rekening moet houden, zoals uiteengezet in de onderstaande lijst.

### **JetBrains PHP Storm**

* **JetBrains PHP Storm** vereist een licentie. Je kunt een licentie verkrijgen via je schoolaccount. De licentie moet jaarlijks worden verlengd.
* JetBrains PHP Storm is software die speciaal is afgestemd op de ontwikkeling met PHP, HTML en CSS. Het is zo ontworpen dat
  je direct na de installatie aan de slag kunt. Enkele voordelen:
    * geen behoefte aan (risicovolle/buggy/onveilige) plug-ins van derden. Bijna alles wat je nodig hebt, wordt geleverd en getest door
 JetBrains
    * plug-in voor het live bekijken van HTML-bestanden
    * mogelijkheid om je Docker-containers te beheren (starten, stoppen)
    * database-plug-ins vooraf geïnstalleerd; handig voor de komende periode!
* JetBrains-producten werken op Windows, Linux en Mac. Ze maken intensief gebruik van Node.js en Java.

### **Microsoft Visual Studio**

* **Microsoft Visual Studio** (bijna dezelfde naam als Visual Studio Code, maar heel anders) kan nogal veel
  systeemresources verbruiken. Er is geen speciale Student-editie.
* Microsoft Visual Studio werkt niet op Linux of macOS

### **Visual Studio Code Community Edition**

* **Visual Studio Code Community Edition** is een lichtgewicht IDE waarmee je zelf alle plug-ins kunt kiezen die je
  nodig hebt. Het kan echter lastig zijn om de juiste plug-in te kiezen vanwege het overweldigende aanbod.
* Visual Studio Code is de software die je tijdens de examens moet gebruiken
* Visual Studio Code is beschikbaar op [macOS](https://code.visualstudio.com/docs/setup/mac)
  en [Linux](https://code.visualstudio.com/docs/setup/linux)

### Overige overwegingen

* Elke IDE heeft zijn eigen toetsenbordindelingen, menustructuur enzovoort. Het kan even duren om hiermee vertrouwd te raken. Wanneer
  je van IDE wisselt, kost dit ‘inwerkproces’ opnieuw tijd.
* JetBrains biedt een reeks tools die expliciet zijn afgestemd op de rol van één ontwikkelaar. Andere IDE’s richten zich meer op het zijn van een
  Zwitsers zakmes dat voor elke taak kan worden geconfigureerd, waarbij plug-ins worden gebruikt om het werk te doen.

## GitHub Desktop installeren

De [GitHub Desktop](https://desktop.github.com/download/) is een van de vele tools ter ondersteuning van softwareversiebeheer. Als
je al gewend bent aan het gebruik van `git bash` of andere applicaties, kun je daar gerust mee doorgaan. Later in deze
module leer je de ins en outs van versiebeheer met behulp van de GIT-software.

Om aan de slag te gaan met webontwikkeling raad ik je aan GitHub Desktop te installeren, omdat dit naadloos integreert met het GitHub-
platform dat we voor deze cursus gaan gebruiken.

Let op: na het installeren van GitHub Desktop is er geen directe reden om een account aan te maken. Als je later besluit om
GitHub te gebruiken als je voorkeursplatform voor versiebeheer (bijvoorbeeld voor een project), kun je dan op dat moment je account aanmaken en toevoegen.

## Docker Desktop installeren

In deze repository vind je instructies om Docker Desktop [hier](./Docker/readme.md) te installeren.

**Let op**: het is niet nodig om een Docker-account aan te maken!

## Al deze code op je eigen computer zetten

Als je met broncode werkt, werkt het het beste als je deze op de harde schijf van je eigen computer zet. Het bijhouden van wijzigingen
doe je met behulp van software voor versiebeheer. In dit geval gebruiken we [GIT](https://nl.wikipedia.org/wiki/Git_(software). Je krijgt
hierover later in de les instructies.

Voorlopig kun je de applicatie [GitHub Desktop](https://desktop.github.com/download/) installeren en de repository klonen.
Bij het installeren van GitHub Desktop hoef je (nog) geen account aan te maken.

Kies na de installatie ‘Clone Repository’ en voer via het tabblad ‘URL’ de URL voor deze repository in:
`https://github.com/NHLStenden/php-tutorial-emmen-2026.git`. Je moet een locatie op je eigen computer kiezen. De
voorgestelde locatie is vaak niet de beste, omdat deze deel uitmaakt van je Windows-profiel. Je kunt het beste een nieuwe locatie kiezen, bijvoorbeeld
`c:\sources\year1/webdev` of iets dergelijks.

> **Belangrijk**: Probeer geen locatie te gebruiken waar synchronisatiesoftware zoals OneDrive of Dropbox actief is, aangezien
> deze bestanden mogelijk als ongewenst markeren en je project in de war brengen.

# Je weg vinden in deze repository

Deze repository is opgezet zoals hieronder beschreven.

Planning, inhoud en instructies. Voorbeelden en uitleg.

* [Colleges](./colleges/readme.md)
* [Voorbeelden](./Docker/websites/examples)

Hoe je je laptop voorbereidt voor webontwikkeling

* [Docker installeren](Docker/readme.md)

Elke week is er een opdracht waarbij bepaalde onderwerpen samenkomen in één website of programmeertaak. De opdrachten
worden vergezeld van een oplossing waarmee je je resultaten kunt vergelijken.

* [Opdrachten](./assignments/readme.md)
* [Oplossingen bij opdrachten](./Docker/websites/solutions/readme.md)

Als je aan opdrachten begint of met voorbeelden gaat experimenteren, kijk dan hier:

* [Je werk](./Docker/websites/student/readme.md)

De map `/Docker/websites/student/` wordt *genegeerd* bij het gebruik van GitHub. Dit betekent dat je zonder problemen je eigen opdrachten in
deze map kunt maken wanneer de GitHub-repository wordt bijgewerkt.

## De repository op je laptop bijwerken

Tijdens de cursus zullen er updates plaatsvinden voor de voorbeelden, oplossingen, readme-informatie enzovoort. Om
op de hoogte te blijven van deze updates, gebruik je de 

