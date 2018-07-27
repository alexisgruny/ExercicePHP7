<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 8</title>
</head>
<body>
  <p>
    <?php
    $number1 = 12;
    $number2 = 2;
    $number3 = 123;
    function calc($num1, $num2, $num3){
      $result = $num1 + $num2 + $num3;
      return $result;
    };
    echo calc($number1, $number2, $number3);
?>
  </p>
</body>
</html>
