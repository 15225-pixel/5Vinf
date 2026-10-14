<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>meest gestreamde nummer op Spotify</title>
    </head>
    <body>
        <h1>meest gestreamde nummer op Spotify</h1>
        <style>
        table {
            border-collapse; collapse;
        }
            td,th {
                border: 2px solid;
                border-color: rgba(5, 18, 41, 0.44);
                padding: 10px;

            }

        </style>
<?php

    $nummer = array( "titel"       => "Blinding Lights"
                   , "artiest"     => "The Weeknd"
                   , "album"       => "After Hours"
                   , "duur"        => "3:22"
                   , "afbeelding"  => "blinding-lights.png"
                   );

?>
<table>
<tr>
    <td>titel:</td>
    <td>Blinding Lights</td>
</tr>
<tr>
    <td>Artiest:</td>
    <td>The Weeknd</td>
</tr>
<tr>
    <td>Album:</td>
    <td>After hours</td>
</tr>
<tr>
    <td>duur:</td>
    <td>3:22</td>
</tr>
<tr>
    <td>afbeelding:</td>
    <td><img src="../afbeeldingen/blinding-lights.png" alt="blinding-lights" id="blinding-lights" /><</td>
</tr>
<table>

    </body>
</html>