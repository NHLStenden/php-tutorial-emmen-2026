#   Week 2 - HTML - Grid areas

In this example we will be creating a grid using grid-areas and semantic elements to assign rows and columns to children.

Grid areas greatly simplify the design of areas and how the should be placed upon a grid. Instead of puzzling with
column start, end or spanning we define areas using readable names. Notice the CSS below:


```css
article {
    grid-template-areas:
            "head head head"
            "menu content ads"
            "foot foot foot";
}
```

