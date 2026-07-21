<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flex layout - 3</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<main>
    <header>
        <h1>Flex Layout for cards</h1>
        <h2>Try to resize the browser window and notice the wrapping behaviour</h2>
    </header>
    <article>
        section*7>header>h

        <?php

        $card1 = ["title" => "About",        "description" => "This is some text"];
        $card2 = ["title" => "Help",         "description" => "This is some text"];
        $card3 = ["title" => "Products",     "description" => "This is some text"];
        $card4 = ["title" => "Contact",      "description" => "This is some text"];
        $card5 = ["title" => "Directions",   "description" => "This is some text"];
        $card6 = ["title" => "Complaints",   "description" => "This is some text"];
        $card7 = ["title" => "Hall of fame", "description" => "This is some text"];


        $cards = [$card1, $card2, $card3, $card4, $card5, $card6, $card7];

        foreach ($cards as $card) {
            echo <<< END_CARD
     <section>
       <header><h2>{$card["title"]}</h2></header>
       <p>{$card["description"]}</p>
</section>
END_CARD;

        }


        ?>

    </article>
</main>
</body>
</html>
