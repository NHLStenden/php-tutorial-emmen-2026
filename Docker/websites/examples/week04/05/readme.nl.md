# Week 4 - HTML - Complexe menu's met CSS

In dit voorbeeld gebruiken we moderne CSS om menu's en submenu's weer te geven met behulp van flexbox en CSS-ankers.

Dit voorbeeld is gemaakt met ChatGPT!
> Gebruik HTML en CSS om een menubalk met hoofd- en submenu’s te maken zonder JavaScript. Gebruik het nieuwe concept van CSS-ankers om
> de submenu’s te positioneren. Het hoofdmenu moet horizontaal zijn en het submenu verticaal.

Het belangrijkste uitgangspunt is de positionering van de submenu's boven het hoofdmenu. Dit wordt gedaan met behulp van CSS-variabelen, namelijk
`absolute` en `anchor-name`. Samen met `position-anchor: var(--submenu-anchor);` kunnen we het submenu
in de buurt van het hoofdmenu positioneren. Door enkele marges toe te passen, wordt het submenu correct gepositioneerd.
