<?php

/**
 * Cette fonction affiche si une personne est un homme ou une femme et s'il est majeur.
 */
function majorite(int $age, string $genre): string
{

    $genre = strtolower($genre);
    // var_dump($genre);
    $message = "Vous êtes un";

    if ($genre === "homme") {
        $message .= " homme ";
    } else {
        $message .= "e femme ";
    }

    $message .= "et vous êtes ";

    if ($age >= 18) {
        $message .= "majeur";
    } else {
        $message .= "mineur";
    }

    return $message;

    // return "Vous êtes un" . ($genre === 'homme' ?  " homme " : "e femme ") . "et vous êtes " . ($age >= 18 ? "majeur" : "mineur");
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
        <?= majorite(16, "femme") ?>
    </p>
</body>

</html>