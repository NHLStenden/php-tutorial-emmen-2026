# Week 4 - HTML - Menu met verborgen submenu’s

In dit voorbeeld gaan we een hoofdmenu maken met verborgen submenu-items. Met behulp van CSS `:hover` zullen we 
de menu’s weergeven wanneer de muisaanwijzer over het hoofdmenu beweegt. Dit wordt een ‘harmonica-stijl’ genoemd. 

We gebruiken de pseudoklasse `:hover` om deze actie te activeren. Let op: `:hover` moet op het `<ul>`-element staan om het
onderliggende `<ul>`-element voor het submenu te activeren. Met de muis over het `<a>`-element gaan werkt niet: dit is niet het bovenliggende element van het submenu!

Het werkt wel, maar het is een beetje schokkerig: afhankelijk van de muisbewegingen opent en sluit het menu submenu’s snel.  

```css
  nav > ul > li > ul {
    display:none;
}
```

Op deze manier kunnen we elk `<ul>`-element verbergen dat zich binnen een ander `<li><ul>....</ul></li>`-element bevindt. Door een 
`:hover`-gebeurtenis op het `<li>`-element te detecteren, zetten we de `display` terug naar `block`: 

```css
  nav > ul >li:hover > ul {
    display: block;
}
```

Merk op hoe snel dit ingewikkeld wordt, omdat HTML geen standaardmanier kent om geneste menu’s weer te geven.
