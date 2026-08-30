# Week 1 - HTML - "Hello World"

This is the "Hello World" of HTML. 

Have a look at the index.html. You can open it in any browser to view how the file is displayed.

In order for the browser to understand what you want to display we need a number of instructions.



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

