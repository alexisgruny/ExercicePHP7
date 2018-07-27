<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 5</title>
</head>
<body>
  <p>
    <?php
    $random = rand(1,50);
    $theodule= 'Le nombre préféré de Thédoule est le ';
    function concatenation($num, $txt) {
        return $txt . $num;
    }
    echo concatenation($random, $theodule);
     ?>
  </p>
</body>
</html>
