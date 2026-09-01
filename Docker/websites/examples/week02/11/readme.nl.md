# Week 2 - HTML - Flexibele rasterindeling met div

In deze variant van voorbeeld 6 (rasterindeling) gebruiken we `<div>`-elementen om de HTML op te splitsen in
delen die beter aansluiten bij de gewenste lay-out.

Eerst moeten we de pagina opsplitsen in een ‘koptekst’ en ‘de rest’. Vervolgens kunnen we ‘de rest’ bekijken
en deze in twee delen verdelen:
 
* de zijbalk aan de linkerkant
* de eigenlijke inhoud aan de rechterkant

Dit betekent dat we de browser moeten instrueren om de standaard *verticale* lay-out niet langer te gebruiken, en
een horizontale lay-out te starten. Dit doen we met behulp van de `display:flex` CSS-instructie.

## Voordelen

* de `<aside>` en `<header>` staan nu weer op hun ‘semantisch juiste plaats’.

## Nadelen

* De extra `<div>`-elementen maken de HTML onnodig ingewikkeld.

# Conclusie

Voor dit soort lay-outs heeft het gebruik van een `display: grid` veel voordelen. In het volgende voorbeeld
zullen we een andere pagina bekijken die wel baat heeft bij de `display: flex`.

