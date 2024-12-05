<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $obiekt = '{"jabłko": 3,
                "banan": 5,
                "śliwka": 7
                }';
    $rozpakowany = json_decode($obiekt,true);
    print_r($rozpakowany);
    echo $rozpakowany['jabłko'];

    $rozpakowany = json_decode($obiekt);
    print_r($rozpakowany);
    echo $rozpakowany->jabłko;
    ?>
</body>

</html>