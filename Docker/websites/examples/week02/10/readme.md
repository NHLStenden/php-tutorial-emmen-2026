# Flexbox introduction

The flexible box layout module (usually referred to as flexbox) is a one-dimensional layout model for distributing space
between items and includes numerous alignment capabilities. This article gives an outline of the main features of
flexbox, which we will explore in more detail in the rest of these guides.

When we describe flexbox as being one-dimensional we are describing the fact that flexbox deals with layout in one
dimension at a time — either as a row or as a column. This can be contrasted with the two-dimensional model of CSS Grid
Layout, which controls columns and rows together.

# Example

In this example we place 4 boxes on the page using a `<section>` element with a header and some text.

```php
<section>
    <header><h1>First</h1></header>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores culpa eius fugit illo illum magnam
        mollitia quos ut vero! Eius modi necessitatibus porro repellat repudiandae sed soluta unde, ut
        voluptatibus.
    </p>
</section>
```

View this example on [github](https://nhlstenden.github.io/php-tutorial-emmen-2026/Docker/websites/examples/week02/10).

Normally when placing `<section>` elements on a page, they will be placed in a vertical manner and span the width of the
page.

Using the `display:flex` (instead of the standard `display:block`) we can change a lot of things:

* the direction: either vertical (`column`) or horizontally (`row`)
* normal or reversed direction (`column-reverse` or `row-reverse`)
* how items are placed within their parent:
    * 'normal'-axis
    * 'other'-axis
* spacing
    * `space-round`
    * `space-between`
    * `space-evenly`
* centering

For more information see the references at the end of this article.

What is very **important** to understand is that working with flex-box requires setting the right properties in both the
**parent** and the **children**.

In this example we use the CSS below. Explanation below the example

```css
main {
    font-family: sans-serif;

    article {
        display: flex;
        flex-direction: row; /* also try row-reverse*/
        flex-wrap: wrap;

        justify-content: space-between;

        column-gap: 3rem;
        row-gap: 3rem;

        section {
            flex-basis: 15%;

            min-width: 300px;

            border: 1px solid darkgray;
            border-radius: 4px;
            padding: 10px;
            box-shadow: 4px 4px 4px darkgray;
        }
    }
}
```

## Setting up parent and children using Flexbox

We use *nested CSS* to follow the structure of our HTML. The `<article>` is the container of the section. We therefore
call it the **parent**. We want to use the `<article>` as the parent to set the display-property of the children. In
this case we use _flexbox_ and set `display` to the value of `flex`.

We want the `<section>` elements to be placed after one another in a row, and wrap them if there is not enough space.

* set `flex-direction`  to `row`. This will place the direct children in a row
* set `flex-wrap` to `wrap` so that items that do not fit will be placed on the next row.

## Setting up the CSS properties of the children

Now we have to first look at the children: the `<section>` elements. In order for them to behave in the desired manner
we have to setup two important properties:

1. set `flex-basis` to a value; in this case we chose 15% (of the available parent's width)
2. set a minimum width of 300px: `min-width:300px`.

The first property will make sure that each `<section>` element is 15% of the available space. This will keep shrinking
the
`<section>`elements, possibly below a width that is deemed acceptable. Therefore we add another property `min-width` and
specify that 'no matter what space is available this element must not shrink below 300 pixels'.

## Wrapping

This will create a possible conflict with the `display:flex` and `flex-direction: row`. Because if children all must be
at least 300px wide, they might not fit in one row. This is where the `flex-wrap` comes into play: if the children do
not fit the parent anymore, this option decides what to do. In this case we instruct in to place items that do not fit
anymore on a next row. This is called **wrapping**.

![image](./flex-wrap.svg)

(image from https://css-tricks.com/snippets/css/a-guide-to-flexbox/)

## Play around

In order to understand this example better change the properties of

### `section`

Now have a look at the second [example](./index2.html). View this example
on [github](https://nhlstenden.github.io/php-tutorial-emmen-2026/Docker/websites/examples/week02/10/index2.html).

Notice the CSS below

```css
section {
    flex-basis: 10%;
    min-width: 200px;
    flex-grow: 1;

    ...
}
```

![image](./flex-grow.svg)

(image from https://css-tricks.com/snippets/css/a-guide-to-flexbox/)

Now resize your browser window until only one `<section>` fits on the row. Notice how the `<section>` will span the
whole width of the available space. This is because of the `flex-grow:1` property: this allows elements to grow in size
so that all elements will have the same size. You can change the value for each child.

Have a look at [example 3](./index3.html). View this example
on [github](https://nhlstenden.github.io/php-tutorial-emmen-2026/Docker/websites/examples/week02/10/index3.html).

The CSS now uses a different `flex-grow` setting (3) for the second
`<section>`. This is indicated using the `&:nth-child(2)` which is the same as `section:nth-child(2)`.

```css
  section {
    flex-basis: 10%;
    min-width: 200px;
    flex-grow: 1;

    &:nth-child(2) {
        flex-grow: 3;
    }

    ...
}

```

Notice that this `flex-grow` only holds for items **on the same line**! So, again try to resize your browser window to
show two `<section>` elements per line.

![image-flex-grow-screendump](./flex-grow-3.png)

# Managing space

You can manage how space is occupied by children. There is some terminology involved we need to understand first. Space
can be viewed horizontally (_width_) and vertically (_height_). However, this is only valid when we use `display:block`.
When using `display:flex`
we can change the direction in which items are drawn.

Therefore, we need to rethink using 'horizontal' and 'vertical'. When using flexbox we use the terms '**main axis**' and
the '**cross axis**'. The 'main axis' is the axis we defined using `flex-direction`. When assigning `row` as the
direction the 'main axis' is horizontal, and the `cross axis` is vertical.

Why is this important? Because when instructing the browser how space must be occupied, we have separate instructions
for the 'main axis' and 'cross axis'. So, their behaviour depends on how the axes are defined.

For managing 'main axis' space usage, we have the `justify-content` instruction. For managing 'cross axis' space usage
we have the `align-items` instruction.

| Flex-direction | Main axis  | Cross Axis | manage horizontal space | manage vertical space |
|----------------|------------|------------|-------------------------|-----------------------|
| row            | Horizontal | Vertical   | justify-content         | align-items           | 
| column         | Vertical   | Horizontal | align-items             | justify-content       | 

We can now slightly change the CSS properties of the parent `<article>`. See [example4](./index4.html). View this
example
on [github](https://nhlstenden.github.io/php-tutorial-emmen-2026/Docker/websites/examples/week02/10/index4.html).

```css
article {
    display: flex;
    flex-direction: row; /* also try row-reverse*/
    flex-wrap: wrap;

    justify-content: flex-start;
    align-items: center;

    ....
}
```

Notice we added `align-items` with a value of `center`. We restored the `<section>` to the values below and refresh your
screen.

```css
section {
    flex-basis: 15%;
    min-width: 300px;
}
```

Notice that

1. The tallest item determines the height of the `<article>` (displayed in `whitesmoke` color). The child elements that
   are less tall (third, fourth, fifth) are centered instead of placed at the top.
2. The `<section>` elements have different heights.

![align-items-screendump](./flex-align-items1.png)

## Align items: stretch

Maybe we want the elements to be stretched along the vertical space. In this case we can use the `align-items: stretch`.
This will determine the space usage in the 'cross axis' and fill up all available space. Look
at [example 5](./index5.html). View this example
on [github](https://nhlstenden.github.io/php-tutorial-emmen-2026/Docker/websites/examples/week02/10/index5.html).

Look at the CSS (non-important parts removed from the example below).

```css
    article {

    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

    justify-content: space-between;
    align-items: stretch;

    section {
        flex-basis: 15%;
        min-width: 300px;
        flex-grow: 1;
    }
}
```

Again, note that these rules only apply to items **on the same row**. This might lead to unwanted behaviour when a
second row is created:

![screendump-flex-align-stretch](./flex-align-stretch.png)

This problem however is not easily solved using flex-box instruction. You could set the height of the items using
`height:300px` but this kind of defeats the purpose of flex-box.

# Conclusions

Therefore we say:

> Flexbox designed as a **single dimension** layout engine: either horizontal (row) or vertical (column). Every row
> or column created is seen as a new, autonomous entity that is not aware of earlier rows or columns.

If this is not a problem, the flexbox might suit you well. Otherwise, maybe you're better off using the `display:grid`
method.

# References

* [A complete CSS flexbox layout guide](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)
* [MDN: Basic concepts of flexbox](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Flexible_box_layout/Basic_concepts)
