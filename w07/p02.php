<?php
class Osoba
{
    public $imie;
    public $nazwisko;
    public $wiek;
    public function __construct($imie, $nazwisko="NN", $wiek=0)
    {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->wiek = $wiek;
    }

    // public function __construct()
    // {
    //     $this->imie = "NN";
    //     $this->nazwisko = "NN";
    //     $this->wiek = 0;
    // }
    public function __destruct()
    {
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
    <div style="border: 1px solid red; padding: 20px;">

        <?php

        $ktos = new Osoba("Nowak");
        echo $ktos->przedstaw_sie();

        ?>
    </div>

</body>

</html>