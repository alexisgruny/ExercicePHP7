<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 2</title>
</head>
<body>
  <p>
    <?php
    echo $_GET['lastname'];
    echo $_GET['firstname'];
    echo (empty($_GET['age']))? ' empty': $_GET['age'];
     ?>
  </p>
</body>
</html>
