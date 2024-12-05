<?php
    session_start();
    if (isset($_POST["post_user"]) && !empty($_POST["post_user"])) {
        $_SESSION['user'] = $_POST['post_user'];
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
    <?php
    if (!isset($_SESSION['user'])) {
        echo '<form method="post">';
        echo '<label>Zaloguj się: </label>';
        echo '<input type="text" name="post_user"/>';
        echo '<input type="submit" value="Zaloguj się"/>';
        echo '</form>';
    } else
    {
        $zalogowany = $_SESSION['user'];
        echo "<p>Witaj:  $zalogowany</p>";
    }

    ?>

</body>

</html>