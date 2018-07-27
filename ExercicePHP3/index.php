<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <p>
    <?php
    $who = 'qui est';
    $you = 'tu ?';
    function concatenation($text, $text2) {
      return $text . ' ' . $text2;
    }
    echo concatatenation($who, $you);
    ?>
  </p>
</body>
</html>
