# Forms

Forms are meant to send information from the browser to the server. The user fills out a form and sends the information
to the server for processing. The server will formulate a response using a HTTP Status code and results like HTML, CSS,
Images,...

In PHP the information is collected in a `super global` variable named `$_POST` when using the `method="post"`. This is
an associative array that can be used to validate and further processing.

## The basic form

The most basic form is an empty form, with no form-controls. A `<form>` needs at

```html

<form action="process.php" method="post">
</form> 
```

# Using labels

A label is used to indicate to the user what is to be entered in the given `input`. But it also aids in easier selection
of the given input-control: when clicking on a label the user can immediately start entering text.

To link a `<label>` to an `<input>` (or any other type form control) you need to reference the `id` attribute in the
`<label>` as shown below.

```html
<label for="field01">Normal text</label>
<input name="field01" id="field01">
```

# Text Inputs

## Normal text

When you want the user to enter 'just normal text', you can add the attribute `type="text"`. This is also the default.

The `placeholder` attribute shows a hint on what text to enter. In conjuction with the `<label>` this should help the
user knowing what valid text is.

In this example the `size` attribute indicates that the size on the screen is 20 characters. The `minlength` and
`maxlength` attributes indicate the minimum and maximum text length allowed.

```html

<input type="text"
       placeholder="Type some text"
       required
       size="20"
       minlength="1" maxlength="10"
       name="field01" id="field01"><br>
```

## An e-mail address

```html    
<label for="field02">E-mail address</label>
<input type="email" name="field02" id="field02">

```

## Telephone number

```html
<label for="field03">Telephone number</label>
<input type="tel"
       placeholder="Enter a valid phonenumber"
       name="field03"
       id="field03"><br>
```

## A date, not including time

```html
<label for="field04">Date</label>
<input type="date"
       min="2026-01-01"
       max="2026-12-31"
       name="field04" id="field04"><br>
```

## A year and month

```html
<label for="field05">Month</label>
<input type="month"
       required
       min="2026-01-01"
       max="2026-12-31"
       name="field05" id="field05"><br>
```

## A week in a year

```html
<label for="field06">Week</label>
<input type="week"
       min="2026-01-01"
       max="2026-12-31"
       name="field06" id="field06"><br>
```

## Time

```html
<label for="field07">Time</label>
<input type="time"
       min="08:00"
       max="18:00"
       name="field07" id="field07"><br>
```

## A number within a range using a slider

If the exact number the user enters is not really important, then a range slider might be useful. The range slider is
displayed as a progress bar with a knob to change the value. See the image below.

![slider.png](images/slider.png)

In the example below we set an allowed range using the `min` and `max` attributes. The `step` will make sure that the
value can only be increased or decreased by the given amount (10 in hits case). This also enforces that the value must
be multiple of ten!  Because the minimal value is zero (0) only values 0,10,20,30 etcetera are allowed.

```html
<label for="field08">Range</label>
<input type="range"
       min="0"
       max="100"
       step="10"
       name="field08" id="field08"><br>
```

The disadvantage is that the user gets no feedback on the exact value!

## A normal number

```html
<label for="field09">Number</label>
<input type="number"
       min="0"
       max="100"
       step="5"
       name="field09" id="field09"><br>
```

## A checkbox

The checkbox allows the user to either enable or disable an option.

```html
<label for="field10">Checkbox</label>
<input type="checkbox"
       checked
       name="field10" id="field10"><br>
```

Notice that only if the user puts a 'check in the box' the browser will send this information to the server. If the
checkbox remains 'unchecked', the whole input is not present in the `$_POST` in PHP.

If the checkbox is checked, then the server will receive it with a value of 'on':

```text
  'field10' => string 'on' (length=2)
```

When the user has not checked the box, its value is missing (look for the missing field 10):

```text
/var/www/student/examples/week05/01/process.php:3:
array (size=14)
  'field01' => string 'wfwfe' (length=5)
  'field02' => string '3234@hefnef' (length=11)
  'field03' => string '8394828934' (length=10)
  'field04' => string '2026-07-29' (length=10)
  'field05' => string '2026-08' (length=7)
  'field06' => string '2026-W27' (length=8)
  'field07' => string '13:35' (length=5)
  'field08' => string '60' (length=2)
  'field09' => string '30' (length=2)
  'field11' => string 'J' (length=1)
  'field12' => string 'AEKOKFOEKF' (length=10)
  'field13' => string 'wfwfewefwefwef' (length=14)
  'field14' => string 'J' (length=1)
  'submitbutton' => string 'Verzenden' (length=9)
```

## Radio button to select between options

Radio buttons allow the user to select between a fixed set of options. This is a bit different of a setup because now we
need multiple inputs with the same name. To organize these `<input>` element we use a `<fieldset>`. The `<fieldset>` is
an element that will draw a box around HTML-elements with the possibility of adding a caption (`<legend>`). See the
image below.

![fieldset-example.png](images/fieldset-example.png)

