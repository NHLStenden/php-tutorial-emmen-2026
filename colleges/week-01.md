# Week 1

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
Engineers.
Therefore we will use the Docker ecosystem. With Docker you can setup one or more virtual computers that will each
perform
a specific task. We will setup a webserver, a database server and a (PHP built) Database Management program.

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
display,
but not in what fonts, colors etc. Using the CSS (Cascading style sheets) you will learn how to make your website more
attractive in comparison to the default styling of the web browser.

## Topics

* Protocols: HTTP and HTTPS
* Client and Server
* Docker basics to create a basic webserver environment
* Starting PHP with `<php` or `<?`

# In depth: Semantic elements, forms, drawing and animations

In this part the different kinds of elements are discussed.

### Semantic elements

The body contains structures like

* Headers on different levels
* main
* Sidebar
* Article
* Section
* Paragraphs
* break
* Navigation
* Footer
* table
* image

We call these **Semantic elements**: they clearly communicate their meaning. They can help users to navigate the page
e.g.
using a screenreader for visually impaired users.

An example.

A `<main>` element describes the main content of the page and can contain one or more`<article>` elements. An article
can be clearly divided in multiple `<section>`. Each section can have a `<header>` containing for instance a title on
level 1 (`<h1>`). The text in a section consists of paragraphs `<p>`). Next to an article there could be some notes in
an `<aside>`.

Tabular content can be displayed using a `<table>`. A table has a header (`<thead>`) and possibly a footer (`<tfoot>`).
A table consists of one or more rows (`<tr>`).

To help the user to navigate to other pages in the website, a page can show a list of links to other pages contained in
a `<nav>` element.

At the bottom of the page there is a footer showing e.g. contact information or a copyright statement.

And so on.

Notice that a lot of elements have a meaningful name. However, their function is not always clear.

### Non-Semantic elements

There are also a lot of elements that can be used for almost anything. These are elements like

* `<div>` : division
* `<span>`: a small portion of text

## Forms

One of the more usefull possibilities of a webpage is to manage data using forms. Think of asking a question on a search
engine,
editing your own contact information or entering your address when ordering an item from a webshop. Often the
information
being managed comes from a database. We will not be using a database in this first module, but we wil be using forms.

To manage or enter information the HTML-standard offers multiple kinds of inputs:

* differents kinds of text and numbers like plain text, e-mail, phone numbers or just plain numbers
* picking an item from a list
* selecting a file to upload (e.g. your image for an avatar)
* checkbox to enable / disable an option
* choosing between options like ways to deliver your package: hgome delivery or a pickup-point
* buttons to cancel or submit the information
* labels to indicate what information you should enter (like 'name', 'address', 'phone number')

## Drawing and images

A lot of websites will show images, figures, diagrams or even mathematic equations. These are well supported using
HTML-elements.

The best known is the `<img>` element: this can load a picture from the website and show it within the page. But
sometimes
the content of a diagram is calculated or created by the user. Then the `<canvas>`-element can be used to create images
or
diagrams using the Javascript language. Another popular way to display diagrams is the `<svg>`-element. These (vector-)
images
can scale almost indefinitely without loss of quality.

## Animations

Sometimes animations can greatly improve the appeal of a website. In both CSS and SVG there are a lot of ways to animate
elements. Some example:

* move them around
* increase/decrease size
* change opacity and color
* rotate / flip

# References

**Online programming resources**

* [MDN: HTML head](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Structuring_content/Webpage_metadata)
* [W3 Schools : Semantic Elements](https://www.w3schools.com/html/html5_semantic_elements.asp)
* Getting started with PHP on [PHP.net](https://www.php.net/manual/en/getting-started.php)
* Validate your HTML with [W3C Validator](https://validator.w3.org)
* CSS animation playground : [Animista](https://animista.net/)

**Book chapters**

* _HTML and CSS_: Chapters 1.1, 1.2, 1.3, 1.4, 1.6, 2
* _PHP Crash Course_: Part I, chapter 1

**Online References**

* [MDN: HTML: HyperText Markup Language](https://developer.mozilla.org/en-US/docs/Web/HTML)
* [MDN: Structuring content with HTML](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Structuring_content)
* Setting up your webserver with [Docker Desktop](https://www.docker.com/products/docker-desktop/)

**Possible IDEs**

* [Jetbrains PHP Storm](https://www.jetbrains.com/phpstorm)
* [Visual Studio Code](https://code.visualstudio.com)
* [Notepad++](https://notepad-plus-plus.org)
* [Netbeans](https://netbeans.apache.org)
