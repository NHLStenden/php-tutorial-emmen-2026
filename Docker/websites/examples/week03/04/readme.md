# Week 3 - Using pseudo classes

CSS uses 'selectors' to link HTML to CSS-instructions

Examples

* `p` = any <p> element anywhere
* `div.header` = element <div> with a class 'header'
* `section p` = a <p> anywhere element within a `<section>`
* `section > p` = a <p> element as a direct child of a `<section>`
* `button + button` = when `<button>` has a sibling  `<button>`

examples:

```html
<p>.....</p>

<div class="header">....</div>

<section>
    <p>.....</p>
    <div>
        <div>
            <p>.....</p>
        </div>
    </div>
</section>

<section>
    <p>.........</p>
</section>

<div>
    <button>save</button>
    <button>cancel</button>
</div>
```

Sometimes you need more

* "Only style the second `<P>` element"
* "Only style every 'even' `<tr>` (line) in a `<table>` to create zebra stripes"
* "Only style when the mouse is hovering above a `<div>`"

Have a look at the example HTML code. It is shortened for brevity here.

```html

<article>
    <section>
        <header>
            <h1>Hovering</h1>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid aspernatur atque aut,
            dignissimos exercitationem id incidunt laudantium maiores molestiae neque non, odio optio placeat
            provident, quidem quis similique.</p>
    </section>
    <section>
        <header>
            <h1>Striped table</h1>
        </header>
        <table>
            <tr>
                <td>....</td>
                <td>....</td>
                <td>....</td>
                <td>....</td>
            </tr>
        </table>
    </section>
    <section>
        <header>
            <h1>Weird transformation</h1>
        </header>
        <p>Just some text. Hover me!</p>
    </section>
</article>
```

## First of type and hovering

The CSS for the first section:

```css
    section:first-of-type {
    width: 30em;
    border: 1px solid black;

    p:hover {
        background-color: darkgray;
        color: white;
        cursor: pointer;
    }
}
```

Notice the `:first-of-type` pseudo class. MDN says about this pseudo class:
> The :first-of-type CSS pseudo-class represents the first element of its type (tag name) among a group of sibling
> elements

In our situation this enables us to select the first section within the `<article>` without having to set a class on the
`<section>`.

Also notice the `:hover` pseudo class. Again the definition of MDN:
> The :hover CSS pseudo-class matches an element when a user interacts with it using a pointing device. The pseudo-class
> is generally triggered when the user moves the cursor (mouse pointer) over an element without pressing the mouse
> button.

This enables us to highlight a `<p>` element. In this case we do three things:

1. the background color is changed to `darkgray`
2. the text color is changed to white to make it better readable
3. we change the mousepointer into a `pointer`. The 'pointer' is the cursor you would normally when hovering above a
   link.

## Striped lines in a table

The CSS for the striped table is shown below (a few bonus styling options are in the real CSS, have a look!).

```css
section:nth-of-type(2) {

    table {
        font-size: 10pt;
        border-collapse: collapse;

        tr td {
            background-color: whitesmoke;
        }

        tr:nth-child(odd) td {
            background-color: lightgray;
        }
    }
}
```

Notice again the `:nth-of-type(2)`. This means 
> "look for multiple `<section>` sibling elements and pick the second one".

So, in our situation this will select the second section having the `<table>`.

We set the `font-size` to `10pt` and make the borders collapse. Collapsing the borders removes the gap between rows and
columns. 

Then we set the background color to `whitesmoke` for each `<td>` that is a part of a row (`<tr>`). 

The next instruction `tr:nth-child(odd) td` means:
> "look for any table row but only select the rownumbers that are odd (1,3,5,7,9,...) and then style the `<td>` elements
> that are embedded in that row"

This enables us to style the first, third, fifth (etcetera) row with a different color, creating a striped table (or 
zebra striped). This is often used instead of putting a border around all elements. See the image below for the effect.

![screendump-table.png](images/screendump-table.png)

## Nesting :pseudo classes

When using nested CSS you might run into the situation that you need to add a pseudo class to the scope you are currently
in. In the third section this is the case. We first use the `:last-of-type` pseude class to select the last section
in our HTML and style the `border` and `background-color`.


```css
article {
    section:last-of-type {
        border: 1px solid black;
        background-color: whitesmoke;

        &:hover {
            p {
                background-color: #005aa7;
            }
        }
    }
}
```


But we also want to be able to use a `:hover` effect to **the same section only**. Instead of opening a whole new scope
we can use the `&`-character. This means:

> Combine all the selectors and pseudo-classes already defined "above me".

So in this case the `&` is equal to `article section:last-of-type`. 

Notice there is *no space* between the `&` and the `:hover` pseudo class. This is an important requirement. Otherwise
you would get this:

```css
article section:last-of-type :hover {
   ....
}
```

Which is different! Now this means: 
> select an article and the last section within it. Then apply styling to **any element where the mouse hovers over that
> element.

But we need:
> select an article and the last section within it. Then apply styling to that section if the mouse hovers over that
> section.

That is why we need to eliminate the space. This also demonstrates that having multiple pseudo classes is allowed. 

```css
article section:last-of-type:hover {
   ....
}
```

So, now we understand that the previous CSS is exactly the same as

```css

article section:last-of-type {
   border: 1px solid black;
   background-color: whitesmoke;
}

article  section:last-of-type:hover p {
   background-color: #005aa7;
}
```

Notice that in the real HTML and CSS I also applied an anmination for demonstration purposes. THe CSS above is also
contained in the CSS file, but surrounded by comments (/** .... */). 