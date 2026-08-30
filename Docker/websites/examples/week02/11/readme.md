# Week 2 - HTML - Flex grid using div

In this variant of example 6 (grid layout) we use `<div>` elements to divide the HTML in
parts that better fit the layout we want.

We first need to divide the page in a 'header' and 'the rest'. Then we can look at 'the rest'
and divide it in two parts:
 
* the sidebar on the left
* the actual contant on the right

This means we have to instruct the browser to stop using the default *vertical* layout, and
start a horizontal layout. This is done using the `display:flex` CSS instruction.

## Advantages

* the `<aside>` and `<header>` are now back on their 'semantic correct place'.

## Disadvantages

* The extra `<div>` elements overcomplicate the HTML.

# Conclusion

For layouts like this, using a `display: grid` has many advantages. In the next example
we will see a different page that does benefit from the `display: flex`.

