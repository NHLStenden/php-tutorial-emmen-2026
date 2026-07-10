# PHP Docker environment for NHL-Stenden students

This project contains a docker-compose file and configuration files for setting up a development environment for the
course PHP on NHL-Stenden university of applied sciences.

## Getting Started

These instructions will aid you in setting up a development environment for use within the PHP courses at NHL-Stenden by
using docker. This code is for educational purposes only.

### Prerequisites

#### Windows

- [Docker desktop](https://docs.docker.com/desktop/windows/install/)

#### Mac

- [Docker Desktop for Mac](https://docs.docker.com/desktop/mac/install/)
    - Note: Do check the architecture of your Mac! (x64/arm64)

#### Linux and friends

- [Docker engine](https://docs.docker.com/engine/install/#server)
    - Select your distribution from the table and follow the provided instructions.

### Running

The following steps will set-up your development environment

1. Download the archive containing the necessary files.
2. Extract the files to a folder in which you will start your project.
3. Open a terminal in the folder in which you extracted the files.
    - This can be done within a supporting editor (E.g. Visual studio code)
    - Alternatively you can use the terminal to navigate or use a file explorer to open a terminal in the desired
      folder (Windows: `Shift + right click in explorer -> Powershell`)
4. Execute the following docker-compose command

``` powershell
docker-compose up
```

5. Wait for docker to start up the container.
6. Go to [localhost](http://localhost) in your favorite browser, you should see the welcome screen.
7. Read this welcome screen well! It contains useful information regarding the running database and the PHPMyAdmin
   instance.

The extracted files contains a folder called "app". Inside this folder there is another folder called "public". The
public folder is where you will need to place your own code and files that are publicly available to the outside world.
Everything else is private.

## Database - Mariadb

The database user and password can be found in ".env". The database can be accessed by connecting to `[localhost:3306]`
with you favorite database tool.

### Addresses for applications

| Service         | External address                        | Internal containername |
|-----------------|-----------------------------------------|------------------------|
| PHPMyAdmin      | [localhost:8080](http://localhost:8080) | phpmyadmin             |
| MySql (MariaDB) | localhost:3306                          | mysql                  |

### Connecting to the database from PHP

In order to connect from PHP to the database, some special attention is needed. Instead of using the external
`localhost:3306` address. You will need to use the internal containername as stated in the docker-compose file. In the
default case this is `mysql`.

In PHP you can use it as follows:

``` php
<?php
    $conn = mysqli_connect("mysql", "root", "qwerty") or die(mysqli_connect_error());
?>
```

### php.ini

The file ```custom.php.ini```is there to add custom php settings that overwrite the default setting. Just add the
settings you want to change to this file and they will overwrite the default settings of the PHP instance.
If you want to get access too the environmental variables whithin PHP, you can use:

``` php
<?php
  $_ENV["example"];
?>
``` 

Change "example" to the name of the variable you want to access.

Note: If you need additional software like `sendmail`, you will have to add this yourself to either the container or add
a new container containing the additional software.


