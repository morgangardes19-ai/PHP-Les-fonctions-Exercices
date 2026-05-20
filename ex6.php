<?php

/**
 * Cette fonction affiche l'identité d'une personne.
 */
function identite(string $nom, string $prenom, int $age): string
{
    return "Bonjour $nom $prenom tu as $age ans.";
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
        <?= identite("Jon", "Café", 30) ?>
    </p>
</body>

</html>