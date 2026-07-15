<?php

$name            = "Martin Molema";
$city            = "Meppel";
$country         = "Netherlands";
$age             = Date('Y') - 1970;
$social_url      = "https://linkedin.com/in/martinmolema";
$social_sitename = "LinkedIn";
$social_logo     = "./images/linkedin.png";
$hobby           = "playing the piano";
$foods          = [
        "stroopwafel",
        "stamppot",
        "oranjebitter"
];
$myFavoriteFood = $foods[1];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile of <?= $name ?></title>
    <link href="css/profile.css" rel="stylesheet"/>
</head>
<body>
<article>
    <section>
        <header>
            <h1>This is the profile page of the <?= $name ?></h1>
        </header>
        <?php
        echo <<< END_OF_HTML
          <p>
              My name is $name. I live in $city in $country. I am currently $age years of age. My hobby is $hobby .
          </p>
            <p>
            You can find me on <a href="$social_url" title="Social media"><img src="$social_logo" alt="Social logo" class="logo">$social_sitename</a>
</p>
END_OF_HTML;
        ?>
    </section>
    <section>
        <p>In my home country we love to eat:</p>
        <ul>
            <?php
            foreach ($foods as $food) {
                if ($food == $myFavoriteFood) {
                    $classname = "favorite";
                } else {
                    $classname = "normal";
                }
                echo "<li class='$classname'>$food</li>";
            }
            ?>
        </ul>
    </section>
</article>
</body>
</html>
