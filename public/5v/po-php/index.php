<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>streamingplatform</title>
        <link rel="stylesheet" href="streamingplatform.css" />
        <style>
            .afbeelding {
            padding: 0px 0px 0px 30px;
            background-color: #29381c;
            border-radius: 25px;
            vertical-align: middle;
            }
        </style>
    </head>
    <body>
<?php

    include("films.php");

    FOREACH ($films as $i => $film) {
?>
<table>
    <tr>
        <td rowspan="3"><p><?= $film["notering"] ?></p></td>
        <td class="afbeelding" rowspan="3"><a class="nummer"> </a><img src="films/<?= $film["image"] ?>" /></td>
        <td><h1><?= $film["titel"] ?> (<?= $film["jaar"] ?>)</h1></td>
        <td><h2><?= $film["genre"] ?></h2></td>
    </tr>
    <tr>
            <td colspan="4"><p><?= $film["synopsis"] ?></p></td>
</tr>
<tr>
            <td><ul><?php foreach ($film["cast"] as $acteur):?>
            <li><?=$acteur?></li>
            <?php endforeach; ?>

        <td><p><?= $film["duur"]?> minuten</p></td>
        <td><p>leeftijd: <?= $film["leeftijd"] ?></p></td>
        
        <ul><?php foreach ($film["ratings"] as $bron => $rating): ?>
       <li><?=$bron?>: <?=$rating?></li>
       <?php endforeach; ?>
    </ul>
    </tr>


</table>



<?php
    }
?>
    </body>
</html>