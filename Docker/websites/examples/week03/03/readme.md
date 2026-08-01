# Sticky positioning

When designing a table (or table like element) you might want to fix the header to the top of
the website when scrolling. This can be achieved using the `position:sticky` instruction.

Note the HTML structure below. The important part is that we explicitly added a table head `thead` having one row `tr`
and multiple table header cells `th`. This is good practice but also simplifies the CSS we need to write: we can simply
reference the `th` elements.

```html

<table>
    <thead>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ....
    </tbody>
</table>
```

The CSS focuses on the positioning of the `<th>` elements. We set the position to `sticky`. This also requires us to add
a
instruction for the `top`. Because table headers normally are transparent the header text will (optically) mix with the
text flowing behind it. Therefore, we use a background color to cover up the whole area behind the table headers. In
this
case a `rgba()` color is specified. This allows for specifying an opacity different from 1. This makes the backgruond
color a little transparent so the table text will be visible just a little bit. The lower the last number (in the example it
is `0.8`) will make it more transparent.

```css

thead tr th {
    position: sticky;
    top: 0;
    background-color: rgba(250, 250, 250, 0.8);
}
```

The `position: sticky` will stick the headers to the top when they would otherwise be scrolled out of view. See for the
exact definition the MDN reference for position at the end of this article.

Notice that a lot different syntaxes may be used to specify colors for background (Red, Green and Blue values). See
references at the end. In the example the 'old fashioned' way with commas as separators is used. So this is valid as 
well:

```css
  background-color:rgb(250 250 250 / 80%);
```

# References

* [MDN CSS Position](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/position)
* [MDN rgb() CSS ](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Values/color_value/rgb)
