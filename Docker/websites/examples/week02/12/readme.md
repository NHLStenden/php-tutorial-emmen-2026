# Flex grid

In this example we see that the HTML is quite different from the example with the 
`display:grid`.

## Advantages in this specific example

No need to scale the sidebar. In this case we use a 'relative em-dash' length that scales nicely.
So, also no need to scale the `<section>` because the sidebar remains fixed. 

## Disadvantages
* The first `<header>` is no longer part of the `<main>` or `<article>`.
* The aside is not part of the `<article>` but instead resides in `<main>`.

