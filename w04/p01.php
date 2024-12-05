<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        setcookie("test","Testowe ciasteczko", time()+60); 
        foreach($_COOKIE as $nazwa=>$tresc)
            echo "$nazwa -> $tresc <br>";
    ?>
</body>
</html>