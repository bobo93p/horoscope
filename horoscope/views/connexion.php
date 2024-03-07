<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <form action="index.php?action=connexion" method="POST">
        <label for="login">login</label>
        <input type="text" name=login id="login" required>

        <label for="mdp" >Mots de passe</label>
        <input type="text" id="mdp" name="mdp" required>

        <input type="submit" value="valider">
    </form>
</body>
</html>