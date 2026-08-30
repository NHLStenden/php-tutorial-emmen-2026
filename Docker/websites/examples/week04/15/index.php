<?php
  $information = file_get_contents('./information.txt');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reading a file</title>
    <style>
        article section {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
  <?= $information ?>
</body>
</html>
