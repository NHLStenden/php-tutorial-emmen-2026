# Printing a HTML webpage

Printing a web page can be done using CSS instructions that are valid only for prin
ting. To detect whether the browser
is trying to print (or preview a printout) can be done using **Media Queries**. When using these instructions we can
eliminate all kinds of clutter and elements that we do not want to appear on the printout like

* menus
* ads
* headers
* footers

Furthermore, a printout has no scrollbar so the 'real content' that might be visible using a scrollbar should be made
available to the printout without a scrollbar. Have a look at the examples below.

In the first image we see the "normal view" when a user is using the browser. In the second image we see the browser in
"printing modus" (we'll have a look how to get the browser in printing modus a bit further down).

Notice in the first image the 5 elements / areas:

1. the header: "Welcome to my website!"
2. the menu on the left: an `<aside>`-element with links to other pages
3. the footer: a `<footer>`-element containing the copyright
4. another sidebar containing e.g. ads
5. the real content in the center containing 'lorem ipsum' text.

Notice that the content in the center contains a scrollbar. If we were to make a printout (or export to pdf) without
taking special measures (using different instructions for printing), we would only see the currently visible part of the
content appear on the printout.

Example: normal view (see http://localhost/examples/week06/01)
![Screendump - normal view.png](images/Screendump%20-%20normal%20view.png)

Notice how this would look when not taking steps to support proper printing in the screendump below. Here we see that a
scrollbar is present within the page, just like on the website. All the other elements are still visible as well, but
probably are of no use to a user. Beware, we are making some assumptions here! This is not some golden rule that only
the content of the page should be visible to the user!

![Google Chrome - print dialog preview without mediaqueries.png](images/Google%20Chrome%20-%20print%20dialog%20preview%20without%20mediaqueries.png)

So we assume that when the user wants to print a hardcopy or export to PDF, the content at the center is the most
important information. We assume that the other four elements surrounding the content are of no real use and we should
eleminate them on the printout.

So, instead of designing a complete new page for the printout, we instruct the browser to react to the signal it is
rendering a page for a hardcopy or export it to PDF. This signal is then captured within the CSS using the
`@media print`
query. The browser then receives additional instructions to render the page differently. These instructions ofter
override the 'normal view' instructions. The result in this example is shown below. First the browser when set to
'printing view', second image is the printout popup dialog containing a preview.

Example: printing view

![Screendump - printing view.png](images/Screendump%20-%20printing%20view.png)

Print dialog popup showing a preview.

![Google Chrome - Print Dialog preview with mediaqueries.png](images/Google%20Chrome%20-%20Print%20Dialog%20preview%20with%20mediaqueries.png)

Notice that all the elements we mark as 'unnecessary' are removed and the scrollbar is on the page-level instead of the
element level. When looking at the Print Dialog and the preview, we can also see that the scrollbar is enable besides
the page, instead of directly on it. Also, there are multiple pages now as we can see on the image below.

![Google Chrome - Print Dialog preview with mediaqueries 2.png](images/Google%20Chrome%20-%20Print%20Dialog%20preview%20with%20mediaqueries%202.png)

# Setting up the @media query for printing

Setting up the CSS instructions to react to "Rendering a page for printing" is easily done using the instructions below:

```css
@media print {
    ..... your css goes here ....
}

```

The basic rule is that you must use the same CSS selectors when overriding the instructions for 'normal view'. More
specific: the **specificity** of the selector must be at the same level. There is a great video of Colin Powell on this
topic if you want to really understand this concept. See the references below.

The CSS and HTML below gives an example. In the example at http://localhost/examples/week06/02 actually contains more
text, but for brevity it is shortened here. Imagine a lot of text in not enough space.

```html

<main>
    <article>
        <section class="content">
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aut
                autem commodi error est exercitationem explicabo, id magnam, nihil nostrum nulla
                officiis optio quidem recusandae repellendus tenetur totam voluptatem!</span>
                <span>Cupiditate, debitis dolorum impedit in iure praesentium quibusdam rerum
                    suscipit voluptas. Accusantium adipisci natus repellendus tenetur. Aliquid
                    debitis doloribus ducimus, laborum minima neque nobis omnis provident quisquam
                    tempore tenetur, ut!</span>
            </p>
        </section>
    </article>
</main>
```

```css

article {
    width: 100vw;
    height: 100vh;
}

@media print {
    article {
        width: auto;
        height: auto;
    }
}

```

This means:

> When rendering a page for normal viewing, make the `<article>` element exactly fit the whole page. But, when rendering
> a page for printing (or PDF export), make the width and height be determined automatically using `auto`.

Now, lets expand some more with the example below. The HTML is the same, but now we put the section in a smaller space.
The *selector* is `article section`: this means that the section must be a child-element of an article, not just any
section.

```css
 article {
    width: 100vw;
    height: 100vh;
}

article section {
    width: 50%;
    height: 50%;
}

@media print {
    article {
        width: auto;
        height: auto;
    }

    section {
        width: auto;
        height: auto;
    }
}

```

If you would display this you'd see something like below. I've added some colors to see the different areas:

* The article is `darkgoldenrod`
* The section is `cadetblue`

![02 - Example 1.png](images/02%20-%20Example%201.png)

When opening the Print dialog we see

![02 - Example 2.png](images/02%20-%20Example%202.png)

That seems strange: the scrollbar is still on the section, instead of the page. However, we set the `section` sizes to
`auto` for `width` and `height`. So what went wrong here?

In this case the 'specificity' of the selector `section` in the `@media print` is not the same as the one outside the
`@media print`. As mentioned before, the `section` must be within a `<article>`. That is more _specific_ than the 
`section` selector on it own, as it means 'a section anywhere'. 

Have a look at [example 03](http://localhost/week06/03) where this is corrected. Now the selector is the same for printing
as normal rendering: `article section`.

```css
@media print {
    article section {
        width: auto;
        height: auto;
    }
}
```

Now in the print preview we correctly see the scrollbar is moved to the page level. 

![02 - Example 3.png](images/02%20-%20Example%203.png)

# Putting the browser in 'printing modus'

It can be difficult to setup your CSS with `@media` queries, refresh the page and open the printing dialog to preview
the results. Fortunately the browser builders acknowledge these difficulties and helped us developers. There is a way to
make the browser trigger the `@media print` CSS by changing a setting in the browser.

In order to find this setting we need to open the 'Developer tools'. This can be done using a number of ways depending
on the browser being used. Often, a 'right mouse click' on the website will show a menu, containing an item 'Inspect' or
'inspect element'. Or via the menu there is an option to show the developer tools.

What we need after opening the developer tools, usually is the Console. In the top menubar press 'Console' to open the 
console tab on the bottom half of the screen (usually). 

![Google Chrome - developer tools overview.png](images/Google%20Chrome%20-%20developer%20tools%20overview.png)

Then, in the console we enable the Rendering tab by clicking on the three stacked dots next to the 'Console' in the
lower half of the screen.

![Google Chrome Console.png](images/Google%20Chrome%20Console.png)

THen look for 'Emulate CSS media type' and select 'print' from the list. Don't forget to restore for normal rendering
later!

![Google Chrome - Emulate CSS Media.png](images/Google%20Chrome%20-%20Emulate%20CSS%20Media.png)

# References

* [MDN on specificity in CSS](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Cascade/Specificity)
* [Colin Powell on Specificity in CSS](https://www.youtube.com/watch?v=LUDkXMXf3P8)