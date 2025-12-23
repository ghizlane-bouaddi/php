<?php 

session_start();
require 'connexion.php';

    $username = $_POST['name'];
    $password = $_POST['password'];

    if ($username == "" || $password == "") {
       header("Location: inscrire.php");
       //echo "3mr linput";
    } else {

        
        $check = $connecte->prepare("SELECT * FROM users WHERE username = ?");
        $check->execute([$username]);
        //var_dump($check);


        if ($check->rowCount() > 0) {
            header("Location: inscrire.php");
            //echo "user kin"
        } else {

            $sql = "INSERT INTO users (username, user_password) VALUES (?, ?)";
            $stmt = $connecte->prepare($sql);
            $stmt->execute([$username, $password]);

            
            $_SESSION['user'] = $username;

            echo "tsjlt mzyan";

            
             header("Location: Profil.php");
            exit();
        }
    }

