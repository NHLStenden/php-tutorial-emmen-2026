<?php


function checkName(string $name): bool
{
    return preg_match("/[A-Z]/", $name) && strlen($name) >= 5;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
}

$validations = [
        'Name' => ["required" => true, "validation" => null, "error" => null],
        'Email' => ["required" => true, "validation" => FILTER_VALIDATE_EMAIL, "error" => "Please enter a valid email address"],
        'Surname' => ["required" => true, "validation" => null, "error" => null],
        'Areacode' => ["required" => true, "validation" => FILTER_VALIDATE_INT, "error" => "Must be a number"],
        'Phonenumber' => ["required" => true, "validation" => FILTER_VALIDATE_INT, "error" => "Must be a number"],
        'company' => ["required" => true, "validation" => null, "error" => null],
        'StreetAddressLine1' => ["required" => true, "validation" => null, "error" => null],
        'StreetAddressLine2' => ["required" => false, "validation" => null, "error" => null],
        'city' => ["required" => true, "validation" => null, "error" => null],
        'state' => ["required" => true, "validation" => null, "error" => null],
        'zipcode' => ["required" => true, "validation" => null, "error" => null],
        'website' => ["required" => true, "validation" => FILTER_VALIDATE_URL, "error" => "Must be a valid URL"],
];


$html        = "";
$isFormValid = true;
foreach ($validations as $key => $validationRule) {

    $value = $_POST[$key];

    $flag     = $validationRule["validation"];
    $required = $validationRule["required"];
    $error    = $validationRule["error"];

    $isThisFieldValid = true;

    if ($required) {
        $isThisFieldValid = (!empty($value));
        if (!$isThisFieldValid) {
            $html .= "<div class='error'>$key is empty</div>";
        }
    }
    if ($isThisFieldValid) { // no need to check further if it is required but missing
        // extra checks
        switch ($key) {
            case "Email":
                $mailEndsWithEU = str_ends_with($_POST[$key], ".eu");
                if (!$mailEndsWithEU) {
                    $html             .= "<p class='error'>EMail is not ending with '.eu'</p>";
                    $isThisFieldValid = false;
                }
                break;
            case "Surname":
            case "Name":
                if (!checkName($_POST[$key])) {
                    $html             .= "<p class='error'>$key should be at least 5 characters and contain 1 uppercase char</p>";
                    $isThisFieldValid = false;
                }

                break;
        }

        if (!is_null($flag)) {
            $validationResult = filter_input(INPUT_POST, $key, $flag);
            if ($validationResult === false) {
                $html             .= "<p class='error'>$key: $error </p>";
                $isThisFieldValid = false;
            }
        }
    }
    if ($isThisFieldValid) {
        $html .= "<p class='valid'>$key = $_POST[$key]</p>";
    }
    $isFormValid = $isFormValid && $isThisFieldValid;
}

if (!$isFormValid) {
    $html = "<p>There are errors</p>" . $html;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <style>
        .error {
            color: Red;
        }

        .valid {
            color: green;
        }
    </style>
</head>
<body>
<main>
    <article>
        <header><h1>Validation of form</h1></header>
        <section>
            <?= $html ?>
        </section>
    </article>
</main>
</body>
</html>
