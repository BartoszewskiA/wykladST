<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formularz kontaktowy</h1>
    <form action="p2_wynik.php" method="post">
        <!-- Pole tekstowe -->
        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="imie" required>
        <br><br>
        <!-- Pole email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <!-- Pole wyboru -->
        <label for="wybor">Wybierz opcję:</label>
        <select id="wybor" name="opcja">
            <option value="opcja1">Opcja 1</option>
            <option value="opcja2">Opcja 2</option>
            <option value="opcja3">Opcja 3</option>
        </select>
        <br><br>
        <!-- Przycisk wysyłający formularz -->
        <input type="submit" value="Wyślij" />
</body>

</html>