# A simple PHP program - example 5

In this example we see the more traditional way to create HTML-content through PHP: we generate complete HTML as a string
using the `print()` or `echo` instructions.

```php
<?php
print("<h1>Welcome $name $surname </h1>")
?>
```

This is valid. The `$name` and `$surname` are replaced with their values. This only works if you use **double qoutes**!

However, it poses a new problem: the IDE will have problems understanding how you create the HTML and might stop validating
the HTML. Furthermore, it might generate a lot more `<?php` tags than the other options (see [example 6](../06/readme.md)
and [example 7](../07/readme.md)) as can be seen below. 


Here the generation of information is part of the template, which confuses matter more. It is even bad practice because
there is some HTML that is the same in both the IF and ELSE branch.

```php
<?php
    print("<p>Today is $today</p>");
    print("<p > 283 times 4937 = $calculation </p > ");
    if (date("Y") == "2026") {
        print("<p>Is it 2026? yes</p>");
    } else {
        print("<p>Is it 2026? no</p>");
    }
?>

```

This could be improved upon using the code below. It works, but it hardly improves readability for yourself or other 
programmers.

```php
<?php
    print("<p>Is it 2026?");

    if (date("Y") == "2026") {
        print("yes");
    } else {
        print("no");
    }
    print ("</p>");
?>

```



