# Welcome to the PHP Tutorial

This tutorial is aimed at students beginning with web development using HTML, CSS and PHP.

# Getting started with Web Development

To effectively follow this course you'll need some software to support your coding efforts:

* An *Integrated Development Environment* or IDE. Two favorites are Jetbrains PHP Storm and Visual Studio Code Community
  Edition
* Docker; best installed using Docker Desktop
* A git client; e.g. GitHub Desktop
* This repository

## Choosing an IDE

Choosing an IDE can be a bit difficult at first. There are no golden rules that will lead the way to a perfect choice.
However, there are some things to consider as laid out in the list below.

### **Jetbrains PHP Storm**

* **Jetbrains PHP Storm** requires a license. You can obtain a license using your school account. Renewal is yearly.
* Jetbrains PHP Storm is a piece of software that comes prepared for PHP, HTML and CSS development. It is tailored to
  getting you started immediately after install. Some advantages
    * no need for (risky/buggy/insecure) third party plugins. almost everything you need is provided and tested by
      Jetbraind
    * plugin for live viewing HTML files
    * able to manage your Docker containers (start, stop)
    * database plugins pre-installed; usefull for the next period!
* Jetbrains products work on Windows, Linux and Mac. They rely heavily on NodeJS and Java.

### **Microsoft Visual Studio**

* **Microsoft Visual Studio** (almost same name as Visual Studio code, but quite different) can be a bit heavy on
  resources. There is no special Student edition.
* Microsoft Visual Studio does not work on Linux or MacOS

### **Visual Studio Code Community Edition**

* **Visual studio code Community Edition** is a lightweight IDE that gives you the ability to select all the plugins you
  need. However, choosing the right plugin might be difficult due to the overwhelming amount of plugins.
* Visual studio code is the software you must use during the exams
* Visual studio code is available on [MacOs](https://code.visualstudio.com/docs/setup/mac)
  and [Linux](https://code.visualstudio.com/docs/setup/linux)

### Other considerations

* every IDE has its own keyboard mappings, menu layout etcetera. Getting to know these might take some time. When
  switching IDE's this 'getting to learn' will again cost time.
* Jetbrains has a tool of tools explicitly tailored to one developer's role. Other IDE's focus more on being a Swiss
  Army Knife that can be configured for any task, using plugins to do the work.

## Installing GitHub Desktop

The[ GitHub desktop](https://desktop.github.com/download/) is one of many tools to support Software Version Control. If
you're already used to using `git bash` or other applications, please feel free to continu doing so. Later on in this
module you'll be taught the ins-and-outs of Software Version Control using the GIT software.

To get started with Web Development I advice installing Github Desktop as it seamlessly integrates with the GitHub
platform we'll be using for this course.

Note that after installing GitHub Desktop there is no immediate reason to create an account. If you later decide to use
GitHub as your go-to-platform for version control (e.g. a project), then later create and add your account.

## Installing Docker Desktop

There are instructions in this repository to install Docker Desktop [here](./Docker/readme.md).

**Note**: there is no need to create a Docker account!

## Getting all this code on your own computer

When working with source code it works best when placed on your own computer's harddrive. Keeping track of changes is
done using a Version Control software. In this case we use [GIT](https://nl.wikipedia.org/wiki/Git_(software). You will
receive instructions in class later on.

For now you could install [Github Desktop](https://desktop.github.com/download/) application and clone the repository.
When instelling Github Desktop there is (not yet) need to create an account.

After installation choose 'Clone Repository' and use the URL-tab to enter the URL for this repository:
`https://github.com/NHLStenden/php-tutorial-emmen-2026.git`. You need to choose a location on your own computer. The
suggested location often is not the best one, being part of your Windows profile. Best to pick a new location e.g.
`c:\sources\year1/webdev` or something similar.

> **Important** : Try to prevent using a location where synchronisation software like OneDrive or Dropbox is active, as
> they might mark files as unwanted and mess up your project.

# Getting around in this repository

This repository is setup as described below.

Planning, content and instructions. Examples and explainers.

* [Colleges](./colleges/readme.md)
* [Examples](./Docker/websites/examples)

How to prepare your laptop for web development

* [Docker installation](Docker/readme.md)

Every week there is an assignment where certain topics come together in one website or programming task. The assignments
are accompanied by a solution to compare your results.

* [Assignments](./assignments/readme.md)
* [Solutions to assignments](./Docker/websites/solutions/readme.md)

When you start working on assignments or experiment with examples have a look here:

* [Your work](./Docker/websites/student/readme.md)

The `/Docker/websites/student/` folder is *ignored* when using GitHub. This means you can create your own assignments in
this folder without problems when the GitHub repository is updated.

## Updating the repository on your laptop

During the course there will be updates on the examples, solutions, readme information etcetera. In order to keep
up-to-date with these updates, you use the 

