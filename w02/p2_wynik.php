<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Odebrane dane:</h2>
    <!-- <?php
            $imie = $_GET["imie"];
            $adres = $_GET["email"];
            $wybor = $_GET["opcja"];
            echo "Imie: $imie<br>"
            ?> -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        echo "brak danych";
        return;
    }
    $imie = $_POST["imie"];
    $adres = $_POST["email"];
    $wybor = $_POST["opcja"];
    echo "Imie: $imie<br>";

    ?>
</body>

</html>