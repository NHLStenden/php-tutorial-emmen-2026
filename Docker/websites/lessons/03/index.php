<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Let's make a table</title>
    <style>
        table tr td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1>Example using the foreach using a key to understand the array</h1>
<table>
    <?php
    $row1 = ["surname" => "x", "name" => "Martin", "age" => 55];
    $row2 = ["surname" => "y", "name" => "Jack", "age" => 23];
    $row3 = ["surname" => "z", "name" => "Alice", "age" => 21];

    $table = [$row1, $row2, $row3];
    echo "<thead><tr>";
    foreach ($table[0] as $key => $value) {
      echo "<th>$key</th>";
    }
    echo "</tr></thead>";
    foreach ($table as $row) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    ?>
</table>
</body>
</html>
