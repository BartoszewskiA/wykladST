<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <title></title>
</head>

<body>
  <h2>Plik testowy</h2>
  <?php
  $paleta = array("red", "green", "blue");
  foreach ($paleta as $kolor) {
    echo "<p style=\"color: $kolor ;\">Bieżąca wartość to $kolor</p>";
  }
  ?>
</body>

</html>