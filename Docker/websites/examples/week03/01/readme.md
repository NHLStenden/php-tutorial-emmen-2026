# Positioning elements

Normally elements will be layout using standard solutions that block and inline elements follow.

However, sometimes you may want to position elements on a fixed position. Note that this is
a last resort! Always look to flex-box or grid-layout for putting things in the right position.

Exceptions could be:

* putting text over images
* fixing elements in place, even when scrolling

For the last case see [example 3](../03/index.html)

# Fixing positions

A position can be overruled using the `position` instruction. This is a complex property as
the result often depends on the situation and settings in the parent-element. The most often
settings are `relative` or `absolute`.

## Position: absolute

When using `position:absolute` the element is removed from normal flow and you should set
instructions for its position on the page. The element is positioned relative to its closest positioned ancestor (if
any) or to the initial containing block.

Notice: elements that have no explicit `position`-instruction are regarded as 'not positioned', 

The final position is determined by the positioning coordinate-instructions can be:

1. top
2. bottom
3. left
4. right

The first two determine the vertical position on the page. The third and fourth determine the horizontal position on
the page. Both relative and positive values are allowed. So, the top/left position would be:

```css
.someclass {
    position: absolute;
    left: 0;
    top: 0;
}
```

Notice that when a value is zero, no unit must be specified.

The bottom/right corner position would be:

```css
.someclass {
    position: absolute;
    right: 0;
    bottom: 0;
}
```

When using `bottom` and `right` instructions, this switches the used box-coordinates from the (top,left) corner to the
(bottom, right) corner. So, to put an element with its bottom-right corner in the bottom-right of the page, no
calculation
is needed and simply zero for both instruction (right & bottom) can be used.

## Position : relative

When using the `position:relative` the element is positioned according to the normal flow of the document, and then
offset relative to itself based on the values of top, right, bottom, and left. The offset does not affect the position 
of any other elements.

# The example

In the example we follow the structure of main/article and multiple sections. The two sections use a variety of settings
as explained above. For the example to work, we must also instruct the browser to create a fixed height and width for
the parent (the `article`). Because both `section` elements are removed from 'normal flow' the browser will have trouble
determining exactly how much space the `article` should occupy. Often this results in elements that are too small.

To make the `article` element clearly visible, it is set with a remarkable background color (bisque).

```css
article {
    position: relative;
    height: 800px;
    width: calc(100vw - 20px);
    background-color: bisque;
}
```

Notice that the `width` instruction is different from earlier examples. In this case we use calculation. In normal
language this would read as 'calculate the width as 100% of the browsers width (`100vw`) but decrease it with 20
pixels'. We could also use this for the height. For instance: `height: calc(100vh - 20px)`.

The units 'vh' and 'vw' are special values.

* vh: the viewport height
* vw: the viewport width

Together with the powerfull `calc` instruction this can be an great help in setting up your layout. For more information
see the references below.

# References

* [MDN calc](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Values/calc)
* [MDN values and units](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Values_and_units)
