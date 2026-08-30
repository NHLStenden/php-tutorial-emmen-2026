#   Week 2 - HTML - 12 column layout with sidebar and @media-queries

This example showcases the use of the 12 column layout to create a page with a sidebar along the length of the page.

We also use @media-queries to adapt the layout when the page becomes smaller and smaller. Look at the CSS file. At the
bottom there are sections starting with `@media` followed by a `max-width` instruction between parenthesis. 

The CSS instructions @media queries will be used when a page has a maximum size mentioned. It is very important to make
sure that the following instruction in present in the `<head>`. Otherwise, the mediaqueries will not be triggered.

```html
<meta name="viewport" content="width=device-width, initial-scale=1">
```

Make sure that the CSS instructions in the @media queries sections have the same specificity as the ones in the normal
CSS. 

# References

* [MDN Media queries](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Media_queries/Using)
* [MDN Specificity](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Cascade/Specificity)
