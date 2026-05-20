<?php

/**
 * Cette fonction affiche si une personne est un homme ou une femme et s'il est majeur.
 */
function majorite(int $age, string $genre): string
{
    if ($age >= 18 && $genre === "Homme") {
        return "Vous êtes un homme et vous êtes majeur.";
    } else {
        return "Vous êtes un homme et vous êtes mineur.";
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
        <?= majorite(18, "") ?>
    </p>
</body>

</html>