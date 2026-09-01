# Week 5 - PHP - Geavanceerde formulierelementen

Naast het invoeren van tekst zijn er nog meer HTML-formulierelementen om informatie in een formulier in te voeren. Denk bijvoorbeeld aan het selecteren van items
uit een lijst.

De voorbeelden in deze map zijn afkomstig van de MDN-website (zie de referenties aan het einde).

## Meerdere selecties met behulp van optiegroepen 

In de standaardvorm laat het `<select>` de gebruiker één item selecteren. Wanneer echter het attribuut `multiple` wordt opgegeven,
verandert dit
1) hoe de lijst wordt weergegeven: niet langer als een vervolgkeuzelijst, maar als een ‘normale’ lijst
2) de gebruiker kan meer dan één optie selecteren (met behulp van de Ctrl-toets op het toetsenbord)

Zie het onderstaande voorbeeld.

```html
<select id="multi" name="multi[]" multiple size="10">
    <optgroup label="fruits">
        <option>Banana</option>
        <option selected>Cherry</option>
        <option>Lemon</option>
    </optgroup>
    <optgroup label="vegetables">
        <option>Carrot</option>
        <option>Eggplant</option>
        <option>Potato</option>
    </optgroup>
</select>
```

**Let op** de `name=multi[]`. Normaal gesproken zou de `[]` moeten worden weggelaten, maar bij het verzenden van de informatie naar een PHP-server 
moet de `[]` aanwezig zijn, anders verwijdert PHP alle items uit de `$_POST` behalve het laatst geselecteerde.

Het PHP-bestand dat de formuliergegevens verwerkt, zal de `$_POST` eenvoudigweg op de webpagina weergeven.

# Referenties

* [MDN: andere formulierbesturingselementen](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms/Other_form_controls)
* [PHP: omgaan met geüploade bestanden](https://www.php.net/manual/en/features.file-upload.post-method.php)
* [PHP: omgaan met arrays uit formulieren](https://www.php.net/manual/en/faq.html.php#faq.html.arrays)