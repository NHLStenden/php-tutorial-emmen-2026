# In depth: Semantic elements, forms, drawing and animations

In this part the different kinds of HTML elements are discussed. The can be divided in a number of categories:

* semantic / non semantic elements
* elements to support forms
* elements to show graphics, images, drawings etc

At the end we will briefly look at how to add animations using CSS.

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
sometimes the content of a diagram is calculated or created by the user. Then the `<canvas>`-element can be used to
create images or diagrams using the Javascript language. Another popular way to display diagrams is the `<svg>`-element.
These (vector-) images can scale almost indefinitely without loss of quality.

## Animations

Sometimes animations can greatly improve the appeal of a website. In both CSS and SVG there are a lot of ways to animate
elements. Some example:

* move them around
* increase/decrease size
* change opacity and color
* rotate / flip

# References

## Online programming resources

* [MDN: HTML head](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Structuring_content/Webpage_metadata)
* [W3 Schools : Semantic Elements](https://www.w3schools.com/html/html5_semantic_elements.asp)
* Getting started with PHP on [PHP.net](https://www.php.net/manual/en/getting-started.php)
* Validate your HTML with [W3C Validator](https://validator.w3.org)
* CSS animation playground : [Animista](https://animista.net/)

## Online References

* [MDN: HTML: HyperText Markup Language](https://developer.mozilla.org/en-US/docs/Web/HTML)
* [MDN: Structuring content with HTML](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Structuring_content)
* Setting up your webserver with [Docker Desktop](https://www.docker.com/products/docker-desktop/)

## Possible IDEs

* [Jetbrains PHP Storm](https://www.jetbrains.com/phpstorm)
* [Visual Studio Code](https://code.visualstudio.com)
* [Notepad++](https://notepad-plus-plus.org)
* [Netbeans](https://netbeans.apache.org)
