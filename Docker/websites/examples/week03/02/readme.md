# Positioning text over other elements

In this example two sections are create with both an image with text superimposed upon it. This is done using two
different mechanisms:

* absolute positioning
* using a background image

# Exact positioning using absolute & relative

```html
<section>
    <header><h2>Absolute 1</h2></header>
    <img class="banner" src="images/mansy-graphics-GKXuFCd2fYo-unsplash.jpg">
</section>
```
The first section (using the _selector_ `&:first-of-type` ) uses absolute positioning. THe header and image are ordered 
in 'normal flow'. However, when applying the `display:absolute` they will be removed and the browser looks for a parent
element that has an explicit positioning instruction. Take a look at the CSS below. 

```css
section {
    position: relative;

    &:first-of-type {
        header {
            position: relative;
            top: 0;
            left: 0;
            z-index: 999;
        }

        img {
            position: absolute;
            top: 0;
            left: 0;
        }
    }
}

```
Because we need the header and image to be positioned, we instruct the `section` to have a position of `relative`. This
allowed us to layout the image using 'absolute' positioning 'relative to the `section`'. So, instead of `top:0` being
the top of the web page, `top:0` means the top of the section.

Because the `<header>` comes before `img` in the HTML, the image will lie 'on top of' the `header` and be invisible as 
the image is much larger. To fix this, we explicitly bring the `header` to the top of the 'stack'. The value of 
`z-index` is a bit arbitrary, but usually is chosen much to high to be shure. Possibly, in our example the z-index could
be a value of 10. You could experiment yourself to discover the exact size of 'the stack', add one and set this value
to the `z-index`.

One other problem is the problem of the 'normal text': because the `header` and `image` are taken out of 'normal flow' 
the container is too small. The normal text will therefore also be placed under the image, and be invisible. This can be
solved by also giving the `<p>` element a fixed position. 

And finally we need to set the size of the `<section>` because the browser cannot figure out what the height and width
of the children are. So the complete CSS for the first `section` is shown below. The `margin` instructions are used to
position the section using margins, so you can observe that the positioning of the header and image is relative to the
box of the `<section>` instead of the page.

```css
 &:first-of-type {
    height: 400px;
    width: 30em;
    margin-left: 200px;
    margin-top: 200px;

    header {
        position: relative;
        top: 40px;
        left: 0;
        text-align: center;
        z-index: 999;
    }

    img {
        position: absolute;
        top: 0;
        left: 0;
        max-height: 200px;
    }

    p {
        position: relative;
        top: 200px;

    }
}
```


# Using a background image

Instead of putting the image in the HTML, there is also the option of setting up the image from CSS. This is done using
the `background-image` properties. This consists of a few properties to get things right:
1. setup the HTML-element to be large enough to contain the image
2. add a `background-image` using the value `url(...)` to point at the image
3. set the `backround-repeat` value to the correct value (in this case: do not repeat)
4. set the `background-size` to the right value. 
5. set the `background-position-y` to the right value (in this case zero)

The `background-size` instruction uses the value `contain`. This means it will try to fit as best as possible in the
parent container without deforming or cropping. The big advantage is that we only need to set the size of the `<header>`
and the image will try to fit. Usually, this means some you need to have some understanding of the _aspect-ratio_ of the
image used. 

In the example below this all comes together. 

```css

&:nth-of-type(2) {
 
    header {
        background-image: url("./images/website-banner.png");
        background-repeat: no-repeat;
        background-size: contain;
        background-position-y: 0;

        height: 300px;

        h2 {
            text-align: center;
            position: relative;
            top: 100px;
            font-size: 3rem;
            margin: 0;
            padding: 0;
        }
    }
}
```

# References

* [MDN Understanding Z-index](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Positioned_layout/Understanding_z-index)
* [MDN background-image-size](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/background-size)