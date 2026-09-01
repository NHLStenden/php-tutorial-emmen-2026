#   Week 2 - HTML - Een raster maken met behulp van klassen om rijen en kolommen aan onderliggende elementen toe te wijzen


Soms is de HTML-structuur complexer of is er geen semantische HTML die eenduidig kan worden gebruikt voor het toewijzen van rijen en kolommen. 
In dat geval moet je klassen gebruiken, zoals in dit voorbeeld. 

Bekijk de (ingekorte code hieronder).

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

Merk op dat we klassen hebben toegevoegd om het aantal rijen en kolommen aan te geven. Bijvoorbeeld voor de `<header>`. 
* `rows-1` om aan te geven dat dit element 1 rij moet beslaan
* `cols-3` om aan te geven dat dit element 3 kolommen beslaat.

De bijbehorende CSS-klassen zijn als volgt gedefinieerd:

```css
.cols-1 { grid-column: span 1;}
.cols-2 { grid-column: span 2;}
.cols-3 { grid-column: span 3;}

.rows-1 {grid-row:span 1;}
.rows-2 {grid-row:span 2;}
.rows-3 {grid-row:span 3;}
```

Om dit te laten werken, moeten we het bovenliggende element correct instellen (zie het .css-bestand voor de volledige CSS-code)

```css
article {
    width: calc(100vw - 30px);
    height: 50vh;
    display: grid;
    
    grid-template-rows:1fr 5fr 1fr 1fr;
    grid-template-columns:150px 1fr 150px;
}
```

De belangrijkste elementen zijn:

* er worden een breedte en hoogte ingesteld om ervoor te zorgen dat het raster aan onze behoeften voldoet
* `display:grid` om het raster in te schakelen
* er zijn 4 rijen gedefinieerd, evenals 3 kolommen. 
* 