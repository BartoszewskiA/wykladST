<?php
class Osoba
{
    public $imie;
    public $nazwisko;
    public $wiek;
    public function __construct()
    {
        echo "Zadziałał konstruktor<br>";
    }
    public function __destruct()
    {
        echo "Zadzaiałał destruktor";
    }
    public function przedstaw_sie()
    {
        return $this->imie . ", " .  $this->nazwisko . ", " . $this->wiek . "<br>";
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
    <div style="border: 1px solid red">

    <?php

    $ktos = new Osoba();
    $ktos->imie = "Jan";
    $ktos->nazwisko = "Kowalski";
    $ktos->wiek = 30;

    //echo "$ktos->imie $ktos->nazwisko $ktos->wiek";
    echo $ktos->przedstaw_sie();
    unset($ktos);
    ?>
    </div>
    
</body>
</html>