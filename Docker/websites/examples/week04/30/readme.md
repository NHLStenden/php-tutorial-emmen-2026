# Week 4 -  PHP -  Flex layout for cards revisited

An earlier example is revisited using loops and arrays to display cards.

Here we have 7 cards we want to display using the following rules:

* on a large screen: maximum of four cards per line
* on medium screen: maximum of two cards per line
* on small screen: 1 card per line

This way we should have enough space to show the content.

# Media queries

Have a look at the media queries. We only have to supply CSS instructions that correct 
the already loaded CSS instructions.

This means that for a medium sized screen: increase the card size to 45%. Just to make
sure we can see this media query in action we also change the background color. 

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

For small screens we could increase the width again. But instead of doing that it is easier
to let the browser render the cards as it would normally. So we reset the `display` back
to its normal value `block`. 

The maximum value is reset to `initial`. And again we change the background.

Notice that we have lost the possibility to create a gap, because this can only be used
when using `display` with a value of `grid` or `flex`. That is why we use a smart CSS-selector
'+'. This means: adjacent element (or sibling). In this case it means that if there are
two sections following each other on the same level (so not nested) we assign a margin of
10 pixels at the top. The first section does not yet get this margin so it saves space.


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


# References

* [adjacent CSS selector](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Selectors/Next-sibling_combinator)