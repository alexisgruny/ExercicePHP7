<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 5</title>
</head>
<body>
  <form action="index.php" method="POST">
  <select name="gender">
    <option>Mr.</option>
    <option>Mme</option>
    <option>Mlle</option>
  </select>
  <input type="text" name="lastName" />
  <input type="text" name="firstName" />
  <input type="submit" value="envoyer" />
  <?php
  echo (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['gender']))? $_POST['lastName']. ' '. $_POST['firstName']. ' '. $_POST['gender'] : 'remplir les champs svp';
  ?>
</body>
</html>
