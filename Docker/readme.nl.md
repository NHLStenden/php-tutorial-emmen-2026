# PHP-Docker-omgeving voor studenten van NHL-Stenden

Dit project bevat een docker-compose-bestand en configuratiebestanden voor het opzetten van een ontwikkelomgeving voor de
cursus PHP aan de hogeschool NHL-Stenden.

## Aan de slag

Deze instructies helpen je bij het opzetten van een ontwikkelomgeving voor gebruik binnen de PHP-vakken aan NHL-Stenden met behulp
van Docker. Deze code is uitsluitend bedoeld voor educatieve doeleinden.

Let op: je hoeft geen Docker-account aan te maken!

### Vereisten

#### Windows

- [Docker Desktop](https://docs.docker.com/desktop/windows/install/)

#### Mac

- [Docker Desktop voor Mac](https://docs.docker.com/desktop/mac/install/)
    - Let op: Controleer de architectuur van je Mac! (x64/arm64)

#### Linux en aanverwante systemen

- [Docker Engine](https://docs.docker.com/engine/install/#server)
    - Selecteer je distributie in de tabel en volg de gegeven instructies.

## Docker voor het eerst starten

Volg de onderstaande instructies om de container te starten en alle benodigde bestanden te downloaden:

1. Zoek de map 'Docker' in dit project met behulp van Windows Verkenner
2. Klik in de adresbalk en typ 'cmd'.
3. Hierdoor wordt een *opdrachtprompt* geopend in de huidige map
4. Je kunt de opdrachtprompt ook openen via het Windows-startmenu en de opdracht `cd` gebruiken om naar
   de juiste map te navigeren. Bijvoorbeeld `cd \sources\year1\webdev\Docker`.
5. Voer de onderstaande opdracht in

``` powershell
docker-compose up
```

5. Wacht tot Docker de container heeft opgestart. Dit kan de eerste keer even duren, omdat er allerlei
   software moet worden gedownload en de container moet worden opgebouwd.
6. Ga in je favoriete browser naar [localhost](http://localhost); je zou nu het welkomstscherm moeten zien.
7. Lees dit welkomstscherm goed door! Het bevat nuttige informatie over de draaiende database en de PHPMyAdmin-
  instantie (die overigens niet echt nodig is voor deze module)

Nu kun je de voorbeelden en oplossingen gebruiken en ze in een browser weergeven. Plaats bij het schrijven van je eigen code de bestanden
in de map `/Docker/websites/student`. Bekijk het voorbeeld [hier](http://localhost/student).

## Docker de volgende keer starten

De volgende keer dat je de webserver nodig hebt, start je gewoon Docker Desktop en start je de ‘nhl stenden webserver php tutorial’ met de
afspeelknop. 

## Database - Mariadb

De databasegebruiker en het wachtwoord vind je in ".env". Je krijgt toegang tot de database door verbinding te maken met `[localhost:3306]`
met je favoriete databasetool.

### Adressen voor applicaties

| Dienst | Extern adres | Interne containernaam |
|-----------------|-----------------------------------------|------------------------|
| PHPMyAdmin | [localhost:8080](http://localhost:8080) | phpmyadmin |
| MySQL (MariaDB) | localhost:3306 | mysql |

### Verbinding maken met de database vanuit PHP

Om vanuit PHP verbinding te maken met de database, is enige speciale aandacht nodig. Gebruik in plaats van het externe
`localhost:3306`-adres moet je de interne containernaam gebruiken zoals vermeld in het docker-compose-bestand. In het
standaardgeval is dit `mysql`.

In PHP kun je dit als volgt gebruiken:

``` php
<?php
    $conn = mysqli_connect("mysql", "root", "qwerty") or die(mysqli_connect_error());
?>
```

### php.ini

Het bestand ```custom.php.ini``` is bedoeld om aangepaste PHP-instellingen toe te voegen die de standaardinstellingen overschrijven. Voeg gewoon de
instellingen die je wilt wijzigen toe aan dit bestand en ze zullen de standaardinstellingen van de PHP-instantie overschrijven. Als je
ook toegang wilt krijgen tot de omgevingsvariabelen binnen PHP, kun je het volgende gebruiken:

``` php
<?php
  $_ENV["example"];
?>
``` 

Vervang "example" door de naam van de variabele waartoe je toegang wilt hebben.

Opmerking: Als je aanvullende software nodig hebt, zoals `sendmail`, moet je deze zelf toevoegen aan de container of
een nieuwe container aanmaken die de aanvullende software bevat.


