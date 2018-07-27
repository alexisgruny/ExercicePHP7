<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 10</title>
</head>
<body>
  <p>
    <?php
    $departements = array(
      02 => 'Aisne ',
      60 => 'Oise ',
      59 => 'Nord ',
      62 => 'Pas-de-calais ',
      80 => 'Somme ',
    );
    foreach ($departements as $key => $element) {
      echo 'Le département '. $element. ' a le numéro '. $key. '<br/>';
    }
    ?>
  </p>
</body>
</html>
