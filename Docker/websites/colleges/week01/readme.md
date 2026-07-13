# Week 1

## Web Development Seminar

* Teaching method: Seminar
* Duration: 3 × 2 teaching hours

### Learning objectives

By the end of this seminar, students will be able to:

* install Docker;
* install and configure an IDE of their choice;
* create a logical folder structure;
* organize source files using proper indentation;
* add images to a web page;
* apply external CSS stylesheets;
* use HTML classes and IDs correctly;
* understand the fundamentals of PHP syntax;
* create HTML pages containing PHP code.

### Content

During this seminar, students install Docker and an Integrated Development Environment (IDE) (see Appendix 7). The
seminar introduces the principles of styling HTML pages using CSS. Students learn how classes and IDs can be used to
style specific elements. The fundamentals of PHP syntax are introduced, after which students begin creating dynamic web
pages by embedding PHP within HTML.

### Preparation / Individual assignments

Students should:

* install Docker;
* install their preferred IDE;
* consult the introductory lecture where necessary;
* complete the Week 1 assignments.


# Introduction to web development

In the first week we will explore the world of websites. How do you setup your first website? First we will look at a
simple static website. This website can be created using a simple editor and can be viewed in any browser without
setting up a webserver.

Next we will look at how websites are setup using professional components like a webserver and the PHP programming
language.

# Websites using HTML

When creating a website we need to instruct the browser what to display. This means supplying the browser with not only
the text and images, but also how the text is structured. The browser displays this information in a well defined way,
using default styling.

## Topics

* Base structure : `<html>, <body>, <meta>`
* Authoring text with `<main>, <article>, <section>, <p>`
* Comments `<!-- -->`
* HTML Element attributes
* Using an **Integrated Development Environment (IDE)** to your advantage

# Webserver with docker and PHP

Having files on your harddisk to load a website will not enable other users to see your website. In order to let others
use your website we will need to setup a webserver on the internet. This can be costly so we will not invest money (yet)
to actually buy an domainname ('url') and pay for a webserver.

## Setting up a webserver

Instead we will setup a webserver on our own computer. Setting up a webserver can be painful for starting Software
Engineers. Therefore we will use the Docker ecosystem. With Docker you can setup one or more virtual computers that will
each perform a specific task. We will setup a webserver, a database server and a (PHP built) Database Management
program.

The teacher will supply you with the files and instructions to setup these servers.

## Server Side Programming

One of the benefits of using a server is that we can then use this webserver to make a more dynamic website. This is
called
*Server Side Programming* or *Server side rendering*. If we want to build non-static websites ('dynamic') we will need
another programming language that can handle processing information and create a website that fits the user's needs
better.

There are a few options to create dynamic websites:

* PHP (_Pre Hypertext Processor_) sometimes with frameworks like Symphony, Laravel
* Java, e.g. Springboot
* Python with frameworks like Flask and Django
* Javascript (NodeJS and client side)
* APS.net with C# and Entity Framework

In this course we will explore **PHP**. This is a programming language that is easy to learn, works well with a lot of
webserver hosting suppliers, and is well supported by the community.

### Front-end programming

When creating websites there is also a lot attention on interactivity and dynamic behaviour using front-end programming.
This means that you can use (yet another) programming language like _Javascript_ to handle dynamic behaviour without
needing the webserver. This enables you to create very attractive websites, but also greatly increases the security
risks.

Popular front-end programming frameworks

* [Angular](https://angular.dev/tutorials/learn-angular), using the Typescript programming language
* [Vue](https://vuejs.org/tutorial/#step-1)
* [React](https://react.dev/learn)
* [Web Assembly](https://dotnet.microsoft.com/en-us/learn/aspnet/blazor-tutorial/intro) (C# combined with Blazor)

In this first module we will *not* be using Javascript or other front-end frameworks.

### Styling

Last but not least we will look at styling our website. The HTML only instructs the browser what text and images to
display, but not in what fonts, colors etc. Using the CSS (Cascading style sheets) you will learn how to make your
website more attractive in comparison to the default styling of the web browser. 

We will be using the Cascaded Style Sheet (CSS) language for this. 

## Topics

* Protocols: HTTP and HTTPS
* Client and Server
* Docker basics to create a basic webserver environment
* Starting PHP with `<php` or `<?`

For more in-depth information see [week 1 in depth](week-01-in-depth.md).

