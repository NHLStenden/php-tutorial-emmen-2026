#   Week 2 - HTML - Grid-gebieden

In dit voorbeeld maken we een raster met behulp van grid-areas en semantische elementen om rijen en kolommen aan onderliggende elementen toe te wijzen.

Rastergebieden vereenvoudigen het ontwerpen van gebieden en de manier waarop deze in een raster moeten worden geplaatst aanzienlijk. In plaats van te worstelen met
column start, end of spanning, definiëren we gebieden met behulp van begrijpelijke namen. Bekijk de onderstaande CSS eens:


```css
article {
    grid-template-areas:
            "head head head"
            "menu content ads"
            "foot foot foot";
}
```

