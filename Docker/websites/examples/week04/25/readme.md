# Week 4 - PHP - Example with arrays and functions

In this example we declare an array with 'records': every item in the main array is a collection of key-value pairs.
With this array we will be building an HTML `<table>`.

Have a look at the array:

```php
$table = [
        ["Name" => "Jack", "Age" => 10, "X" => 2.4, "Y" => 12],
        ["Name" => "John", "Age" => 12, "X" => 9, "Y" => 23],
        ["Name" => "Alice", "Age" => 10, "X" => 5, "Y" => 9],
];
```

So the array contains three items, each consisting of an array of key-value pairs. This would be the same as below:

```php
$row1 = [
        "Name" => "Jack",
        "Age" => 10,
        "X" => 2.4,
        "Y" => 12
];
$row2 = [
        "Name" => "John",
        "Age" => 12,
        "X" => 9,
        "Y" => 23
];
$row3 = [
        "Name" => "Alice",
        "Age" => 10,
        "X" => 5,
        "Y" => 9
];
$table = [$row1, $row2, $row3];
```

Now we use a simple loop to walk through the 'rows' in the array and call a function that will return a HTML table row
with HTML data cells.  

```php
$html  = "";
foreach ($table as $row) {
    $html = $html . CreateHTMLForRecord($row);
}
```

We start by initialising a variable to the empty string to collect all the HTML that the function will return. Everytime
the function returns a value, we will append it to the already collected HTML. We use the `.` (dot) operator that 
'concatenate' ('concat' in short) the existing HTML to the newly obtained from the function.

The function will simply get all the values from the records. Because we used string as key we can easily get the information
from the array. The function is shown below. Because getting a value from an array is a bit more complicated than a simple
variable when using them in a string, we need to surround it by `{....}`.

```php
function CreateHTMLForRecord(array $values): string
{
    $html = "<tr>";

    $html = $html . "<td>{$values['Name']}</td>";
    $html = $html . "<td>{$values['Age']}</td>";
    $html = $html . "<td>{$values['X']}</td>";
    $html = $html . "<td>{$values['Y']}</td>";
    return $html;
}

```


This would be the same as the function below, which might be a bit more readable. 

```php
function CreateHTMLForRecord2(array $values): string
{
    $html = "<tr>";
    $name = $values['Name'];
    $age = $values['Age'];
    $x = $values['X'];
    $y = $values['Y'];

    $html = $html . "<td>$name</td>";
    $html = $html . "<td>$age</td>";
    $html = $html . "<td>$x</td>";
    $html = $html . "<td>$y</td>";
    return $html;
}

```

We can now easily combine the result `$HTML` in the main code to combine with HTML body as below. Notice how we use the
`<?= ..... ?>` construct to echo a variable, which is the same as `<?php echo $html ?>`. 

```php
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th></th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?= $html ?>
    </tbody>
</table>
```
