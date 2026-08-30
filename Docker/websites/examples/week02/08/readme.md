#   Week 2 - HTML - Creating a grid using classes to assign rows and columns to children


Sometimes HTML structure is more complex or no semantic HTML can be uniquely designated for assigning rows and columns. 
Then you will have to use classes like in this example. 

Look at the (shortened code below).

```html
<main>
    <h1>Creating a grid using classes to assign rows and columns to children</h1>
    <article>
        <header class="rows-1 cols-3"><h2>Header</h2></header>
        <nav class="rows-2">Navigation</nav>
        <section class="rows-2 cols-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequuntur doloribus enim error
                hic, ipsum iure laudantium magnam neque nihil non numquam officia perspiciatis quis quod quos unde vero
                voluptatibus?
            </p>
        </section>
        <aside class="rows-1 cols-1">Ads</aside>
        <div class="card rows-1 cols-1">copyright</div>
        <footer class="rows-1  cols-3">Footer</footer>
    </article>
</main>
```

Notice that we have added classes to indicate the number of rows and columns. For instance for the `<header>`. 
* `rows-1` to indicate this element should span 1 row
* `cols-3` to indicate this element span 3 columns.

The relates CSS classes are defined as below:

```css
.cols-1 { grid-column: span 1;}
.cols-2 { grid-column: span 2;}
.cols-3 { grid-column: span 3;}

.rows-1 {grid-row:span 1;}
.rows-2 {grid-row:span 2;}
.rows-3 {grid-row:span 3;}
```

In order for this to work we have to setup the parent correctly (see the .css-file for the complete CSSik d)

```css
article {
    width: calc(100vw - 30px);
    height: 50vh;
    display: grid;
    
    grid-template-rows:1fr 5fr 1fr 1fr;
    grid-template-columns:150px 1fr 150px;
}
```

The most important elements are:

* a width and height are set to make sure the grid fits our needs
* `display:grid` to enable the grid
* There are 4 rows defined, as well as 3 columns. 
* 