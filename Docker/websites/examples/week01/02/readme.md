# Week 1 - example 2

Look at the file 'index.html' in this folder. You'll notice that everything we learned from example 1 is missing:

* there is no doctype
* there is no `<html>`-element
* there is no `<head>`-element
* there is no `<body>`-element

And still the browser will display the text!

# Default stylesheet

Each browser defines a set of default styling for each element, when applicable. You can sometimes inspect this using
the browser itself or look at the sourcecode. See the list of references at the end of this page.

# The forgiving browser

The programmers of browsers (like Brave, Firefox, Chromium, Chrome, ...) know that HTML-programmers can make mistakes.
Therefore these browser builders will forgive *a lot of* mistakes and will make an attempt to display the information
even though the structure of the HTML-elements may be faulty. This

## Validators

In order to determine whether the HTML you wrote is valid, there are validators. These validators are a product of
the community that defines these HTML standards. You can either use these in an online page or install a validator
in your browser. See [W3 Validator](https://validator.w3.org) for more information.

Many IDE's will also validate your HTML while you type in these elements. So keep an eye out for these red squiggly
lines below your source code.

note: notice that when you install a validator in your browser this might cause strange side effects when creating
more complex PHP pages in the future.

# References

* [Chromium default stylesheet](https://gist.github.com/ambidexterich/34828a904dd97dd2a345)
* [Firefox default stylesheet](resource://gre-resources/html.css); open this link in Firefox browser!