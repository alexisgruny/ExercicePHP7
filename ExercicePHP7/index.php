<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    $age = 12;
    $gender = 'homme';
    function typeOfHuman($bin , $year){
      echo ($bin == 'homme')? 'vous êtes un homme': '';
      echo ($bin == 'femme')? 'vous êtes une femme': '';
      echo ($year >= 18)? 'vous êtes majeur': 'vous êtes mineurs';
    }
    echo typeOfHuman($age, $gender);
    ?>
  </p>
</body>
</html>
