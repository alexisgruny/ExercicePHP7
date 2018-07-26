<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 2</title>
</head>
<body>
  <p>
    <?php
    $isEasy = true;
    if ($isEasy = true){
      echo 'c\'est facil!! ';
    } else {
      echo 'c\'est difficile!!! ';
    }
    echo ($isEasy == true)? 'c\'est facil!! ' : 'c\'est difficile !!! ';
    ?>
  </p>
</body>
</html>
