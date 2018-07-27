<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 4</title>
</head>
<body>
  <p>
    <?php
    $random1 = rand(1,5);
    $random2 = rand(1,5);
    function checkNumber($num1, $num2) {
      if ($num1 > $num2) {
        return '. Le premier nombre est plus grand.';
      }elseif ($num1 < $num2) {
        return '. Le premier nombre est plus petit.';
      }else {
        return '. Les deux nombres sont identiques.';
      }
    }
    echo evalNumbers($random1, $random2);
    ?>
  </p>
</body>
</html>
