# Advanced form controls

The examples in this folder are taken from the MDN site (see references at the end).

## Multiple select using option groups 

In its normal form the `<select>` lets the user select one item. However, when the attribute `multiple` is supplied
this changes
1) how the list is displayed: no longer as a dropdown list but as a 'normal' list
2) the user is able to select more than one option (using the control-key on the keyboard)

See the example below.

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

**Note** the `name=multi[]`. Normally the `[]` should be omitted, but when sending the information to a PHP-server the `[]` 
must be present otherwise PHP will drop all but the last selected item from the `$_POST`.


# References

* [MDN other form controls](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms/Other_form_controls)
* [PHP Handling uploaded files](https://www.php.net/manual/en/features.file-upload.post-method.php)
* [PHP handling arrays from forms](https://www.php.net/manual/en/faq.html.php#faq.html.arrays)