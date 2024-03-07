<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administer</title>
</head>
<body>
    

    <form action=""method= "post">
   <?php foreach ($signe as $k => $v):?>
        <label for="<?= $k?>"><?= $k?>:</label><br>
        <input type="text" name=Bélier id="<?= $k?>" value = "<?= $v?>" ><br>

        <?php endforeach ?>
        </form>
</body>
</html>