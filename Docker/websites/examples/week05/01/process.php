<?php

var_dump($_POST);

/**
 * Now we have to repeat the validation all over again. Fortunately there are some validations functions in PHP
 *
 *  https://www.php.net/manual/en/filter.examples.validation.php
 *
 *
 */

$errors = array();

/**
 * Notice that field10 is a checkbox; if left unchecked, it will be missing from the $_POST
 */
$requiredItems = [
        "field01",
        "field02",
        "field03",
        "field04",
        "field05",
        "field06",
        "field07",
        "field08",
        "field09",
        "field11",
        "field12",
        "field13",
        "field14",
];

foreach ($requiredItems as $item) {
    if (!array_key_exists($item, $_POST)) {
        $errors[$item] = "required field";
    }
}

if (strlen($_POST['field01']) < 1 || strlen($_POST['field01']) > 10) $errors['field01'][] = "Must be at least 1 character or at most 10";
if (!filter_input(INPUT_POST, 'field02', FILTER_VALIDATE_EMAIL)) $errors['field02'][] = "Must be a valid email address";
// more validations here........

$errorHTML = "";
if (count($errors) > 0) {
    $errorItemsHTML = "";
    foreach ($errors as $fieldname => $errorsForField) {
        foreach ($errorsForField as $error) {
            $errorItemsHTML .= <<< ERRORS
      <p>$fieldname: $error</p>
ERRORS;

        }
    }
    $errorHTML .= "<section class='errors'><header><h2>Errors</h2></header>$errorItemsHTML</section>";
}

// Copy the whole $_POST
$values = $_POST;

// IF the checkbox (field10) was checked, the value is present; we will be replacing that value 'on' with 'CHECKED'
if (array_key_exists('field10', $_POST)) {
    $values['field10'] = "CHECKED";
} else {
    $values['field10'] = "UNCHECKED";
}

//now sort by key (because if field10 was missing (unchecked checkbox) the value if added at the end.
ksort($values);

/**
 * now walk through the array of values and create a HTML report. If a valid is reported as invalid, the value gets a
 * class 'invalid' so we can change the styling of the value.
*/
$valueHTML = "";
foreach ($values as $key => $value) {
    $classname = "valid";
    if (key_exists($key, $errors)) {
        $classname = "invalid";
    }
    if ($key !== "submitbutton") {
        $valueHTML .= <<< VALUES
<tr class="$classname"><td>$key</td><td>$value</td></tr>
VALUES;

    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results of form</title>
    <link href="process.css" rel="stylesheet">
</head>
<body>
<main>
    <article>
        <h1>Form submitted</h1>
        <?= $errorHTML ?>
        <section class="values">
            <header><h2>Values received</h2></header>

            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody><?= $valueHTML ?></tbody>
            </table>
        </section>
    </article>
</main>

</body>
</html>
