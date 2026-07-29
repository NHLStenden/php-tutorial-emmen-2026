# Advanced form controls

The examples in this folder are taken from the MDN site (see references at the end).

## Multiple select using option groups 

In its normal form the `<select>` lets the user select one item. However, when 

```html
<select id="multi" name="multi" multiple size="10">
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

# References

* [MDN other form controls](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms/Other_form_controls)
* [PHP Handling uploaded files](https://www.php.net/manual/en/features.file-upload.post-method.php)