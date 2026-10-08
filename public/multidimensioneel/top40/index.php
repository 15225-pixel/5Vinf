<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Top 40</title>
        <style>
            body { font-family: Arial, sans-serif; }
            table { border-collapse: collapse; width: 100%; }
            th, td { border: 1px solid #ec2323; padding: 8px; text-align: left; }
            img.cover { width: 80px; height: auto; }
            

</style>
    </head>
    <body>
        <img id="logo" src="https://www.top40.nl/img/generic/logo/top40.svg" alt="Top 40" />
<?php
    include("top40.php");
?>
        <table>
            <thead>
                <tr>
                    <th>Positie</th>
                    <th>Foto</th>
                    <th>Titel</th>
                    <th>Artiest</th>
                    <th>Vorige positie</th>
                    <th>Weken</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($top40); $i++) { ?>
                    <?php $nummer = $top40[$i]; ?>
                    <tr>
                        <td><?=  $nummer["notering"] ?></td>
                        <td><img src=<?= ($nummer["afbeelding"]) ?> > </td>
                        <td><?= ($nummer["titel"]) ?></td>
                        <td><?= ($nummer["artiest"]) ?></td>
                        <td><?= $nummer["vorige"] ?></td>
                        <td><?=  $nummer["weken"] ?></td>
                <?php } ?>
            </tbody>

        </table>
    </body>
</html>