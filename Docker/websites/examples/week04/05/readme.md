# Week 4 - HTML - Complex menus using CSS

In this example we use modern CSS to display menus and submenus using flexbox and css anchors.

This example was created using ChatGPT!
> Use HTML and CSS to create a menu bar with main and submenus without JavaScript. Use the new concept of CSS anchors to
> position the submenus. The main menu should be horizontal, and the submenu should be vertical.

Core principles are the positioning of the submenus over the main menu. This is done using CSS variables, positioning
`absolute` and `anchor-name`. Together with `position-anchor: var(--submenu-anchor);` we can position the submenu
in the vicinity of the main menu. Using some margins the submenu is positioned properly.
