<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <p>
    <?php
    $count = 1;
    while($count <= 10){
      echo $count. ' ';
      $count = ($count/2) + $count;
    };
    ?>
  </p>
</body>
</html>
