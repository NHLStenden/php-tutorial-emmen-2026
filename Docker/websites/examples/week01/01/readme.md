# Week 1 - example 1

Have a look at the index.html. You can open it in any browser to view how the file is displayed.

In order for the browser to understand what you want to display we need a number of instructions:

## This is HTML

First we need to instruct the browser that we want to use the HTML programming language. This is done using the
`<doctype>` instruction. In the example below we can see this instruction.

```html
<!DOCTYPE html>
```

There are a few important elements:

1. `<` is the start of all instructions in HTML.
2. `!DOCTYPE` is the actual instruction. It means "I want to set the Document type to a certain value"
3. `html` is the programming language we want to be set.
4. `>` closes the instruction

The third part is called an attribute. It specifies a certain aspect of the instruction given. In this case 'HTML'.

## Documents

When a browser is offered a HTML file it will build a *Document* in memory. Therefore, the `<!DOCTYPE` is used to set
the document type programming language we will be using.

A document is ordered as a tree with the HTML-element at the root of the tree. All the text and other structures we will
build will become part of the document-tree.

## Here comes the HTML

The next line contains the `<HTML>` element. This instruction is used to setup the root of the document tree.

`<html>some other elements</html>`.

```html

<html lang="en">
....
....
....
....
</html>
```

Here we see the same structure. All elements are started using the `<`-character followed by the name of the element.
If they can contain other elements or text, the element must be properly closed using `</` followed by the element name.

So in this case:

1. `<` is the start of an instruction.
2. `HTML` is the actual instruction. It means "This is the root of the document tree using HTML"
3. `lang="en"` is an attribute with a specific value: the language this page is using is 'en' (which stands for English)
4. `>` closes the instruction
5. then some elements (discussed later) are enclosed
6. the element is closed using `</html>`

Note that attributes can have an optional value. In the `<!DOCTYPE html>` the `html` attribute has no value. In the
`<HTML>` element the `lang` attribute does have a value. When supplying a value it is enclosed by double qoutes: "....".

## Header and Body

When building the structure of the website page, there are two base parts:

* HEAD (header)
* BODY

Note that there is no footer. There is a `<footer>`-element but this can only be used in the `<body>`.

## Head

The `<head>` allows us to supply the browser with all kinds of information that is not displayed but instead is used
to understand how the structure of text and images must be displayed. Think of information like

* How to style text and images
* What the title of the page is (so the browser can display this in the tab list).
* Descriptions
* Active content like Javascript
* link to other files containing javascript and styling.
* ....

In this example the there are two elements contained within the `<head>`.

```html

<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
</head>
```

The first element is the `<meta>`-element. This element has a lot of different attributes to give instructions. In this
case the `charset="UTF-8"` indicates what sort of text is used so the browser understands special characters. Often this
is about diacritical characters like ć, é, â etc. But also when using Cyrillic or Vietnamese, Japanese or Chinese
charactersets this is needed.

The second element is the `<title>` element. In this case the element contains plain text: "Welcome!".

## Body

Finally, the body contains all the content we want to display to the users. The body contains all kinds of different
elements to make the browser display the correct information like text and images, or even video and sound.

```html

<body>
<p>Hello world</p>
</body>
```

In this case the `<p>`-element is used to indicate to the browser: "Here is a paragraph of text, containing the text '
Hello World'". 

The browser will simply render ('draw') the text on the screen using default font, color, and text size. 

# In depth: Semantic elements, forms and drawing

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

A lot of websites will

# References

* [MDN: HTML head](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Structuring_content/Webpage_metadata)
* [W3 Schools : Semantic Elements](https://www.w3schools.com/html/html5_semantic_elements.asp)