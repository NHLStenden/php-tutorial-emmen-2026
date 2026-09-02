# PHP Docker environment for NHL-Stenden students

This project contains a docker-compose file and configuration files for setting up a development environment for the
course PHP on NHL-Stenden university of applied sciences.

## Getting Started

These instructions will aid you in setting up a development environment for use within the PHP courses at NHL-Stenden by
using docker. This code is for educational purposes only.

Note: there is no need to create a Docker account!

### Prerequisites

#### Windows

- [Docker desktop](https://docs.docker.com/desktop/windows/install/)

#### Mac

- [Docker Desktop for Mac](https://docs.docker.com/desktop/mac/install/)
    - Note: Do check the architecture of your Mac! (x64/arm64)

#### Linux and friends

- [Docker engine](https://docs.docker.com/engine/install/#server)
    - Select your distribution from the table and follow the provided instructions.

## Running Docker for the first time

To start the container and download all necessary files, follow instructions below:

1. Find the 'Docker' folder within this project using the Windows Explorer
2. Click in the Address bar and type 'cmd'.
3. This will open a *Command Shell* in the current directory
4. Alternatively you could open the Command Shell from the windows start menu and use the `cd` command to navigate to
   the correct folder. For instance `cd \sources\year1\webdev\Docker`.
5. Enter the command below

``` powershell
docker-compose up
```

5. Wait for docker to start up the container. This can take a while the first time as it must download all kinds of
   software and build the container.
6. Go to [localhost](http://localhost) in your favorite browser, you should see the welcome screen.
7. Read this welcome screen well! It contains useful information regarding the running database and the PHPMyAdmin
   instance (not really needed for this module by the way)

Now you can use the examples and solutions and show them in a browser. When writing your own code, please place files
in the `/Docker/websites/student` folder. Have a look at the example [over there](http://localhost/student).

## Running Docker the next time

Next time you need the webserver, just run Docker Desktop and start the 'nhl stenden webserver php tutorial' using the
play button. 

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
settings you want to change to this file and they will overwrite the default settings of the PHP instance. If you want
to get access too the environmental variables whithin PHP, you can use:

``` php
<?php
  $_ENV["example"];
?>
``` 

Change "example" to the name of the variable you want to access.

Note: If you need additional software like `sendmail`, you will have to add this yourself to either the container or add
a new container containing the additional software.


