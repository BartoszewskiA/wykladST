<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $opcje = array(
        'pilka' => 'piłka nożna',
        'kosz' => 'koszykówka',
        'siat' => 'siatkówka',
        'nar' => 'narciarstwo',
        'hokej' => 'hokej',
        'boks' => 'boks',
        'inny' => 'inny sport'
    );
    if (isset($_POST['opcja'])) { // wartości w formularzu są wpisane
        foreach ($opcje as $klucz => $wartosc) {
            if ($klucz == $_POST['opcja']) {
                $cowybrano = $wartosc;
            }
        }
        print("Użytkownik wybrał opcję: <b>$cowybrano</b>.<br />");
        print '<br /><a href="p02.php">Powrót do formularza</a>';
    } else { // nie ma wpisanych danych, wyświetlamy formularz
        print '<form action="p02.php" method="post"><div>';
        print 'Wybierz, jak sport lubisz:<br /><br />';
        foreach ($opcje as $klucz => $wartosc) {
            print("<input type=\"radio\" name=\"opcja\" value=\"$klucz\" />");
            print($wartosc . "<br />");
        }
        print '<p><input type="submit" value="Wyślij" /></p>';
        print '</div></form>';
    }
    ?>
</body>

</html>