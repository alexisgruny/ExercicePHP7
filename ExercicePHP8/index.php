<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 8</title>
</head>
<body>
  <p>
    <?php
    $calendrier = array(
      'Janvier ',
      'Fevrier ',
      'Mars ',
      'avril ',
      'Mai ',
      'Juin ',
      'Juillet ',
      'Août ',
      'Septembre ',
      'Octobre ',
      'Novembre ',
      'Décembre ',
    );
    for ($i=0; $i < 12 ; $i++){
      echo $calendrier[$i];
    };
     ?>
  </p>
</body>
</html>
