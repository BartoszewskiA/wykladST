<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $wielowymiarowaTablica = array(
        "owoce" => array("jabłko", "banan", "śliwka"),
        "warzywa" => array("marchew", "ziemniak", "pomidor")
    );
    foreach ($wielowymiarowaTablica as $klucz => $wartosc) {
        if (!is_array($wartosc))
            return;
        echo "tablica: $klucz = ";
        for ($i = 0; $i < count($wartosc); $i++)
            echo "$wartosc[$i], ";
        echo"<br>";
    }

    ?>

</body>

</html>