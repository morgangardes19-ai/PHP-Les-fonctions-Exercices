<?php 

function concat(string $chaine1, string $chaine2): string
{
    // return $chaine1 . " " . $chaine2;
    return "$chaine1 $chaine2";
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
    <?= concat("Hello", "world") ?>
</p>

    
    
</body>
</html>