# PHP-Docker-omgeving voor studenten van NHL-Stenden

Dit project bevat een docker-compose-bestand en configuratiebestanden voor het opzetten van een ontwikkelomgeving voor de
cursus PHP aan de hogeschool NHL-Stenden.

## Aan de slag

Deze instructies helpen je bij het opzetten van een ontwikkelomgeving voor gebruik binnen de PHP-cursussen aan de NHL-Stenden met behulp van
Docker. Deze code is uitsluitend bedoeld voor educatieve doeleinden.

### Vereisten

#### Windows

- [Docker Desktop](https://docs.docker.com/desktop/windows/install/)

#### Mac

- [Docker Desktop voor Mac](https://docs.docker.com/desktop/mac/install/)
    - Opmerking: Controleer de architectuur van je Mac! (x64/arm64)

#### Linux en aanverwante systemen

- [Docker Engine](https://docs.docker.com/engine/install/#server)
    - Selecteer je distributie in de tabel en volg de gegeven instructies.

### Uitvoeren

Met de volgende stappen zet je je ontwikkelomgeving op

1. Download het archief met de benodigde bestanden.
2. Pak de bestanden uit in een map waarin je je project wilt starten.
3. Open een terminal in de map waarin je de bestanden hebt uitgepakt.
    - Dit kan vanuit een ondersteunende editor (bijv. Visual Studio Code)
    - Je kunt ook de terminal gebruiken om te navigeren of een bestandsverkenner gebruiken om een terminal te openen in de gewenste
 map (Windows: `Shift + right click in explorer -> Powershell`)
4. Voer de volgende `docker-compose`-opdracht uit

``` powershell
docker-compose up
```

5. Wacht tot Docker de container heeft opgestart.
6. Ga naar [localhost](http://localhost) in je favoriete browser; je zou het welkomstscherm moeten zien.
7. Lees dit welkomstscherm goed door! Het bevat nuttige informatie over de actieve database en de PHPMyAdmin-
  instantie.

De uitgepakte bestanden bevatten een map met de naam „app“. In deze map bevindt zich nog een map met de naam „public“. In de
map „public“ moet je je eigen code en bestanden plaatsen die openbaar toegankelijk zijn voor de buitenwereld.
Al het overige is privé.

## Database - Mariadb

De databasegebruiker en het wachtwoord staan in ".env". Je kunt toegang krijgen tot de database door verbinding te maken met `[localhost:3306]`
met je favoriete databasetool.

### Adressen voor applicaties

| Dienst | Extern adres | Interne containernaam |
|-----------------|-----------------------------------------|------------------------|
| PHPMyAdmin | [localhost:8080](http://localhost:8080) | phpmyadmin |
| MySQL (MariaDB) | localhost:3306 | mysql |

### Verbinding maken met de database vanuit PHP

Om vanuit PHP verbinding te maken met de database, is enige speciale aandacht nodig. Gebruik niet het externe
`localhost:3306`-adres. moet je de interne containernaam gebruiken zoals vermeld in het docker-compose-bestand. In het
standaardgeval is dit `mysql`.

In PHP kun je dit als volgt gebruiken:

``` php
<?php
    $conn = mysqli_connect("mysql", "root", "qwerty") or die(mysqli_connect_error());
?>
```

### php.ini

Het bestand ```custom.php.ini``` is bedoeld om aangepaste PHP-instellingen toe te voegen die de standaardinstellingen overschrijven. Voeg gewoon de
instellingen die je wilt wijzigen toe aan dit bestand en ze zullen de standaardinstellingen van de PHP-instantie overschrijven.
Als je binnen PHP toegang wilt krijgen tot de omgevingsvariabelen, kun je het volgende gebruiken:

``` php
<?php
  $_ENV["example"];
?>
``` 

Vervang "example" door de naam van de variabele waartoe je toegang wilt hebben.

Opmerking: Als je aanvullende software nodig hebt, zoals `sendmail`, moet je deze zelf toevoegen aan de container of
een nieuwe container aanmaken die de aanvullende software bevat.


