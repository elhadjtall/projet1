<?php
include_once('bdd.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CONNEXION</title>
</head>
<body>
    
    <form action="traitement.php" method="POST">
        <h2>CONNECTER A VOTRE COMPTE</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>VOTRE EMAIL</label>
        <input type="text" name="email" placeholder="Votre Email"><br>

        <label>VOTRE MOT DE PASSE</label>
        <input type="password" name="password" placeholder="Votre mot de passe"><br>
        <button type="submit">Connecter</button>
    </form>
</body>
</html>
