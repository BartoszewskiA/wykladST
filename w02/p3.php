<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $zmienna = "To jest przykładowa zmienna";
   // unset($zmienna);
    if (isset($zmienna)) {
        echo "Zmienna istnieje i ma przypisaną wartość: " . $zmienna;
    } else {
        echo "Zmienna nie istnieje lub ma wartość null.";
    }
    ?>
</body>

</html>