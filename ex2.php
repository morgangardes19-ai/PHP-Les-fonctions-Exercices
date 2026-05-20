<?php 


function returnString(string $chaine): string
{
  return $chaine;
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
    <?= returnString("hello") ?>
</p>

    
    
</body>
</html>