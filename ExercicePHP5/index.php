<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 4</title>
</head>
<body>
  <p>
    <?php
    settype($int, 'integer');
    echo $int. ', ';
    $int = 1337;
    echo $int;
    ?>
  </p>
</body>
</html>
