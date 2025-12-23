<?php
session_start();
require 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';

   
    if ($username == "" || $password == "") {
       header("Location: login_html.php");
       //echo "3mr linput";
        exit();
    }

    
    $check = $connecte->prepare("SELECT * FROM users WHERE username = ?");
    $check->execute([$username]);
    if ($check->rowCount() == 0) {
       //  echo "rah kin";
       header("Location : login_html.php");
        exit();
    }


      header("Location: Profil.php");
            exit();
}



?>

