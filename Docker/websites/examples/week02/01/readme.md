# Week 2 - HTML - A grid with 2 columns

In this example we explore the `display:grid` CSS instructions.

The HTML follows the basic structure of an article with sections.

The CSS is where it gets interesting. See the code below.

```css
article {
    display: grid;
    grid-template-columns: auto auto; /** creates two columns */
    column-gap: 3rem;
    row-gap: 3rem;
}
```

The `display`-instruction is new here. The default value is either `block` or `inline`, depending on the element. 

When an element is 'block mode element' this means that this is a block
that will take up as much horizontal space as possible. Also the `width` and `height` can be set in CSS. Elements are
always layout top-to-bottom.

Elements with an `inline`

If we want to change this 'top-to-bottom'

```css
article {
    display: grid;
    grid-template-columns: auto auto; /** creates two columns */
    column-gap: 3rem;
    row-gap: 3rem;

    section {
        border: 1px solid darkgray;
        border-radius: 4px;
        padding: 10px;
        box-shadow: 4px 4px 4px darkgray;

    }
}

```

# References

* [MDN the box model](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Styling_basics/Box_model)