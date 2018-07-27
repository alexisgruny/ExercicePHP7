<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 6</title>
</head>
<body>
  <p>
    <?php
   $firstname = 'Théodule';
   $lastname = 'Dupont';
   $age = 12;
   function concatenation($name, $forname, $hisAge) {
       return 'Bonjour ' . $name . ' ' . $forname . ', tu as ' . $hisAge . ' ans.';
   }
   echo concatenation($firstname, $lastname, $age);
    ?>
  </p>
</body>
</html>
