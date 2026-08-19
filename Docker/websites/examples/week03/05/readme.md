# CSS Functions

We use a well known structure for our HTML: an article with several `<section>` elements containing a header and some 
paragraphs of text.

```html
<article>
        <header>
            <h1>Resize the browser window to notice the effects.</h1>
        </header>
        <section>
            <header><h2>Width and Height calculations</h2></header>
            <p>....</p>
        </section>
        <section>
            <header><h2>Font size clamp</h2></header>
            <p>....</p>
        </section>
        <section>
            <header><h2>Transformations</h2></header>
            <p>....</p>
        </section>
    </article>
```



## Calculations to fit height and width

In this case our rules are:
> Make sure the first section has a width of at least 200 pixels but no more than 50% of the viewport width.
> Make sure that the height is a maximum of 10 em-dashes (`10em`) but at least 50% of the vertical viewport height.

This last rule is not often used by the way. 

This leads to the following CSS instructions.

```css
article {
    section:first-of-type {
        width: max(200px, 50vw);
        height: min(10em, 50vh);
        overflow: auto;
        border: 1px solid darkblue;
    }
}
```

First the pseudo class `:first-of-type` is used to select the first `<section>` in the `<article>`.
Notice how the `width` and `height` are calculated. The usage of `min` and `max` seems counterintuitive in light of 
the rules.
>Make sure the first section has a width of at least 200 pixels but no more than 50% of the viewport width.

# Using a color mixer function.

Sometimes you might want to change the colors of your company's style just a bit. This could be done using a color mixer. 
This take a few parameters about how to mix the color with another color. See the link in the HTML for a demonstration.

```css
article {
    section:nth-of-type(3) {
        width: 30em;

        p:last-of-type {
            padding: 10px;
            color: color-mix(in oklab, black 50%, red 100%);
            border-left: 10px solid rgb(80 80 80);
        }
        a:visited:hover {
            text-decoration-color: red;
            color:Green;
        }
    }
}
```

Note: there is also an animation with a `transform` instruction and animated color mixing. Have a try by enabling the 
CSS in the comments and play with the values yourself!

Note the here is an example of a double *pseudo class*: `:visited:hover`. This means 
> when any link within the 3rd `<section>` was ever visited by the user, *and* the user hovers their mousepointer above
> such a visited link, then apply a different style.

