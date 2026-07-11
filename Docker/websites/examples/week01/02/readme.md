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




# References

* [Chromium default stylesheet](https://gist.github.com/ambidexterich/34828a904dd97dd2a345)
* [Firefox default stylesheet](resource://gre-resources/html.css); open this link in Firefox browser!