<?php

/**
 * Cette fonction concatène un nombre et une chaîne de caractère.
 */
function concat(int $nombre, string $chaîne): string
{
    return "$nombre $chaîne";
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
        <?= concat(5, "est un nombre") ?>
    </p>
</body>

</html>