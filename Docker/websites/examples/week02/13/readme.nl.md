# Week 2 - HTML - Flex-lay-out voor kaarten 

Met behulp van @media-query's zorgen we ervoor dat een flex-lay-out ook op kleinere schermen goed wordt weergegeven.

We hebben hier 7 kaarten die we volgens de volgende regels willen weergeven:

* op een groot scherm: maximaal vier kaarten per regel
* op een middelgroot scherm: maximaal twee kaarten per regel
* op een klein scherm: 1 kaart per regel

Op deze manier zouden we genoeg ruimte moeten hebben om de inhoud weer te geven.

# Mediaquery's

Bekijk de mediaquery's eens. We hoeven alleen maar CSS-instructies op te geven die 
de reeds geladen CSS-instructies aanpassen.

Dit betekent dat we voor een middelgroot scherm de kaartgrootte moeten vergroten tot 45%. Om er zeker van te zijn
dat we deze mediaquery in actie kunnen zien, veranderen we ook de achtergrondkleur. 

```css

@media (max-width: 768px) {
    main {
        article {
            section {
                flex-basis: 45%;
                max-width: 45%;
                background-color: hotpink;
            }
        }
    }
}

```

Voor kleine schermen zouden we de breedte opnieuw kunnen vergroten. Maar in plaats daarvan is het eenvoudiger
om de browser de kaarten te laten weergeven zoals gewoonlijk. Daarom zetten we de `display` terug
naar de normale waarde `block`. 

De maximale waarde wordt teruggezet naar `initial`. En opnieuw passen we de achtergrond aan.

Merk op dat we de mogelijkheid om een tussenruimte te creëren zijn kwijtgeraakt, omdat dit alleen mogelijk is
bij gebruik van `display` met een waarde van `grid` of `flex`. Daarom gebruiken we een slimme CSS-selector
'+'. Dit betekent: aangrenzend element (of zusterelement). In dit geval betekent dit dat als er
twee secties op hetzelfde niveau achter elkaar staan (dus niet genest), we een marge van
10 pixels aan de bovenkant toekennen. De eerste sectie krijgt deze marge nog niet, waardoor er ruimte wordt bespaard.


 ```css

@media (max-width: 576px) {
    main {
        article {
            display: block;
            section {
                max-width: initial;
                background-color:aquamarine;
            }

            section + section {
                margin-top: 10px;
            }
        }
    }
}
```


# Referenties

* [aangrenzende CSS-selector](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Selectors/Next-sibling_combinator)