<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix</title>
</head>
<body>
    <form method="post" action="index.php?action=reponse">
    <label for="pet-select">Choisissez votres signe:</label>

<select name="liste" id="pet-select">
<?php foreach ($signe as $k => $v):?>
  <option value="<?= $k?>"><?= $k?></option>
 <?php endforeach ?>
</select>
<input type="submit" value="valider">
    </form>
</body>
</html>