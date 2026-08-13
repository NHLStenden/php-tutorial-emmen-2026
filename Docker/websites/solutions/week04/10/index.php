<?php
function createHSL(int $hue, int $saturation, float $lightness): string
{
    return "hsl($hue $saturation% $lightness%);";
}

function createStrip(int $saturation, float $lightness): string
{
    $result = '';
    for ($i = 0; $i <= 360; $i++) {
        $color  = createHSL($i, $saturation, $lightness);
        $result .= "<div style='background-color:$color' >&nbsp;</div>";
    }
    return $result;
}

function createStrips(int $lightness): string
{
    $result = '';
    for ($i = 100; $i > 0; $i--) {
        $result .= "<div class='strip'>" . createStrip($i, $lightness) . "</div>";
    }
    return $result;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF - 8">
    <link rel="stylesheet" href="index.css">
    <title>Assignment 1</title>
</head>
<body>
<article class="strip animate">
    <?= createStrip(100,50); ?>
</article>

<article style="background-color:<?= createHSL(20, 100, 80) ?>">
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci atque consequuntur dolore doloremque
        dolores earum et hic minima, molestias nesciunt nulla qui reiciendis sunt totam velit veniam vitae. Impedit,
        voluptas.
    </div>
</article>
<hr>
<article class="strip">
    <?= createStrip(50, 80); ?>
</article>
<hr>
<article>

</article>
<article class="container">
    <section class="fixed">
        <?=  createStrips(50); ?>
    </section>
    <section class="fixed text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur dolores ducimus est eveniet
            explicabo facilis incidunt, inventore ipsum laboriosam maxime nam natus nesciunt optio quasi reprehenderit
            sapiente tenetur totam? Consequatur dolorum exercitationem nesciunt non, repellat repudiandae voluptatibus.
            Dicta eos ex natus nemo nulla quam sunt temporibus tenetur ullam velit? Beatae doloribus exercitationem
            magnam
            nostrum possimus quia sit tempore veniam? Ad aspernatur aut autem commodi dicta distinctio doloribus
            expedita
            fuga illo, ipsam labore molestias natus omnis perferendis placeat provident quas quis quos reprehenderit
            soluta
            tempore tenetur ut vel voluptate voluptatum. Excepturi hic rem sapiente unde? A ab accusamus accusantium
            adipisci aliquid architecto asperiores assumenda deleniti dicta ducimus enim esse eum explicabo itaque
            nesciunt
            qui, quibusdam quis reiciendis repellendus sapiente voluptas! A accusamus aliquid aspernatur earum excepturi
            mollitia perferendis quas qui sapiente tempore. Accusamus alias delectus dicta, dignissimos eum, fugiat hic
            illo
            laboriosam libero maiores molestiae non quae, sunt suscipit tempora? Aspernatur assumenda, dolor doloremque
            excepturi in, incidunt minus neque nihil omnis pariatur perferendis, quas quibusdam rem sint suscipit
            voluptate
            voluptatem voluptates. Maiores natus odio tempore? Incidunt modi repellat vero voluptates. Atque beatae
            commodi,
            corporis cumque cupiditate distinctio doloribus eligendi eum eveniet nisi nulla officia officiis, quia
            repudiandae voluptatem! Ad assumenda at blanditiis culpa dolore nam officiis recusandae velit voluptate
            voluptatem. Aut enim laboriosam odio quisquam voluptatum. A, ab alias, at, cumque cupiditate illo illum
            laborum
            nemo quas quibusdam repudiandae similique! Aut beatae blanditiis dolorum fuga voluptate? Minima nihil
            placeat
            rem? Assumenda aut consequuntur enim impedit incidunt, quis soluta suscipit tempore ut velit! Dignissimos
            doloremque dolorum et fugiat illum incidunt inventore ipsa officiis quos reiciendis, rem sequi sint tenetur
            vitae voluptate. Consequatur dolores ea eaque enim exercitationem ipsa nulla odio sequi sit. Ad, assumenda
            atque
            illum molestiae odio ut. Animi deserunt doloribus esse explicabo fuga inventore laboriosam libero officiis
            reiciendis totam.</span>
        </p>
    </section>
</article>
<hr
</body>
</html>


