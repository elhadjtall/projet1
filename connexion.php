<?php
include_once("bdd.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Formulaire de Connexion</h1>
    <form action="" method="post">
        <p><input type="email" name="email" placeholder="VOTRE EMAIL"></p>
        <p><input type="password" name="password" placeholder="VOTRE MOTE DE PASSE"></p>
        <p><input type="submit" name="submit" value="Se Connecter"></p>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){

    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));

    if(empty($email) OR empty($password)){
        echo "Le champ est vide";
    }
    $sqlQuery = 'SELECT * FROM seluser WHERE email =? AND password = ?';
    $req = $bdd->prepare($sqlQuery);

     
}
