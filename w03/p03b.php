<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
          href="styl.css">
</head>

<body>
    32
    <?php
    $tab = $_POST['dane'];
    if (is_array($tab) && (count($tab) > 0)) {
        echo "<table>";
        echo " <tr><th>Klucz</th><th>Wartość</th></tr>";
        foreach ($tab as $klucz => $wartosc) {
            echo "<tr>";
            if (empty($wartosc)) {
                echo "<td>$klucz</td><td><i>pusty</i></td>";
            } else {
                echo "<td>$klucz</td><td><i>$wartosc</i></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<i>pusty lub nieprawidłowy</i>";
    }
    ?>
</body>

</html>