Notice that when a user selects one of the given options, only that `<input>`-value is sent to the server.

```html

<fieldset>
    <legend>Radio button</legend>
    <label><input type="radio" id="field11a" name="field11" value="R">Rock</label><br>
    <label><input type="radio" id="field11b" name="field11" value="J" checked>Jazz</label><br>
    <label><input type="radio" id="field11c" name="field11" value="C">Classical</label><br>
</fieldset>
```

## An input that should adhere to a pattern

Sometimes you might want to enforce that the input given matches a certain pattern. These patterns can be specified
using a (complex) language called 'regular expressions'. See the references below for more information or books.

Notice that the browser will only give a generic error when the input does not satisfy the pattern.

```html
<label for="field12">Pattern</label>
<input type="text" name="field12" id="field12"
       pattern="[A-Z]+"
       size="30"
       required
       placeholder="Type only capital characters"><br>
```

## Passwords

When entering passwords it might not be advisable that other users (watching your screen) can read the password.
Therefore, there is an input-type 'password'. This will mask the actual characters typed (e.g. using asterisk or
bullits).

You might want to add a `pattern="...."` attribute to validate the password complexity using a regular expression. In
this case we tell the browser that the password length is minimal 4 characters and maximum length of 42 characters.

```html
    <label for="field13">Password</label>
<input type="password" name="field13" id="field13" minlength="4" maxlength="42"><br>

```

## Selecting an option from a list using a dropdown

```html
<label for="field14">Dropdown</label>
<select name="field14" id="field14">
    <option value="">-None-</option>
    <option value="J">Jazz</option>
    <option value="R">Rock</option>
    <option value="C">Classical</option>
</select>
```

# Submitting the information

To instruct the browser to send the user input to the server, you need to add a **submit** button. This can be an
`<input>` with `type="submit"` or a regular `<button>`.

```html
    <input type="submit" name="submitbutton"><br>
</form>

```

## Styling a form

There are several ways to style a form

* using a grid
* using flex-box
* use display:inline-block for labels to be able to assign a width to it.
* assign styling when the input is invalid
* assign styling when an input _has the focus_ (the user can enter text)

Depending on your choice of styling the HTML might need some adjustments. In this example I showed how to simply make
the inputs being left-aligned by giving the `<label>` elements a fixed width.

Have a look at the example below. We will discuss every part separately.

```css
body {
    font-family: sans-serif;
}

label {
    display: inline-block;
    width: 15em;
    margin-bottom: 10px;
}

fieldset {
    width: fit-content;
}

input {
    padding: 4px;

    &:user-invalid {
        border: 2px solid red;
    }
}

input:focus {
    border: 2px solid black;
}
```

First we assign a better font to the whole page using a `body` selector.

```css
body {
    font-family: sans-serif;
}
```

By using the `display:inline-block` the `<label>` becomes a "block" element that can have a fixed width. In this case
the width is measured in `em`-units. The character 'm' is the widest character; an 'm-dash' is a dash (line) with the
same width as the character 'm'. Notice, that this is shorter than the minus symbol. So `15em` means _'as wide as if 15
characters m were used'_.

This is useful if you know that all your label will fit in 15 characters.

```css
label {
    display: inline-block;
    width: 15em;
    margin-bottom: 10px;
}
```

The `<fieldset>` is an element that will draw a box around HTML-elements with the possibility of adding a caption.

```css
fieldset {
    width: fit-content;
    margin: 10px;
}
```

This element will normally spread the whole width of the page. By using `width: fit-content` you instruct the browser to
first render the children and then determine how wide the widest child is. This will determine the width of the
`<fieldset>`

## Dynamic styling based on user behaviour

When the user navigates the form we can use CSS-instructions to improve user interaction. Have a look at the CSS below.

```css
input {
    padding: 4px;
}

input:user-invalid {
    border: 2px solid red;
}

input:focus {
    border: 2px solid black;
}
```

First, we set up the input to have some more space inside the box using the `padding:4px` instruction. See the
difference below:

First, without the extra padding.

![input-standard.png](images/input-standard.png)

Next, the one with a little more padding (4px).

![input-extra-padding.png](images/input-extra-padding.png)

The `pseudo-selector` `:user-invalid` will allow us to style an input when the user has entered an invalid text (see
references below for more information).

The `pseude-selector` `:focus` will allow us to style an input when the user has moved 'the focus' to an `<input>`
element or other form control (like `<select>`, `<textarea>`).

# Sending informaton to the server




# References

* [MDN on forms](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/form)
* [MDN Learn Forms](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms)
* [MDN on form validation](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms/Form_validation)
* [An introduction to Regular Expressions](https://learning.oreilly.com/library/view/an-introduction-to/9781492082569/)
* [Introducing Regular Expressions](https://learning.oreilly.com/library/view/introducing-regular-expressions/9781449338879/)

* [MDN :user-invalid CSS pseudo-class](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Selectors/:user-invalid)
