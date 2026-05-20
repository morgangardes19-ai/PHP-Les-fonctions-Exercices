<?php

/**
 * Cette fonction compare deux nombres et nous indique si l'un est plus grand que l'autre ou s'il sont identiques.
 */
function compareNombres(int $nombre1, int $nombre2): string
{
    if ($nombre1 > $nombre2) {
        return "$nombre1 est plus grand que $nombre2";
    } elseif ($nombre1 < $nombre2) {
        return "$nombre1 est plus petit que $nombre2";
    } else {
        return "$nombre1 et $nombre2 sont identiques.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>
        <?= compareNombres(6, 5) ?>
    </p>

</body>

</html>