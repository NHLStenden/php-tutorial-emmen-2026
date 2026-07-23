<?php

function CreateHTMLForRecord(array $values): string
{
    $html = "<tr>";

    $html = $html . "<td>{$values['Name']}</td>";
    $html = $html . "<td>{$values['Age']}</td>";
    $html = $html . "<td>{$values['X']}</td>";
    $html = $html . "<td>{$values['Y']}</td>";
    return $html;
}
/*function CreateHTMLForRecord(array $values): string
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
}*/

$table = [
        ["Name" => "Jack", "Age" => 10, "X" => 2.4, "Y" => 12],
        ["Name" => "John", "Age" => 12, "X" => 9, "Y" => 23],
        ["Name" => "Alice", "Age" => 10, "X" => 5, "Y" => 9],
];
/* this is equivalent to the initialisation below
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
*/


$html  = "";
foreach ($table as $row) {
    $html = $html . CreateHTMLForRecord($row);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;

            tr td {
                border: 1px solid darkgray;
            }
        }
    </style>
</head>
<body>
<main>
    <article>
        <section>
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
        </section>
    </article>
</main>
</body>
</html>
