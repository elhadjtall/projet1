<?php
include_once ("bdd.php");
if (isset($_POST['email']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)){
        header("Location: login.php?error=Votre email est requis");
        exit();
    } else if(empty($password)){
        header("Location: login.php?error=Mot de passe est requis");
        exit();
    }else{
        $sql = "SELECT * FROM seluser WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) { 
            $row = mysqli_fetch_assoc($result);

            print_r($row);
        }
    }
}else{
    header("Location: login.php");
    exit();
}
