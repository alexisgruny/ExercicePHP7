<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <p>
    <?php
    $count = 100;
    $multiplicateur = 2;
    while($count != 10){
      echo $count*$multiplicateur. ' ';
      $count--;
    };
    ?>
  </p>
</body>
</html>
