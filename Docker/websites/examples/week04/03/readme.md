# Week 4 - HTML - Menu with hidden sub menus

In this example we will be creating a main menu with hidden sub menu items. Using CSS `:hover` we will be showing 
the menus when the main menu is being hovered. This is called a harmonica style. 

We use the `:hover` pseude class to take action. Notice that `:hover` must be on the `<ul>` in order to enable the
underlying `<ul>` for the submenu. Hovering over the `<a>` element will not work: it is not the parent of the submenu!

It works, but it is a bit jittery: depending on the mouse movements, the menu opens and closes sub menus quickly.  

```css
  nav > ul > li > ul {
    display:none;
}
```

This way we can hide any `<ul>` element that is contained within another `<li><ul>....</ul></li>`. By detecting a 
`:hover` event on the `<li>` element, we set the `display` back to `block`: 

```css
  nav > ul >li:hover > ul {
    display: block;
}
```

Notice how quickly this becomes complicated because HTML has no standard way of presenting nested menus.
