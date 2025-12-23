<?php

$sdn ="mysql:host=localhost;dbname=joins;charset=utf8mb4";
$user="root";
$pass="";

try{
    $connecte=new PDO($sdn, $user, $pass);
    $connecte->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $quire = "SELECT * FROM `users`";
    $stmt = $connecte->prepare($quire);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo "yesss";
}
catch(PDOException $e){
    echo "faild". $e->getMessage();
}
?>


