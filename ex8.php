<?php

/**
 * Cette fonction affiche la somme de 3 nombres.
 */
function somme(int $nombre1, int $nombre2, int $nombre3): int
{
    return $nombre1 + $nombre2 + $nombre3;
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
        <?= somme(6, 2, 0) ?>
    </p>
</body>

</html>