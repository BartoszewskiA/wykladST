<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Klasa_A
{
    public function __construct()
    {
        echo "To ja konstruktor klasy A<br>";
    }
}

class Klasa_B extends Klasa_A
{
    public function __construct()
    {
        parent::__construct(); //konstruktor klasy rodzic
        echo "A to konstruktor klasy B<br>";
    }
}

$b = new Klasa_B();
?>    
</body>
</html>