# Week 1 - PHP - smart mixing of HTML and PHP

In this example we use a HEREDOC to mix HTML and variables from PHP. 

Please notice the code below

```php

<?php 

echo <<< END_OF_HTML


END_OF_HTML;

```

This means:
> Process the text on the following lines until a line begins with a (magic) text `END_OF_HTML`. 

This "magic text" is not really magic. You can name it anything you like as long as it is in a valid form (no space e.g.).

We call this a HEREDOC, and it finds its origin in Unix/ Linux operating Systems.

The big advantage is that we do not have to prefix every variable with `<?=` but can simply use a valid variable name. 

Notice: within a HEREDOC only variables are allowed; no expressions like calculations or function calls are allowed.