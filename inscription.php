<?php
include_once("bdd.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche inscription</title>
</head>
<body>
    <form action="" method="post">
    <h1>Formulaire d'inscription</h1>
       <p><input type="text"      name="nom"      placeholder="VOTRE NOM"></p> 
       <p><input type="text"      name="prenom"  placeholder="VOTRE PRENOM"></p>
       <p><input type="email"     name="email"    placeholder="VOTRE EMAIL"></p>
       <p><input type="password"  name="password" placeholder="VOTRE MOT DE PASSE"></p>
       <p><button type="submit"    name="submit">S'inscrire</button></p>
    </form>
</body>
</html>
<?php
// verifier les champs du formulaire 
if(isset($_POST['submit']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['password'])){
    $nom =      trim(htmlspecialchars($_POST['nom']));
    $prenom =   trim(htmlspecialchars($_POST['prenom']));
    $email =    trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars(($_POST['password'])));
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Verification des champs vide
    if(empty($nom) OR empty($prenom) OR empty($email) OR empty($password)){
        echo "Un champs est vide";
    }
    else{
        // Verification pour la longueur du mot de passe
        if(strlen($password) < 8){
            echo "Le mot de passe est trop court ";
        }
    // COnnexion à la base de donnée
    $sqlQuery = 'INSERT INTO seluser(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)';

    // Préparation de l'execution
    $insertRecip = $conn->prepare($sqlQuery);
    $insertRecip->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'password' => $password,
    ]);
    }
}